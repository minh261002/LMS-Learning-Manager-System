<?php

namespace App\Frontend\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        'App\Frontend\Repositories\Module\ModuleRepositoryInterface' => 'App\Frontend\Repositories\Module\ModuleRepository',
        'App\Frontend\Repositories\Permission\PermissionRepositoryInterface' => 'App\Frontend\Repositories\Permission\PermissionRepository',
        'App\Frontend\Repositories\Role\RoleRepositoryInterface' => 'App\Frontend\Repositories\Role\RoleRepository',
        'App\Frontend\Repositories\Admin\AdminRepositoryInterface' => 'App\Frontend\Repositories\Admin\AdminRepository',
        'App\Frontend\Repositories\Customer\CustomerRepositoryInterface' => 'App\Frontend\Repositories\Customer\CustomerRepository',
        'App\Frontend\Repositories\Post\PostCatalogueRepositoryInterface' => 'App\Frontend\Repositories\Post\PostCatalogueRepository',
        'App\Frontend\Repositories\Post\PostRepositoryInterface' => 'App\Frontend\Repositories\Post\PostRepository',
        'App\Frontend\Repositories\Category\CategoryRepositoryInterface' => 'App\Frontend\Repositories\Category\CategoryRepository',
        'App\Frontend\Repositories\Instructor\InstructorRepositoryInterface' => 'App\Frontend\Repositories\Instructor\InstructorRepository',
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