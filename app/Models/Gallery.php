<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['photo'];

    public function getPhotoSrcAttribute(): String
    {
    	return image($this->photo);
    }
}
