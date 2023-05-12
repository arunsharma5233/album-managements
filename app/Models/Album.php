<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $fillable = [
        'album_name',
        'artist_name',
       
    ];
    public function songs(){
        return $this->hasMany(song::class);
    }

    use HasFactory;
}
