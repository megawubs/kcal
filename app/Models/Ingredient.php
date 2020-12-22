<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name Ingredient base name.
 * @property ?string detail Some additional detail about the ingredient (e.g. "small" with the name "onion").
 * @property float calories (per 100g).
 * @property float protein (per 100g).
 * @property float fat (per 100g).
 * @property float carbohydrates (per 100g).
 * @property ?float unit_weight Weight of one cup of the ingredient.
 * @property ?float cup_weight Weight of one "unit" (e.g. an egg, onion, etc.) of the ingredient.
 */
class Ingredient extends Model
{
    use HasFactory;

    /**
     * @inheritdoc
     */
    protected array $fillable = [
        'name',
        'detail',
        'calories',
        'protein',
        'fat',
        'carbohydrates',
        'unitWeight',
        'cupWeight',
    ];

    /**
     * The attributes that should be cast.
     */
    protected array $casts = [
        'calories' => 'float',
        'protein' => 'float',
        'fat' => 'float',
        'carbohydrates' => 'float',
        'unit_weight' => 'float',
        'cup_weight' => 'float',
    ];
}
