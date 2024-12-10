<?php

namespace App\Frontend\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    protected $services = [
        'App\Frontend\Services\Module\ModuleServiceInterface' => 'App\Frontend\Services\Module\ModuleService',
        'App\Frontend\Services\Permission\PermissionServiceInterface' => 'App\Frontend\Services\Permission\PermissionService',
        'App\Frontend\Services\Role\RoleServiceInterface' => 'App\Frontend\Services\Role\RoleService',
        'App\Frontend\Services\Admin\AdminServiceInterface' => 'App\Frontend\Services\Admin\AdminService',
        'App\Frontend\Services\Customer\CustomerServiceInterface' => 'App\Frontend\Services\Customer\CustomerService',
        'App\Frontend\Services\Post\PostCatalogueServiceInterface' => 'App\Frontend\Services\Post\PostCatalogueService',
        'App\Frontend\Services\Post\PostServiceInterface' => 'App\Frontend\Services\Post\PostService',
        'App\Frontend\Services\Category\CategoryServiceInterface' => 'App\Frontend\Services\Category\CategoryService',
        'App\Frontend\Services\Instructor\InstructorServiceInterface' => 'App\Frontend\Services\Instructor\InstructorService',
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