<?php

namespace App\Http\Controllers\Backend\BoxSighting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\BoxSighting\CreateBoxSighting;
use App\Http\Requests\Backend\BoxSighting\UpdateBoxSighting;
use App\Repositories\Backend\BoxSightingRepository;
use App\Events\Backend\BoxSighting\BoxSightingCreated;
use App\Events\Backend\BoxSighting\BoxSightingUpdated;
use App\Events\Backend\BoxSighting\BoxSightingDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\BoxSighting;

use App\Models\Player;
use App\Models\Box;

class BoxSightingController extends Controller
{
    /** @var $box_sightingRepository */
    private $box_sightingRepository;

    public function __construct(BoxSightingRepository $box_sightingRepo)
    {
        $this->box_sightingRepository = $box_sightingRepo;
    }

    /**
     * Display a listing of the BoxSighting.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->box_sightingRepository->pushCriteria(
            new RequestCriteria($request)
        );
        $data = $this->box_sightingRepository
            ->with("player", "box")
            ->paginate(25);

        return view('backend.box_sightings.index')->with(
            'box_sightings',
            $data
        );
    }

    /**
     * Show the form for creating a new BoxSighting.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $players = Player::all();
        $selectedPlayer = Player::first() ? Player::first()->_id : 0;

        $boxes = Box::all();
        $selectedBox = Box::first() ? Box::first()->_id : 0;

        return view(
            'backend.box_sightings.create',
            compact(
                "players",
                "selectedPlayer",

                "boxes",
                "selectedBox"
            )
        );
    }

    /**
     * Store a newly created BoxSighting in storage.
     *
     * @param CreateBoxSighting $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateBoxSighting $request)
    {
        $obj = $this->box_sightingRepository->create(
            $request->only(["player_id", "box_id", "founded_at", "lat", "lng"])
        );

        event(new BoxSightingCreated($obj));
        return redirect()
            ->route('admin.box_sighting.index')
            ->withFlashSuccess(__('alerts.frontend.box_sighting.saved'));
    }

    /**
     * Display the specified BoxSighting.
     *
     * @param BoxSighting $box_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(BoxSighting $box_sighting)
    {
        $player = Player::where('id', '=', $box_sighting->player_id)->get();
        $box_sighting->player_id = $player[0]->name;
        $box = Box::where('id', '=', $box_sighting->box_id)->get();
        $box_sighting->box_id = $box[0]->name;

        return view('backend.box_sightings.show')->with(
            'box_sighting',
            $box_sighting
        );
    }

    /**
     * Show the form for editing the specified BoxSighting.
     *
     * @param BoxSighting $box_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(BoxSighting $box_sighting)
    {
        $players = Player::all();
        $selectedPlayer = $box_sighting->player_id;

        $boxes = Box::all();
        $selectedBox = $box_sighting->box_id;

        return view(
            'backend.box_sightings.edit',
            compact("players", "selectedPlayer", "boxes", "selectedBox")
        )->with('box_sighting', $box_sighting);
    }

    /**
     * Update the specified BoxSighting in storage.
     *
     * @param UpdateBoxSighting $request
     *
     * @param BoxSighting $box_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(
        UpdateBoxSighting $request,
        BoxSighting $box_sighting
    ) {
        $obj = $this->box_sightingRepository->update(
            $box_sighting,
            $request->all()
        );

        event(new BoxSightingUpdated($obj));
        return redirect()
            ->route('admin.box_sighting.index')
            ->withFlashSuccess(__('alerts.frontend.box_sighting.updated'));
    }

    /**
     * Remove the specified BoxSighting from storage.
     *
     * @param BoxSighting $box_sighting
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(BoxSighting $box_sighting)
    {
        $obj = $this->box_sightingRepository->delete($box_sighting);
        event(new BoxSightingDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.box_sighting.deleted'));
    }
}
