<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = ['fname','lname','mname'];
    protected $guarded = [];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
