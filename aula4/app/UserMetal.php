<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMetal extends Model
{
    protected $table = 'user_metal';

    protected $fillable = ['nome', 'favorite_band'];
}
