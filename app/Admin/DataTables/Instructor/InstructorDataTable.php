<?php

namespace App\Admin\DataTables\Instructor;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Instructor\InstructorRepositoryInterface;

class InstructorDataTable extends BaseDataTable
{
    protected $nameTable = 'instructorTable';
    protected $repository;

    public function __construct(
        InstructorRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.instructor.datatable.action',
            'status' => 'admin.instructor.datatable.status',
            'is_identity' => 'admin.instructor.datatable.is_identity',
            'course' => 'admin.instructor.datatable.course',
            'order' => 'admin.instructor.datatable.order',
            'is_verify' => 'admin.instructor.datatable.verify',
        ];
    }
    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {

        $this->columnAllSearch = [0, 3, 4, 5];
        $this->columnSearchSelect = [
            [
                'column' => 4,
                'data' => [
                    '1' => 'Chưa duyệt',
                    '2' => 'Đã duyệt',
                ]
            ],
            [
                'column' => 3,
                'data' => [
                    '1' => 'Chưa định danh',
                    '2' => 'Đã định danh',
                ]
                ],
                [
                    'column' => 5,
                    'data' => [
                        '1' => 'Đang hoạt động',
                        '2' => 'Tạm khoá',
                    ]
                ]

        ];

    }
    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.instructor', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'action' => $this->view['action'],
            'status' => $this->view['status'],
            'user_id' => function ($instructor) {
                return $instructor->user->name;
            },
            'is_identity' => $this->view['is_identity'],
            'course' => $this->view['course'],
            'order' => $this->view['order'],
            'is_verify' => $this->view['is_verify'],
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
            'status',
            'is_identity',
            'course',
            'order',
            'is_verify',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            'user_id' => function ($query, $value) {
                $query->whereHas('user', function ($query) use ($value) {
                    $query->where('name', 'like', '%' . $value . '%');
                });
            },
        ];
    }
}