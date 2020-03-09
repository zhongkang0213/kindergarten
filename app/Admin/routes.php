<?php

use Illuminate\Routing\Router;

// 把laravel-admin 框架中注册控制器部分提取来单独控制
Route::group([
    'prefix'     => config('admin.route.prefix'),
    'middleware' => config('admin.route.middleware'),
], function ($router) {

    /* @var \Illuminate\Support\Facades\Route $router */
    $router->namespace('\Encore\Admin\Controllers')->group(function ($router) {

        /* @var \Illuminate\Routing\Router $router */
        $router->resource('auth/roles', 'RoleController')->names('admin.auth.roles');
        $router->resource('auth/permissions', 'PermissionController')->names('admin.auth.permissions');
        $router->resource('auth/menu', 'MenuController', ['except' => ['create']])->names('admin.auth.menu');
        $router->resource('auth/logs', 'LogController', ['only' => ['index', 'destroy']])->names('admin.auth.logs');

        $router->post('_handle_form_', 'HandleController@handleForm')->name('admin.handle-form');
        $router->post('_handle_action_', 'HandleController@handleAction')->name('admin.handle-action');
    });

    $authController = config('admin.auth.controller', AuthController::class);

    /* @var \Illuminate\Routing\Router $router */
    $router->get('auth/login', $authController.'@getLogin')->name('admin.login');
    $router->post('auth/login', $authController.'@postLogin');
    $router->get('auth/logout', $authController.'@getLogout')->name('admin.logout');
    $router->get('auth/setting', $authController.'@getSetting')->name('admin.setting');
    $router->put('auth/setting', $authController.'@putSetting');
});

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    // 更新用户管里控制器
    $router->resource('auth/users', 'UserController')->names('admin.auth.users');

    // 膳食
    $router->group(['prefix' => 'meal', 'namespace' => 'Meal'], function (Router $router) {
        $router->resource('food_tags', 'FoodTagsController');
        $router->resource('food', 'FoodController');

        $router->resource('recipe_tags', 'RecipeTagsController');
        $router->resource('recipes', 'RecipesController');
        $router->resource('week_recipes', 'WeekRecipesController');
    });


    // 信息
    $router->group(['prefix' => 'info', 'namespace' => 'Info'], function (Router $router) {
        $router->resource('schools', 'SchoolsController')->names('admin.info.schools');
        $router->resource('grades', 'GradesController')->names('admin.info.grades');
        $router->resource('classes', 'ClassesController');
        $router->resource('students', 'StudentsController');
        $router->resource('teachers', 'TeachersController')->names('admin.info.teachers');
    });

    // 贮藏
    $router->group(['prefix' => 'storage', 'namespace' => 'Storage'], function (Router $router) {
        $router->resource('supplies', 'SuppliesController');
        $router->resource('stocks', 'StocksController');
    });

    // API
/*
    $router->group(['prefix' => 'api', 'namespace' => 'API'], function (Router $router) {
        $router->get('classes/search', 'ClassesController@search');
        $router->get('food_sub_tags/search', 'FoodSubTagsController@search');

        $router->get('food/categories', 'FoodController@categories');
        $router->get('recipes/categories', 'RecipesController@categories');
        $router->get('week_recipes/categories', 'WeekRecipesController@categories');
        $router->get('week_recipes', 'WeekRecipesController@store');
    });
*/
    $router->resource('/react', 'ReactController');
});

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    //'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    // API
    $router->group(['prefix' => 'api', 'namespace' => 'API'], function (Router $router) {
        $router->get('classes/search', 'ClassesController@search');
        $router->get('food_sub_tags/search', 'FoodSubTagsController@search');

        $router->get('food/categories', 'FoodController@categories');
        $router->get('recipes/categories', 'RecipesController@categories');
        $router->get('recipes/edit', 'RecipesController@edit');
        $router->post('recipes/store', 'RecipesController@store');
        $router->get('week_recipes/categories', 'WeekRecipesController@categories');
        $router->post('week_recipes/store', 'WeekRecipesController@store');
        $router->get('week_recipes/edit', 'WeekRecipesController@edit');
        $router->post('week_recipes/update', 'WeekRecipesController@update');
        $router->post('week_recipes/delete', 'WeekRecipesController@delete');

        $router->get('school/nature', 'SchoolController@nature');
    });
});
