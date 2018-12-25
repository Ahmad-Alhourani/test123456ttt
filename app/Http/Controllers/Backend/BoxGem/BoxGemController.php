<?php

namespace App\Http\Controllers\Backend\BoxGem;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\BoxGem\CreateBoxGem;
use App\Http\Requests\Backend\BoxGem\UpdateBoxGem;
use App\Repositories\Backend\BoxGemRepository;
use App\Events\Backend\BoxGem\BoxGemCreated;
use App\Events\Backend\BoxGem\BoxGemUpdated;
use App\Events\Backend\BoxGem\BoxGemDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\BoxGem;

use App\Models\Gem;
use App\Models\Box;

class BoxGemController extends Controller
{
    /** @var $box_gemRepository */
    private $box_gemRepository;

    public function __construct(BoxGemRepository $box_gemRepo)
    {
        $this->box_gemRepository = $box_gemRepo;
    }

    /**
     * Display a listing of the BoxGem.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->box_gemRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->box_gemRepository->with("gem", "box")->paginate(25);

        return view('backend.box_gems.index')->with('box_gems', $data);
    }

    /**
     * Show the form for creating a new BoxGem.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        $gems = Gem::all();
        $selectedGem = Gem::first() ? Gem::first()->_id : 0;

        $boxes = Box::all();
        $selectedBox = Box::first() ? Box::first()->_id : 0;

        return view(
            'backend.box_gems.create',
            compact(
                "gems",
                "selectedGem",

                "boxes",
                "selectedBox"
            )
        );
    }

    /**
     * Store a newly created BoxGem in storage.
     *
     * @param CreateBoxGem $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateBoxGem $request)
    {
        $obj = $this->box_gemRepository->create(
            $request->only(["gem_id", "box_id", "count"])
        );

        event(new BoxGemCreated($obj));
        return redirect()
            ->route('admin.box_gem.index')
            ->withFlashSuccess(__('alerts.frontend.box_gem.saved'));
    }

    /**
     * Display the specified BoxGem.
     *
     * @param BoxGem $box_gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(BoxGem $box_gem)
    {
        $gem = Gem::where('id', '=', $box_gem->gem_id)->get();
        $box_gem->gem_id = $gem[0]->name;
        $box = Box::where('id', '=', $box_gem->box_id)->get();
        $box_gem->box_id = $box[0]->name;

        return view('backend.box_gems.show')->with('box_gem', $box_gem);
    }

    /**
     * Show the form for editing the specified BoxGem.
     *
     * @param BoxGem $box_gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(BoxGem $box_gem)
    {
        $gems = Gem::all();
        $selectedGem = $box_gem->gem_id;

        $boxes = Box::all();
        $selectedBox = $box_gem->box_id;

        return view(
            'backend.box_gems.edit',
            compact("gems", "selectedGem", "boxes", "selectedBox")
        )->with('box_gem', $box_gem);
    }

    /**
     * Update the specified BoxGem in storage.
     *
     * @param UpdateBoxGem $request
     *
     * @param BoxGem $box_gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateBoxGem $request, BoxGem $box_gem)
    {
        $obj = $this->box_gemRepository->update($box_gem, $request->all());

        event(new BoxGemUpdated($obj));
        return redirect()
            ->route('admin.box_gem.index')
            ->withFlashSuccess(__('alerts.frontend.box_gem.updated'));
    }

    /**
     * Remove the specified BoxGem from storage.
     *
     * @param BoxGem $box_gem
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(BoxGem $box_gem)
    {
        $obj = $this->box_gemRepository->delete($box_gem);
        event(new BoxGemDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.box_gem.deleted'));
    }
}
