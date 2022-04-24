<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'time', 'location', 'iframe'];

    public function getDateFormattedAttribute(): String
    {
    	return localDate($this->date);
    }
}
