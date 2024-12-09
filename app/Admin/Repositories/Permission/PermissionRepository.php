<?php

namespace App\Admin\Repositories\Permission;

use App\Models\Permission;
use App\Admin\Repositories\BaseRepository;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    public function getModel()
    {
        return Permission::class;
    }
}
