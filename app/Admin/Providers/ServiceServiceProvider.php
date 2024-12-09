<?php

namespace App\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    protected $services = [
        'App\Admin\Services\Module\ModuleServiceInterface' => 'App\Admin\Services\Module\ModuleService',
        'App\Admin\Services\Permission\PermissionServiceInterface' => 'App\Admin\Services\Permission\PermissionService',
        'App\Admin\Services\Role\RoleServiceInterface' => 'App\Admin\Services\Role\RoleService',
        'App\Admin\Services\Admin\AdminServiceInterface' => 'App\Admin\Services\Admin\AdminService',
        'App\Admin\Services\Customer\CustomerServiceInterface' => 'App\Admin\Services\Customer\CustomerService',
        'App\Admin\Services\Post\PostCatalogueServiceInterface' => 'App\Admin\Services\Post\PostCatalogueService',
        'App\Admin\Services\Post\PostServiceInterface' => 'App\Admin\Services\Post\PostService',
        'App\Admin\Services\Category\CategoryServiceInterface' => 'App\Admin\Services\Category\CategoryService',
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->services as $interface => $service) {
            $this->app->bind($interface, $service);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
