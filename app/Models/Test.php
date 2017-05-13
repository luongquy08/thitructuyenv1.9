<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "uet_tests";
    protected $guarded = [];
    
    public function subject(){
        return $this->belongsTo('App\Models\Subject', 'subject_id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
