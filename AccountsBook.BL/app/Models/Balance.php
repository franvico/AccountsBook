<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    protected $fillable = [
        'abook_id',
        'initial_amount',
        'expenses',
        'income'
    ];

    // un Balance pertenece a un AccountsBook (la tabla Balance contiene la clave primaria del AccountsBook al que pertenece)
    public function accountsBook()
    {
        return $this->belongsTo(AccountsBook::class);
    }
}
