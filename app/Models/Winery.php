<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    use HasFactory;

    protected $fillable = ['name','address','area','district','region','nation','phone','email', 'wine_id'];

    public function wines()
    {
        return $this->hasMany(Wine::class);
    }
}
