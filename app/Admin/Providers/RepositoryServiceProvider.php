<?php

namespace App\Admin\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        'App\Admin\Repositories\Module\ModuleRepositoryInterface' => 'App\Admin\Repositories\Module\ModuleRepository',
        'App\Admin\Repositories\Permission\PermissionRepositoryInterface' => 'App\Admin\Repositories\Permission\PermissionRepository',
        'App\Admin\Repositories\Role\RoleRepositoryInterface' => 'App\Admin\Repositories\Role\RoleRepository',
        'App\Admin\Repositories\Admin\AdminRepositoryInterface' => 'App\Admin\Repositories\Admin\AdminRepository',
        'App\Admin\Repositories\Customer\CustomerRepositoryInterface' => 'App\Admin\Repositories\Customer\CustomerRepository',
        'App\Admin\Repositories\Post\PostCatalogueRepositoryInterface' => 'App\Admin\Repositories\Post\PostCatalogueRepository',
        'App\Admin\Repositories\Post\PostRepositoryInterface' => 'App\Admin\Repositories\Post\PostRepository',
        'App\Admin\Repositories\Category\CategoryRepositoryInterface' => 'App\Admin\Repositories\Category\CategoryRepository',
        'App\Admin\Repositories\Instructor\InstructorRepositoryInterface' => 'App\Admin\Repositories\Instructor\InstructorRepository',
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind($interface, $repository);
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
