<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NetworkInterface extends Model{
    //
    protected $table = "networkinterface";
    protected $fillable = ['pc_name', 'os_type', 'public_ip', 'private_ip', 'vpn_ip', 'gateway_ip', 'active_interface', 'mac_address', 'user_id'];
    public $timestamps = true;



    public function user() {
        return $this->belongsTo(User::class);
    }

}
