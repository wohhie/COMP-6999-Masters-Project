<?php
use App\NetworkInterface;
use Illuminate\Database\Seeder;

class NetworkInterfaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        NetworkInterface::truncate();

        NetworkInterface::create([
            'pc_name' => 'Wohhie-PC',
            'os_type'    =>  'Windows_NT x64',
            'public_ip' => '159.2.19.183',
            'private_ip'    => '192.168.2.1',
            'gateway_ip'    => '192.168.2.1',
            'active_interface'  => 'Wired Ethernet',
            'user_id'   => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at'    => \Carbon\Carbon::now(),
        ]);
    }
}
