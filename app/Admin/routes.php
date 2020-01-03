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
    });


    // 信息
    $router->group(['prefix' => 'info', 'namespace' => 'Info'], function (Router $router) {
        $router->resource('grades', 'GradesController');
        $router->resource('classes', 'ClassesController');
        $router->resource('students', 'StudentsController');
    });

    // API
    $router->group(['prefix' => 'api', 'namespace' => 'API'], function (Router $router) {
        $router->get('classes/search', 'ClassesController@search');
    });

});
