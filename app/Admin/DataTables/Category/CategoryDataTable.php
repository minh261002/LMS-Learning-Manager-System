<?php

namespace App\Admin\DataTables\Category;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Category\CategoryRepositoryInterface;

class CategoryDataTable extends BaseDataTable
{
    protected $nameTable = 'categoryTable';
    protected $repository;

    public function __construct(
        CategoryRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }

    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.category.datatable.action',
            'image' => 'admin.category.datatable.image',
            'status' => 'admin.category.datatable.status',
        ];
    }

    public function query()
    {
        return $this->repository->getFlatTreeBuilder();
    }

    public function setColumnSearch(): void
    {

        $this->columnAllSearch = [1, 2, 3];
        $this->columnSearchSelect = [
            [
                'column' => 3,
                'data' => [
                    '1' => 'Không hoạt động',
                    '2' => 'Đang hoạt động',
                ]
            ]
        ];

    }

    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.categories', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'action' => $this->view['action'],
            'image' => $this->view['image'],
            'status' => $this->view['status'],
            'name' => function ($query) {
                return generate_text_depth_tree($query->depth) . $query->name;
            },
        ];
    }

    protected function setCustomAddColumns(): void
    {
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }

    protected function setCustomRawColumns(): void
    {
        $this->customRawColumns = [
            'action',
            'image',
            'status',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            //
        ];
    }
}
