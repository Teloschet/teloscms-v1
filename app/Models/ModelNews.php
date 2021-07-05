<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelNews extends Model
{
    protected $table='news';
    protected $fillable=['id', 'title', 'backgroundimage', 'topstory', 'longstory', 'date', 'author'];

    public function relUsers() {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
