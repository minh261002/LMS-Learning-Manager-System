<?php

namespace App\Admin\Repositories\Customer;

use App\Models\User;
use App\Admin\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }
}