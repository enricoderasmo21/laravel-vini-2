<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    public function winery()
    {
        return $this->belongsTo(Winery::class);
    }

    public function vines()
    {
        return $this->belongsToMany(Vine::class);
    }
}
