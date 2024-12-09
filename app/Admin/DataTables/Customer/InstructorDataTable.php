<?php

namespace App\Admin\DataTables\Customer;

use App\Admin\DataTables\BaseDataTable;
use App\Admin\Repositories\Customer\CustomerRepositoryInterface;

class InstructorDataTable extends BaseDataTable
{
    protected $nameTable = 'instructorTable';
    protected $repository;

    public function __construct(
        CustomerRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'admin.customer.instructor.datatable.action',
            'status' => 'admin.customer.instructor.datatable.status',
            'list_order' => 'admin.customer.instructor.datatable.list_order',
            'list_wishlist' => 'admin.customer.instructor.datatable.list_wishlist',
            'type' => 'admin.customer.instructor.datatable.type',
        ];
    }
    public function query()
    {
        return $this->repository->getByQueryBuilder([
            'role' => 'instructor',
        ]);
    }

    public function setColumnSearch(): void
    {

        $this->columnAllSearch = [0, 1, 2];
        $this->columnSearchSelect = [
            [
                'column' => 2,
                'data' => [
                    '1' => 'Tạm khoá',
                    '2' => 'Đang hoạt động',
                ]
            ],
        ];

    }
    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.customers', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'action' => $this->view['action'],
            'status' => $this->view['status'],
            'list_order' => $this->view['list_order'],
            'list_wishlist' => $this->view['list_wishlist'],
            'type' => $this->view['type'],
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
            'list_order',
            'list_wishlist',
            'type',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            //
        ];
    }
}
