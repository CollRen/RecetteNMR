<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class recette extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'temps_preparation', 'temps_cuisson', 'category_id', 'user_id',];

    public function ingredients(): HasMany
    {
        return $this->hasMany(Ingredient::class);
    }

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function etapes(): HasMany
    {
        return $this->hasMany(Etape::class);
    }

}
