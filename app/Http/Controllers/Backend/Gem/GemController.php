<?php

namespace App\Http\Controllers\Backend\Gem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Gem\CreateGem;
use App\Http\Requests\Backend\Gem\UpdateGem;
use App\Repositories\Backend\GemRepository;
use App\Events\Backend\Gem\GemCreated;
use App\Events\Backend\Gem\GemUpdated;
use App\Events\Backend\Gem\GemDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Gem;

use App\Models\Level;

class GemController extends Controller
{
    /** @var $gemRepository */
    private $gemRepository;

    public function __construct(GemRepository $gemRepo)
    {
        $this->gemRepository = $gemRepo;
    }

    /**
     * Display a listing of the Gem.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->gemRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->gemRepository
            ->with("boxes", "players", "sightings", "level")
            ->paginate(25);

        return view('backend.gems.index')->with('gems', $data);
    }

    /*
     * many to many
     */

    public function box(Request $request, $foriegn_id)
    {
        $this->gemRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->gemRepository

            ->with("boxes", "players", "sightings", "level")

            ->paginate(25);

        foreach ($data as $key => $items) {
            $temp2 = [];
            $box_gems = BoxGem::where('gem_id', '=', $items->id)->get();
            foreach ($box_gems as $item2) {
                array_push($temp2, $item2->box_id);
            }
            if (!in_array($foriegn_id, $temp2)) {
                unset($data[$key]);
            }
        }

        $part = count($data);

        return view('backend.gems.index')->with([
            'gems' => $data,
            'part' => $part
        ]);
    }

    public function player(Request $request, $foriegn_id)
    {
        $this->gemRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->gemRepository

            ->with("boxes", "players", "sightings", "level")

            ->paginate(25);

        foreach ($data as $key => $items) {
            $temp2 = [];
            $gem_sightings = GemSighting::where(
                'gem_id',
                '=',
                $items->id
            )->get();
            foreach ($gem_sightings as $item2) {
                array_push($temp2, $item2->player_id);
            }
            if (!in_array($foriegn_id, $temp2)) {
                unset($data[$key]);
            }
        }

        $part = count($data);

        return view('backend.gems.index')->with([
            'gems' => $data,
            'part' => $part
        ]);
    }

    /**
     * Show the form for creating a new Gem.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $levels = Level::all();
        $selectedLevel = Level::first() ? Level::first()->_id : 0;

        return view('backend.gems.create', compact("levels", "selectedLevel"));
    }

    /**
     * Store a newly created Gem in storage.
     *
     * @param CreateGem $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateGem $request)
    {
        $obj = $this->gemRepository->create(
            $request->only(["name", "level_id", "clickable_radius"])
        );

        event(new GemCreated($obj));
        return redirect()
            ->route('admin.gem.index')
            ->withFlashSuccess(__('alerts.frontend.gem.saved'));
    }

    /**
     * Display the specified Gem.
     *
     * @param Gem $gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Gem $gem)
    {
        $box_ids = [];
        $box_gems = BoxGem::where('gem_id', '=', $gem->id)->get();
        foreach ($box_gems as $item) {
            array_push($box_ids, $item->box_id);
        }
        $boxes = Box::whereIn('id', $box_ids)->get();
        $player_ids = [];
        $gem_sightings = GemSighting::where('gem_id', '=', $gem->id)->get();
        foreach ($gem_sightings as $item) {
            array_push($player_ids, $item->player_id);
        }
        $players = Player::whereIn('id', $player_ids)->get();
        $gem_sightings = GemSighting::where('gem_id', '=', $gem->id)->get();
        $level = Level::where('id', '=', $gem->level_id)->get();
        $gem->level_id = $level[0]->name;

        return view('backend.gems.show')->with('gem', $gem);
    }

    /**
     * Show the form for editing the specified Gem.
     *
     * @param Gem $gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Gem $gem)
    {
        $levels = Level::all();
        $selectedLevel = $gem->level_id;

        return view(
            'backend.gems.edit',
            compact("levels", "selectedLevel")
        )->with('gem', $gem);
    }

    /**
     * Update the specified Gem in storage.
     *
     * @param UpdateGem $request
     *
     * @param Gem $gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateGem $request, Gem $gem)
    {
        $obj = $this->gemRepository->update($gem, $request->all());

        event(new GemUpdated($obj));
        return redirect()
            ->route('admin.gem.index')
            ->withFlashSuccess(__('alerts.frontend.gem.updated'));
    }

    /**
     * Remove the specified Gem from storage.
     *
     * @param Gem $gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Gem $gem)
    {
        $obj = $this->gemRepository->delete($gem);
        event(new GemDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.gem.deleted'));
    }
}
