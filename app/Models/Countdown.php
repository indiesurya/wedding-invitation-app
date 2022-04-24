<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countdown extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'image'];

    public function getImageSrcAttribute(): String
    {
    	return image($this->image);
    }
}
