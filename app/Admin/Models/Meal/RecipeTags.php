<?php

namespace App\Admin\Models\Meal;

use Illuminate\Database\Eloquent\Model;

class RecipeTags extends Model
{
    protected $table = 'meal_recipe_tags';

    protected $hidden = ['created_at', 'updated_at'];

    public function recipes()
    {
        return $this->hasMany(Recies::class, 'tag_id', 'id');
    }
}



