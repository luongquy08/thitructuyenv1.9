<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "uet_questions";
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
