<?php

namespace App\Frontend\Repositories\Category;

use App\Models\Category;
use App\Frontend\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    protected $select = [];

    public function getModel()
    {
        return Category::class;
    }
    public function getFlatTreeNotInNode(array $nodeId)
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->whereNotIn('id', $nodeId)
            ->defaultOrder()
            ->withDepth()
            ->get()
            ->toFlatTree();
        return $this->instance;
    }
    public function getFlatTree()
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->withDepth()
            ->get()
            ->toFlatTree();
        return $this->instance;
    }

    public function getFlatTreeBuilder()
    {
        $this->getQueryBuilderOrderBy('position', 'ASC');
        $this->instance = $this->instance->withDepth();
        return $this->instance;
    }

    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC')
    {
        $this->getQueryBuilder();
        $this->instance = $this->instance->orderBy($column, $sort);
        return $this->instance;
    }

    public function search($search)
    {
        $this->getQueryBuilder();
        $this->instance = $this->instance->where('name', 'like', '%' . $search . '%');
        return $this->instance;
    }
}