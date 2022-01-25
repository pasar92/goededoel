<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class period_items extends Model
{
    protected $fillable = [
        'period_id',
        'charity_id',
    ];
    use HasFactory;
}
