<?php

namespace App\Http\Controllers\Backend\Level;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Level\CreateLevel;
use App\Http\Requests\Backend\Level\UpdateLevel;
use App\Repositories\Backend\LevelRepository;
use App\Events\Backend\Level\LevelCreated;
use App\Events\Backend\Level\LevelUpdated;
use App\Events\Backend\Level\LevelDeleted;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Level;

class LevelController extends Controller
{
    /** @var $levelRepository */
    private $levelRepository;

    public function __construct(LevelRepository $levelRepo)
    {
        $this->levelRepository = $levelRepo;
    }

    /**
     * Display a listing of the Level.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */

    public function index(Request $request)
    {
        $this->levelRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->levelRepository->with("requiredGems")->paginate(25);

        return view('backend.levels.index')->with('levels', $data);
    }

    /*
     * many to many
     */

    public function gem(Request $request, $foriegn_id)
    {
        $this->levelRepository->pushCriteria(new RequestCriteria($request));
        $data = $this->levelRepository

            ->with("requiredGems")

            ->paginate(25);

        foreach ($data as $key => $items) {
            $temp2 = [];
            $level_gems = LevelGem::where('level_id', '=', $items->id)->get();
            foreach ($level_gems as $item2) {
                array_push($temp2, $item2->gem_id);
            }
            if (!in_array($foriegn_id, $temp2)) {
                unset($data[$key]);
            }
        }

        $part = count($data);

        return view('backend.levels.index')->with([
            'levels' => $data,
            'part' => $part
        ]);
    }

    /**
     * Show the form for creating a new Level.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.levels.create');
    }

    /**
     * Store a newly created Level in storage.
     *
     * @param CreateLevel $request
     *
     * @return Response | \Illuminate\View\View|Response
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(CreateLevel $request)
    {
        $obj = $this->levelRepository->create(
            $request->only(["name", "description", "visible_radius", "order"])
        );

        event(new LevelCreated($obj));
        return redirect()
            ->route('admin.level.index')
            ->withFlashSuccess(__('alerts.frontend.level.saved'));
    }

    /**
     * Display the specified Level.
     *
     * @param Level $level
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Level $level)
    {
        $gem_ids = [];
        $level_gems = LevelGem::where('level_id', '=', $level->id)->get();
        foreach ($level_gems as $item) {
            array_push($gem_ids, $item->gem_id);
        }
        $gems = Gem::whereIn('id', $gem_ids)->get();

        return view('backend.levels.show')->with('level', $level);
    }

    /**
     * Show the form for editing the specified Level.
     *
     * @param Level $level
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Level $level)
    {
        return view('backend.levels.edit')->with('level', $level);
    }

    /**
     * Update the specified Level in storage.
     *
     * @param UpdateLevel $request
     *
     * @param Level $level
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(UpdateLevel $request, Level $level)
    {
        $obj = $this->levelRepository->update($level, $request->all());

        event(new LevelUpdated($obj));
        return redirect()
            ->route('admin.level.index')
            ->withFlashSuccess(__('alerts.frontend.level.updated'));
    }

    /**
     * Remove the specified Level from storage.
     *
     * @param Level $level
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Level $level)
    {
        $obj = $this->levelRepository->delete($level);
        event(new LevelDeleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.level.deleted'));
    }
}
