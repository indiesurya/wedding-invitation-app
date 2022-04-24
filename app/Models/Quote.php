<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'quote', 'image'];

    public function getImageSrcAttribute(): String
    {
    	return image($this->image);
    }
}
