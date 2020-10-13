<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    //
    protected $table = 'roles';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    public $timestamps = true;

    public function users(){
        return $this->hasMany('App\User');
    }
}
