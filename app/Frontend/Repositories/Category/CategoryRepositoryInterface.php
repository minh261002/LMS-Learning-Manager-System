<?php

namespace App\Frontend\Repositories\Category;

use App\Frontend\Repositories\BaseRepositoryInterface;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function getFlatTreeNotInNode(array $nodeId);

    public function getFlatTree();

    public function getFlatTreeBuilder();

    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');

    public function search($search);
}