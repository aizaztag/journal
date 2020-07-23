<?php

namespace App\Repositories;

use App\Models\Section;
use App\Contracts\SectionContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class SectionRepository extends BaseRepository implements SectionContract
{
    /**
     * SectionRepository constructor.
     * @param Section $model
     */
    public function __construct(Section $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSections(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findSectionById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Section|mixed
     */
    public function createSection(array $params)
    {
        try {
            $collection = collect($params);

            $is_filterable = $collection->has('is_filterable') ? 1 : 0;
            $is_required = $collection->has('is_required') ? 1 : 0;

            $merge = $collection->merge(compact('is_filterable', 'is_required'));

            $section = new Section($merge->all());

            $section->save();

            return $section;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSection(array $params)
    {
        $section = $this->findSectionById($params['id']);

        $collection = collect($params)->except('_token');

        $is_filterable = $collection->has('is_filterable') ? 1 : 0;
        $is_required = $collection->has('is_required') ? 1 : 0;

        $merge = $collection->merge(compact('is_filterable', 'is_required'));

        $section->update($merge->all());

        return $section;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteSection($id)
    {
        $section = $this->findSectionById($id);

        $section->delete();

        return $section;
    }
}