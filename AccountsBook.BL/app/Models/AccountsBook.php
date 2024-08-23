<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountsBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description'
    ];

    // un AccountBook pertenece a un User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // un AccountsBook puede tener varias Accounts
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    // un AccountsBook tiene un Balance
    public function balance()
    {
        return $this->hasOne(Balance::class);
    }

}