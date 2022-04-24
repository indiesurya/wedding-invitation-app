<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['man_name', 'man_nickname', 'man_father', 'man_about', 'man_photo', 'woman_name', 'woman_nickname', 'woman_father', 'woman_about', 'woman_photo'];

    protected $dispatchesEvents = [
        'saved' => \App\Events\AboutSaved::class
    ];

    public function getManPhotoSrcAttribute(): String
    {
    	return image($this->man_photo);
    }

    public function getWomanPhotoSrcAttribute(): String
    {
    	return image($this->woman_photo);
    }

    public function getShortNameAttribute(): String
    {
        $manName = substr($this->man_nickname, 0, 1);
        $womanName = substr($this->woman_nickname, 0, 1);

        return $manName.'&'.$womanName;
    }
}
