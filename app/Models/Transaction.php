<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['trx_id', 'user_id', 'amount'];

    public function getAmountAttribute($value)
    {
        return (string)$value;
    }
}
