<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMetal extends Model
{
    protected $table = 'user_metal';

    protected $fillable = ['name', 'favorite_band', 'perfil_id', 'foto'];
    
    public function perfil() {
        return $this->belongsTo('App\Perfil');
    }
}
