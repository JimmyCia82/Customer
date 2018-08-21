<?php
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 13/08/2018
 * Time: 15:23
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customers extends Model
{
    protected $table = 'customers';
    protected $fillable = ['full_name', 'nick_name', 'birth_date', 'male', 'email_address', 'email_address_activation_code', 'email_address_activated', 'phone_number', 'phone_number_activation_code', 'phone_number_activated', 'image', 'password', 'need_to_change_password', 'last_change_password_date_time', 'insert_user_id', 'insert_date_time', 'insert_host_name', 'insert_ip_address', 'last_update_user_id', 'last_update_date_time', 'last_update_host_name', 'last_update_ip_address', 'delete_user_id', 'delete_date_time', 'delete_host_name', 'delete_ip_address'];
}