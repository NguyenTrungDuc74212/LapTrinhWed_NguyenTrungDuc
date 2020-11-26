<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chuong extends Model
{
    use HasFactory;
    protected $table="chuong";
    protected function truyen()
    {
    	return $this->belongsTo('App\Models\truyen.php','id_truyen','id');
    }
    protected function binhluan()
    {
    	return $this->hasMany('App\Models\binhluan.php','id_chuong','id');
    }
}
