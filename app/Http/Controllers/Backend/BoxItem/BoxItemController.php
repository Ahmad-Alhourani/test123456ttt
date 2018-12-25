<?php

namespace App\Http\Controllers\Backend\BoxItem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\BoxItem\CreateBoxItem;
use App\Http\Requests\Backend\BoxItem\UpdateBoxItem;
use App\Repositories\Backend\BoxItemRepository;
use App\Events\Backend\BoxItem\BoxItemCreated;
use App\Events\Backend\BoxItem\BoxItemUpdated;
use App\Events\Backend\BoxItem\BoxItemDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\BoxItem;

use App\Models\Item;
use App\Models\Box;

class BoxItemController extends Controller
{
    /** @var $box_itemRepository */
    private $box_itemRepository;

    public function __construct(BoxItemRepository $box_itemRepo)
    {
        $this->box_itemRepository = $box_itemRepo;
    }

    /**
     * Display a listing of the BoxItem.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->box_itemRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->box_itemRepository->with("item", "box")->paginate(25);

        return view('backend.box_items.index')->with('box_items', $data);
    }

    /**
     * Show the form for creating a new BoxItem.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $items = Item::all();
        $selectedItem = Item::first() ? Item::first()->_id : 0;

        $boxes = Box::all();
        $selectedBox = Box::first() ? Box::first()->_id : 0;

        return view(
            'backend.box_items.create',
            compact(
                "items",
                "selectedItem",

                "boxes",
                "selectedBox"
            )
        );
    }

    /**
     * Store a newly created BoxItem in storage.
     *
     * @param CreateBoxItem $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateBoxItem $request)
    {
        $obj = $this->box_itemRepository->create(
            $request->only(["item_id", "box_id"])
        );

        event(new BoxItemCreated($obj));
        return redirect()
            ->route('admin.box_item.index')
            ->withFlashSuccess(__('alerts.frontend.box_item.saved'));
    }

    /**
     * Display the specified BoxItem.
     *
     * @param BoxItem $box_item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(BoxItem $box_item)
    {
        $item = Item::where('id', '=', $box_item->item_id)->get();
        $box_item->item_id = $item[0]->name;
        $box = Box::where('id', '=', $box_item->box_id)->get();
        $box_item->box_id = $box[0]->name;

        return view('backend.box_items.show')->with('box_item', $box_item);
    }

    /**
     * Show the form for editing the specified BoxItem.
     *
     * @param BoxItem $box_item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(BoxItem $box_item)
    {
        $items = Item::all();
        $selectedItem = $box_item->item_id;

        $boxes = Box::all();
        $selectedBox = $box_item->box_id;

        return view(
            'backend.box_items.edit',
            compact("items", "selectedItem", "boxes", "selectedBox")
        )->with('box_item', $box_item);
    }

    /**
     * Update the specified BoxItem in storage.
     *
     * @param UpdateBoxItem $request
     *
     * @param BoxItem $box_item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateBoxItem $request, BoxItem $box_item)
    {
        $obj = $this->box_itemRepository->update($box_item, $request->all());

        event(new BoxItemUpdated($obj));
        return redirect()
            ->route('admin.box_item.index')
            ->withFlashSuccess(__('alerts.frontend.box_item.updated'));
    }

    /**
     * Remove the specified BoxItem from storage.
     *
     * @param BoxItem $box_item
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(BoxItem $box_item)
    {
        $obj = $this->box_itemRepository->delete($box_item);
        event(new BoxItemDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.box_item.deleted'));
    }
}
