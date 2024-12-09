<?php

namespace App\Admin\Repositories\Post;

use App\Admin\Repositories\BaseRepositoryInterface;

interface PostCatalogueRepositoryInterface extends BaseRepositoryInterface
{
    public function getFlatTreeNotInNode(array $nodeId);

    public function getFlatTree();

    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');

    public function getFlatTreeBuilder();
}