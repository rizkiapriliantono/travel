<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'transactions_id', 'username', 'departure', 'tipe_trip'
    ];

    protected $hidden = [

    ];
    public function transaction(){
        return $this->belongsTo(Transaction::class, 'transactions_id', 'id');
    }

}
