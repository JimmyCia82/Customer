<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->delete();
        $customers = app()->make('App\Customers');
        $customers->fill([
            'full_name' => 'Jimmy',
            'nick_name' => 'Jim',
            'birth_date' => '1982-04-17',
            'male' => true,
            'email_address' => 'jimmycia82@yahoo.com',
            'email_address_activation_code' => '2345',
            'email_address_activated' => true,
            'phone_number' => '08111994426',
            'phone_number_activation_code' => '2314',
            'phone_number_activated' => true,
            'image' => null,
            'password' => 'test',
            'need_to_change_password' => false,
            'last_change_password_date_time' => '2018-08-01',
            'insert_user_id' => -1,
            'insert_date_time' => '2018-08-16',
            'insert_host_name' => 'JIMMY-THINKPAD',
            'insert_ip_address' => '192.168.3.168',
            'last_update_user_id' => -1,
            'last_update_date_time' => '2018-08-16',
            'last_update_host_name' => 'JIMMY-THINKPAD',
            'last_update_ip_address' => '192.168.3.168',
            'delete_user_id' => null,
            'delete_date_time' => null,
            'delete_host_name' => null,
            'delete_ip_address' => null
        ]);
        $customers->save();
    }
}
