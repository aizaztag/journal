<?php

namespace App\Contracts;

interface SectionContract
{
    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listSections(string $order = 'id', string $sort = 'desc', array $columns = ['*']);

    /**
     * @param int $id
     * @return mixed
     */
    public function findSectionById(int $id);

    /**
     * @param array $params
     * @return mixed
     */
    public function createSection(array $params);

    /**
     * @param array $params
     * @return mixed
     */
    public function updateSection(array $params);

    /**
     * @param $id
     * @return bool
     */
    public function deleteSection($id);
}