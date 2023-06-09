<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vine extends Model
{
    use HasFactory;

    protected $fillable= ['name', 'description', 'wine_id'];

    public function wines()
    {
        return $this->belongsToMany(Wine::class);
    }
}
