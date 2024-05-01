<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Recette extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'temps_preparation', 'temps_cuisson', 'category_id', 'user_id',];

    public function ingredients(): BelongsToMany
    {
        return $this->belongsToMany(Ingredient::class);
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
