<?php

namespace App\Models;

use App\Models\period_items;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class period extends Model
{
    protected $fillable = [

        'start',
        'amount',
        'user_id',
        'status',

    ];

    public function periodItems()
    {
        return $this->hasMany(period_items::class);
        // ga naar period_items en haal elke periodItems met Id van deze period. => period 1 . Gaat elke period_items-> charity_id = 1
    }
    use HasFactory;
}
