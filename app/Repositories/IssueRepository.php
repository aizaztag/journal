<?php

namespace App\Repositories;

use App\Models\Issue;
use App\Contracts\IssueContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;

class IssueRepository extends BaseRepository implements IssueContract
{
    /**
     * IssueRepository constructor.
     * @param Issue $model
     */
    public function __construct(Issue $model)
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
    public function listIssues(string $order = 'id', string $sort = 'desc', array $columns = ['*'])
    {
        return $this->all($columns, $order, $sort);
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findIssueById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }

    /**
     * @param array $params
     * @return Issue|mixed
     */
    public function createIssue(array $params)
    {
        try {
            $collection = collect($params);

            $is_filterable = $collection->has('is_filterable') ? 1 : 0;
            $is_required = $collection->has('is_required') ? 1 : 0;

            $merge = $collection->merge(compact('is_filterable', 'is_required'));

            $issue = new Issue($merge->all());

            $issue->save();

            return $issue;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function updateIssue(array $params)
    {
        $issue = $this->findIssueById($params['id']);

        $collection = collect($params)->except('_token');

        $is_filterable = $collection->has('is_filterable') ? 1 : 0;
        $is_required = $collection->has('is_required') ? 1 : 0;

        $merge = $collection->merge(compact('is_filterable', 'is_required'));

        $issue->update($merge->all());

        return $issue;
    }

    /**
     * @param $id
     * @return bool|mixed
     */
    public function deleteIssue($id)
    {
        $issue = $this->findIssueById($id);

        $issue->delete();

        return $issue;
    }
}