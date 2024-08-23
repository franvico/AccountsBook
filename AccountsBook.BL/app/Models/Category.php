<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'abook_id',
        'name',
        'description'
    ];

    // varias Operations pueden pertenecer a la misma Category
    public function operarions()
    {
        return $this->hasMany(Operarions::class);
    }
}
