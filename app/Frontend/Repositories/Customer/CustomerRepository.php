<?php

namespace App\Frontend\Repositories\Customer;

use App\Models\User;
use App\Frontend\Repositories\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }
}