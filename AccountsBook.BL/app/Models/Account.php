<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'abook_id',
        'name',
        'amount',
        'main'
    ];

    // una Account pertenece sólo a un AccountBook (aunque haya varias con el mismo nombre. Ej: ING account o BBVA account)
    public function accountsbook()
    {
        return $this->belongsTo(AccountsBook::class);
    }

    // una Account puede aparecer en varias Operations
    public function operations()
    {
        return $this->hasMany(Operation::class);
    }

    // una Account puede aparecer en varias Transfers como 'source_account'
    public function transfersAsSource()
    {
        return $this->hasMany(Transfer::class, 'source_account');
    }

    // una Account puede aparecer en varias Transfers como 'destination_account'
    public function transfersAsDestination()
    {
        return $this->hasMany(Transfer::class, 'destination_account');
    }
}
