<?php

namespace App\Admin\Repositories\Module;

use App\Models\Module;
use App\Admin\Repositories\BaseRepository;

class ModuleRepository extends BaseRepository implements ModuleRepositoryInterface
{
    public function getModel()
    {
        return Module::class;
    }
}