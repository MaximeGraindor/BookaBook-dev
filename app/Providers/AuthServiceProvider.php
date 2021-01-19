<?php

namespace App\Providers;

use App\Models\Book;
use App\Models\Order;
use App\Policies\BookPolicy;
use App\Policies\OrderPolicy;
use Database\Seeders\BookSeeder;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Book::class => BookPolicy::class,
        Order::class => OrderPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-book', function($user){
            return $user->isAdmin;
        });

        Gate::define('manage-student', function($user){
            return $user->isAdmin;
        });

        Gate::define('manage-order', function($user){
            return $user->isStudent;
        });

        /*Gate::define('', function($user){
            return $user->isAdmin;
        });*/
    }
}
