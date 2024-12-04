<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use softDeletes;

    protected $fillable = ['title','content','date','user_id'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
    
    function User(){
        return $this->belongsTo(User::class);
    }    

}
