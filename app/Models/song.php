<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    protected $table="songs";
    protected $fillable=[
        'song_name',
        'album_id',
        'artist_name',
        'song',
        
    ];
    public function album(){
        return $this->belongsTo(Album::class);
    }
    
    use HasFactory;
}
