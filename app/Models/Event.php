<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location', 'date', 'photo'];

    public function getPhotoSrcAttribute(): String
    {
    	return image($this->photo);
    }

    public function getDateFormattedAttribute(): String
    {
    	return localDate($this->date);
    }
}
