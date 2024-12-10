<?php

namespace App\Frontend\Repositories\Admin;

use App\Frontend\Repositories\BaseRepository;
use App\Models\Admin;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface
{
    public function getModel()
    {
        return Admin::class;
    }
}