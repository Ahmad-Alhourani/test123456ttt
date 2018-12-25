<?php

namespace App\Http\Controllers\Backend\Player;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Player\CreatePlayer;
use App\Http\Requests\Backend\Player\UpdatePlayer;
use App\Repositories\Backend\PlayerRepository;
use App\Events\Backend\Player\PlayerCreated;
use App\Events\Backend\Player\PlayerUpdated;
use App\Events\Backend\Player\PlayerDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Player;

use App\Models\Level;

class PlayerController extends Controller
{
    /** @var $playerRepository */
    private $playerRepository;

    public function __construct(PlayerRepository $playerRepo)
    {
        $this->playerRepository = $playerRepo;
    }

    /**
     * Display a listing of the Player.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->playerRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->playerRepository
            ->with("inventory", "level")
            ->paginate(25);

        return view('backend.players.index')->with('players', $data);
    }

    /**
     * Show the form for creating a new Player.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $levels = Level::all();
        $selectedLevel = Level::first() ? Level::first()->_id : 0;

        return view(
            'backend.players.create',
            compact("levels", "selectedLevel")
        );
    }

    /**
     * Store a newly created Player in storage.
     *
     * @param CreatePlayer $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreatePlayer $request)
    {
        $obj = $this->playerRepository->create(
            $request->only(["name", "token", "birth_date", "level_id"])
        );

        event(new PlayerCreated($obj));
        return redirect()
            ->route('admin.player.index')
            ->withFlashSuccess(__('alerts.frontend.player.saved'));
    }

    /**
     * Display the specified Player.
     *
     * @param Player $player
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Player $player)
    {
        $inventory = Inventory::where('player_id', '=', $player->id)->get();
        $level = Level::where('id', '=', $player->level_id)->get();
        $player->level_id = $level[0]->name;

        return view('backend.players.show')->with('player', $player);
    }

    /**
     * Show the form for editing the specified Player.
     *
     * @param Player $player
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Player $player)
    {
        $levels = Level::all();
        $selectedLevel = $player->level_id;

        return view(
            'backend.players.edit',
            compact("levels", "selectedLevel")
        )->with('player', $player);
    }

    /**
     * Update the specified Player in storage.
     *
     * @param UpdatePlayer $request
     *
     * @param Player $player
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdatePlayer $request, Player $player)
    {
        $obj = $this->playerRepository->update($player, $request->all());

        event(new PlayerUpdated($obj));
        return redirect()
            ->route('admin.player.index')
            ->withFlashSuccess(__('alerts.frontend.player.updated'));
    }

    /**
     * Remove the specified Player from storage.
     *
     * @param Player $player
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Player $player)
    {
        $obj = $this->playerRepository->delete($player);
        event(new PlayerDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.player.deleted'));
    }
}
