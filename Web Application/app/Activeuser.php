<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activeuser extends Model{
    //
    protected $table = 'activeusers';
    protected $fillable = ['status', 'user_id', 'created_at', 'updated_at'];
    public $timestamps = true;


    public function user() {
        return $this->belongsTo(User::class);
    }
}
