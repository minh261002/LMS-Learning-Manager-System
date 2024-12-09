<?php

namespace App\Admin\Repositories\Role;

use App\Admin\Repositories\BaseRepositoryInterface;

interface RoleRepositoryInterface extends BaseRepositoryInterface
{
    public function getQueryBuilderOrderBy($column = 'id', $sort = 'DESC');
    public function getAllPermissions();
    public function getAllPermissionsNoModule();
    public function getAllModules();
    public function getAllPermissionsInAllModules();
}
