<?php

namespace App\Http\Controllers\Backend\GemSighting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\GemSighting\CreateGemSighting;
use App\Http\Requests\Backend\GemSighting\UpdateGemSighting;
use App\Repositories\Backend\GemSightingRepository;
use App\Events\Backend\GemSighting\GemSightingCreated;
use App\Events\Backend\GemSighting\GemSightingUpdated;
use App\Events\Backend\GemSighting\GemSightingDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\GemSighting;

use App\Models\Gem;
use App\Models\Player;

class GemSightingController extends Controller
{
    /** @var $gem_sightingRepository */
    private $gem_sightingRepository;

    public function __construct(GemSightingRepository $gem_sightingRepo)
    {
        $this->gem_sightingRepository = $gem_sightingRepo;
    }

    /**
     * Display a listing of the GemSighting.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->gem_sightingRepository->pushCriteria(
            new RequestCriteria($request)
        );
        $data = $this->gem_sightingRepository
            ->with("gem", "player")
            ->paginate(25);

        return view('backend.gem_sightings.index')->with(
            'gem_sightings',
            $data
        );
    }

    /**
     * Show the form for creating a new GemSighting.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $gems = Gem::all();
        $selectedGem = Gem::first() ? Gem::first()->_id : 0;

        $players = Player::all();
        $selectedPlayer = Player::first() ? Player::first()->_id : 0;

        return view(
            'backend.gem_sightings.create',
            compact(
                "gems",
                "selectedGem",

                "players",
                "selectedPlayer"
            )
        );
    }

    /**
     * Store a newly created GemSighting in storage.
     *
     * @param CreateGemSighting $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateGemSighting $request)
    {
        $obj = $this->gem_sightingRepository->create(
            $request->only(["gem_id", "player_id", "founded_at", "lat", "lng"])
        );

        event(new GemSightingCreated($obj));
        return redirect()
            ->route('admin.gem_sighting.index')
            ->withFlashSuccess(__('alerts.frontend.gem_sighting.saved'));
    }

    /**
     * Display the specified GemSighting.
     *
     * @param GemSighting $gem_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(GemSighting $gem_sighting)
    {
        $gem = Gem::where('id', '=', $gem_sighting->gem_id)->get();
        $gem_sighting->gem_id = $gem[0]->name;
        $player = Player::where('id', '=', $gem_sighting->player_id)->get();
        $gem_sighting->player_id = $player[0]->name;

        return view('backend.gem_sightings.show')->with(
            'gem_sighting',
            $gem_sighting
        );
    }

    /**
     * Show the form for editing the specified GemSighting.
     *
     * @param GemSighting $gem_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(GemSighting $gem_sighting)
    {
        $gems = Gem::all();
        $selectedGem = $gem_sighting->gem_id;

        $players = Player::all();
        $selectedPlayer = $gem_sighting->player_id;

        return view(
            'backend.gem_sightings.edit',
            compact("gems", "selectedGem", "players", "selectedPlayer")
        )->with('gem_sighting', $gem_sighting);
    }

    /**
     * Update the specified GemSighting in storage.
     *
     * @param UpdateGemSighting $request
     *
     * @param GemSighting $gem_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(
        UpdateGemSighting $request,
        GemSighting $gem_sighting
    ) {
        $obj = $this->gem_sightingRepository->update(
            $gem_sighting,
            $request->all()
        );

        event(new GemSightingUpdated($obj));
        return redirect()
            ->route('admin.gem_sighting.index')
            ->withFlashSuccess(__('alerts.frontend.gem_sighting.updated'));
    }

    /**
     * Remove the specified GemSighting from storage.
     *
     * @param GemSighting $gem_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(GemSighting $gem_sighting)
    {
        $obj = $this->gem_sightingRepository->delete($gem_sighting);
        event(new GemSightingDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.gem_sighting.deleted'));
    }
}
