<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stallowner extends Model
{
    use HasFactory;

    protected $fillable = [
        'Stall_owner_name',
        'Cellphone_number',
        'Stall_number',
        'Stall_type',
    ];
}
