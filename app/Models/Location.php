<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['image'];

    public function getImageSrcAttribute(): String
    {
    	return image($this->image);
    }
}
