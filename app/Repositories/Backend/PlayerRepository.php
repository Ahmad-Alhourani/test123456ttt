<?php
namespace App\Repositories\Backend;

use App\Models\Player;
use App\Repositories\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class PlayerRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;

    protected $defaultOrderBy = 'id';
    protected $defaultSortBy = 'asc';

    protected $fieldSearchable = ["name", "level_id"];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Player::class;
    }

    public function getPaginated($paged = 25, $condions_array = null)
    {
        if ($condions_array) {
            return $this->model->where($condions_array)->paginate($paged);
        }
        return $this->model->paginate($paged);
    }
}
