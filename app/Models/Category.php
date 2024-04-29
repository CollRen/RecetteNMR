<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Http\Resources\CategoryResource;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    public function recettes(){
        return $this->hasMany(Recette::class);
    }

    /**
     * Doit être nommé de la même façon que la colonne de la DB à laquelle la fonction se rapporte
     * 
     */
    protected function nom(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }

    static public function categories(){
        $resource = CategoryResource::collection(self::select()->orderBy('nom')->get());
        $data = json_encode($resource);
        return json_decode($data, true);
    }
}
