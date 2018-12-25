<?php

namespace App\Http\Controllers\Backend\Box;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Box\CreateBox;
use App\Http\Requests\Backend\Box\UpdateBox;
use App\Repositories\Backend\BoxRepository;
use App\Events\Backend\Box\BoxCreated;
use App\Events\Backend\Box\BoxUpdated;
use App\Events\Backend\Box\BoxDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Box;

use App\Models\Level;

class BoxController extends Controller
{
    /** @var $boxRepository */
    private $boxRepository;

    public function __construct(BoxRepository $boxRepo)
    {
        $this->boxRepository = $boxRepo;
    }

    /**
     * Display a listing of the Box.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->boxRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->boxRepository
            ->with("requiredGems", "players", "items", "sightings", "level")
            ->paginate(25);

        return view('backend.boxes.index')->with('boxes', $data);
    }

    /*
     * many to many
     */

    public function gem(Request $request, $foriegn_id)
    {
        $this->boxRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->boxRepository

            ->with("requiredGems", "players", "items", "sightings", "level")

            ->paginate(25);

        foreach ($data as $key => $items) {
            $temp2 = [];
            $box_gems = BoxGem::where('box_id', '=', $items->id)->get();
            foreach ($box_gems as $item2) {
                array_push($temp2, $item2->gem_id);
            }
            if (!in_array($foriegn_id, $temp2)) {
                unset($data[$key]);
            }
        }

        $part = count($data);

        return view('backend.boxes.index')->with([
            'boxes' => $data,
            'part' => $part
        ]);
    }

    public function player(Request $request, $foriegn_id)
    {
        $this->boxRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->boxRepository

            ->with("requiredGems", "players", "items", "sightings", "level")

            ->paginate(25);

        foreach ($data as $key => $items) {
            $temp2 = [];
            $box_sightings = BoxSighting::where(
                'box_id',
                '=',
                $items->id
            )->get();
            foreach ($box_sightings as $item2) {
                array_push($temp2, $item2->player_id);
            }
            if (!in_array($foriegn_id, $temp2)) {
                unset($data[$key]);
            }
        }

        $part = count($data);

        return view('backend.boxes.index')->with([
            'boxes' => $data,
            'part' => $part
        ]);
    }

    public function item(Request $request, $foriegn_id)
    {
        $this->boxRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->boxRepository

            ->with("requiredGems", "players", "items", "sightings", "level")

            ->paginate(25);

        foreach ($data as $key => $items) {
            $temp2 = [];
            $box_items = BoxItem::where('box_id', '=', $items->id)->get();
            foreach ($box_items as $item2) {
                array_push($temp2, $item2->item_id);
            }
            if (!in_array($foriegn_id, $temp2)) {
                unset($data[$key]);
            }
        }

        $part = count($data);

        return view('backend.boxes.index')->with([
            'boxes' => $data,
            'part' => $part
        ]);
    }

    /**
     * Show the form for creating a new Box.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $levels = Level::all();
        $selectedLevel = Level::first() ? Level::first()->_id : 0;

        return view('backend.boxes.create', compact("levels", "selectedLevel"));
    }

    /**
     * Store a newly created Box in storage.
     *
     * @param CreateBox $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateBox $request)
    {
        $obj = $this->boxRepository->create(
            $request->only([
                "name",
                "description",
                "clickable_radius",
                "level_id"
            ])
        );

        event(new BoxCreated($obj));
        return redirect()
            ->route('admin.box.index')
            ->withFlashSuccess(__('alerts.frontend.box.saved'));
    }

    /**
     * Display the specified Box.
     *
     * @param Box $box
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Box $box)
    {
        $gem_ids = [];
        $box_gems = BoxGem::where('box_id', '=', $box->id)->get();
        foreach ($box_gems as $item) {
            array_push($gem_ids, $item->gem_id);
        }
        $gems = Gem::whereIn('id', $gem_ids)->get();
        $player_ids = [];
        $box_sightings = BoxSighting::where('box_id', '=', $box->id)->get();
        foreach ($box_sightings as $item) {
            array_push($player_ids, $item->player_id);
        }
        $players = Player::whereIn('id', $player_ids)->get();
        $item_ids = [];
        $box_items = BoxItem::where('box_id', '=', $box->id)->get();
        foreach ($box_items as $item) {
            array_push($item_ids, $item->item_id);
        }
        $items = Item::whereIn('id', $item_ids)->get();
        $box_sightings = BoxSighting::where('box_id', '=', $box->id)->get();
        $level = Level::where('id', '=', $box->level_id)->get();
        $box->level_id = $level[0]->name;

        return view('backend.boxes.show')->with('box', $box);
    }

    /**
     * Show the form for editing the specified Box.
     *
     * @param Box $box
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Box $box)
    {
        $levels = Level::all();
        $selectedLevel = $box->level_id;

        return view(
            'backend.boxes.edit',
            compact("levels", "selectedLevel")
        )->with('box', $box);
    }

    /**
     * Update the specified Box in storage.
     *
     * @param UpdateBox $request
     *
     * @param Box $box
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateBox $request, Box $box)
    {
        $obj = $this->boxRepository->update($box, $request->all());

        event(new BoxUpdated($obj));
        return redirect()
            ->route('admin.box.index')
            ->withFlashSuccess(__('alerts.frontend.box.updated'));
    }

    /**
     * Remove the specified Box from storage.
     *
     * @param Box $box
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Box $box)
    {
        $obj = $this->boxRepository->delete($box);
        event(new BoxDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.box.deleted'));
    }
}
