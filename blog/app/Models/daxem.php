<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daxem extends Model
{
    use HasFactory;
    protected $table="daxem";
    protected function truyen()
    {
    	return $this->belongsTo('App\Models\truyen','id_truyen','id');
    }
    protected function user()
    {
    	return $this->belongsTo('App\Models\User','id_user','id');
    }
}
