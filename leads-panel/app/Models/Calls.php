<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calls extends Model
{
    use HasFactory;
    protected $fillable = [
        'lead_name',
        'seller',
        'call_date_and_time'
    ];
}
