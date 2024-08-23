<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'category_id',
        'amount',
        'description',
        'date'
    ];

    // una Operation sólo pertenece a una Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // una Operation sólo pertenece a una Account
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
