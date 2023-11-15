<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;

    protected  $primaryKey = 'fight__id';

    protected $fillable = [
        'date',
        'country',
        
    ];
}
