<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    public $table = "loans";
    protected $guarded = [];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
