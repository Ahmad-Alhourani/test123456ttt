<?php

namespace App\Http\Controllers\Backend\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Inventory\CreateInventory;
use App\Http\Requests\Backend\Inventory\UpdateInventory;
use App\Repositories\Backend\InventoryRepository;
use App\Events\Backend\Inventory\InventoryCreated;
use App\Events\Backend\Inventory\InventoryUpdated;
use App\Events\Backend\Inventory\InventoryDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Inventory;

use App\Models\Player;

class InventoryController extends Controller
{
    /** @var $inventoryRepository */
    private $inventoryRepository;

    public function __construct(InventoryRepository $inventoryRepo)
    {
        $this->inventoryRepository = $inventoryRepo;
    }

    /**
     * Display a listing of the Inventory.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->inventoryRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->inventoryRepository->with("player")->paginate(25);

        return view('backend.inventory.index')->with('inventory', $data);
    }

    /**
     * Show the form for creating a new Inventory.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $players = Player::all();
        $selectedPlayer = Player::first() ? Player::first()->_id : 0;

        return view(
            'backend.inventory.create',
            compact("players", "selectedPlayer")
        );
    }

    /**
     * Store a newly created Inventory in storage.
     *
     * @param CreateInventory $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateInventory $request)
    {
        $obj = $this->inventoryRepository->create(
            $request->only([
                "player_id",
                "inventoryable_id",
                "inventoryable_type",
                "count"
            ])
        );

        event(new InventoryCreated($obj));
        return redirect()
            ->route('admin.inventory.index')
            ->withFlashSuccess(__('alerts.frontend.inventory.saved'));
    }

    /**
     * Display the specified Inventory.
     *
     * @param Inventory $inventory
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Inventory $inventory)
    {
        $player = Player::where('id', '=', $inventory->player_id)->get();
        $inventory->player_id = $player[0]->name;

        return view('backend.inventory.show')->with('inventory', $inventory);
    }

    /**
     * Show the form for editing the specified Inventory.
     *
     * @param Inventory $inventory
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Inventory $inventory)
    {
        $players = Player::all();
        $selectedPlayer = $inventory->player_id;

        return view(
            'backend.inventory.edit',
            compact("players", "selectedPlayer")
        )->with('inventory', $inventory);
    }

    /**
     * Update the specified Inventory in storage.
     *
     * @param UpdateInventory $request
     *
     * @param Inventory $inventory
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateInventory $request, Inventory $inventory)
    {
        $obj = $this->inventoryRepository->update($inventory, $request->all());

        event(new InventoryUpdated($obj));
        return redirect()
            ->route('admin.inventory.index')
            ->withFlashSuccess(__('alerts.frontend.inventory.updated'));
    }

    /**
     * Remove the specified Inventory from storage.
     *
     * @param Inventory $inventory
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Inventory $inventory)
    {
        $obj = $this->inventoryRepository->delete($inventory);
        event(new InventoryDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.inventory.deleted'));
    }
}
