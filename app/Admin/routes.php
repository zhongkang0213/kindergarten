<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

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
        $router->resource('school', 'SchoolController');
        $router->resource('grades', 'GradesController');
        $router->resource('classes', 'ClassesController');
        $router->resource('students', 'StudentsController');
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
    });
});
