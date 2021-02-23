<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // DB relationships
    public function infoPost() {
        return $this->hasOne('App\InfoPost');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
