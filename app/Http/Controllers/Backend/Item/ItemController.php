<?php

namespace App\Http\Controllers\Backend\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Item\CreateItem;
use App\Http\Requests\Backend\Item\UpdateItem;
use App\Repositories\Backend\ItemRepository;
use App\Events\Backend\Item\ItemCreated;
use App\Events\Backend\Item\ItemUpdated;
use App\Events\Backend\Item\ItemDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Item;

class ItemController extends Controller
{
    /** @var $itemRepository */
    private $itemRepository;

    public function __construct(ItemRepository $itemRepo)
    {
        $this->itemRepository = $itemRepo;
    }

    /**
     * Display a listing of the Item.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->itemRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->itemRepository->with("boxes")->paginate(25);

        return view('backend.items.index')->with('items', $data);
    }

    /*
     * many to many
     */

    public function box(Request $request, $foriegn_id)
    {
        $this->itemRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->itemRepository

            ->with("boxes")

            ->paginate(25);

        foreach ($data as $key => $items) {
            $temp2 = [];
            $box_items = BoxItem::where('item_id', '=', $items->id)->get();
            foreach ($box_items as $item2) {
                array_push($temp2, $item2->box_id);
            }
            if (!in_array($foriegn_id, $temp2)) {
                unset($data[$key]);
            }
        }

        $part = count($data);

        return view('backend.items.index')->with([
            'items' => $data,
            'part' => $part
        ]);
    }

    /**
     * Show the form for creating a new Item.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.items.create');
    }

    /**
     * Store a newly created Item in storage.
     *
     * @param CreateItem $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateItem $request)
    {
        $obj = $this->itemRepository->create(
            $request->only(["name", "description", "clickable_radius"])
        );

        event(new ItemCreated($obj));
        return redirect()
            ->route('admin.item.index')
            ->withFlashSuccess(__('alerts.frontend.item.saved'));
    }

    /**
     * Display the specified Item.
     *
     * @param Item $item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Item $item)
    {
        $box_ids = [];
        $box_items = BoxItem::where('item_id', '=', $item->id)->get();
        foreach ($box_items as $item) {
            array_push($box_ids, $item->box_id);
        }
        $boxes = Box::whereIn('id', $box_ids)->get();

        return view('backend.items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified Item.
     *
     * @param Item $item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Item $item)
    {
        return view('backend.items.edit')->with('item', $item);
    }

    /**
     * Update the specified Item in storage.
     *
     * @param UpdateItem $request
     *
     * @param Item $item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateItem $request, Item $item)
    {
        $obj = $this->itemRepository->update($item, $request->all());

        event(new ItemUpdated($obj));
        return redirect()
            ->route('admin.item.index')
            ->withFlashSuccess(__('alerts.frontend.item.updated'));
    }

    /**
     * Remove the specified Item from storage.
     *
     * @param Item $item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Item $item)
    {
        $obj = $this->itemRepository->delete($item);
        event(new ItemDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.item.deleted'));
    }
}
