<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'date', 'content', 'photo'];

    public function getPhotoSrcAttribute(): String
    {
    	return image($this->photo);
    }

    public function getReadMoreAttribute(): String
    {
    	return substr($this->content, 0, 40).'...';
    }

    public function getDateFormattedAttribute(): String
    {
    	return localDate($this->date);
    }
}
