<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    protected  $primaryKey = 'travel_id';

    protected $fillable = [
        'evaluetion',
        'filht_id',
        'user_id',
        
    ];

}
