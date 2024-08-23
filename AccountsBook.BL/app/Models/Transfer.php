<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'source_account',
        'detination_account',
        'amount',
        'date'
    ];

    // una Transfer puede tener sólo una Account actuando como source_account
    public function sourceAccount()
    {
        return $this->belongsTo(Account::class, 'source_account');
    }

    // una Transfer puede tener sólo una Account actuando como destination_account
    public function destinationAccount()
    {
        return $this->belongsTo(Account::class, 'destination_account');
    }

    // aunque la clase Account no tiene definidos los atributos 'source_account' ni 'destination_account',
    // la función 'belongsTo' hace que los relaciones con la clase Transfer
}
