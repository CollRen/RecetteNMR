<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Http\Resources\IngredientResource;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    protected function nom(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value)
        );
    }

    static public function ingredients(){
        $resource = IngredientResource::collection(self::select()->orderBy('nom')->get());
        $data = json_encode($resource);
        return json_decode($data, true);
    }
}
