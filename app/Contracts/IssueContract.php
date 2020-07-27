<?php

namespace App\Contracts;

interface IssueContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listIssues(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findIssueById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createIssue(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateIssue(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteIssue($id);
}