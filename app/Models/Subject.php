<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'uet_subjects';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
