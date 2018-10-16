<?php
/**
 * Created by PhpStorm.
 * User: Jimmy
 * Date: 13/08/2018
 * Time: 15:27
 */

namespace App\Http\Controllers;

use App\Customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomersController  extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function createCustomer(Request $request){
        $customer=new Customers;

        $customer->full_name = $request->json('full_name');
        $customer->nick_name = $request->json('nick_name');
        $customer->birth_date = $request->json('birth_date');
        $customer->male = $request->json('male');
        $customer->email_address = $request->json('email_address');
        $customer->email_address_activation_code = rand(1000,9999);
        $customer->email_address_activated = false;
        $customer->phone_number = $request->json('phone_number');
        $customer->phone_number_activation_code = rand(1000,9999);
        $customer->phone_number_activated = false;
        $customer->image = null;
        $customer->need_to_change_password = false;
        $customer->last_change_password_date_time = null;
        $customer->insert_user_id = -1;
        $customer->insert_date_time = date('Y-m-d H:i:s');
        $customer->insert_host_name = 'JIMMY-THINKPAD';
        $customer->insert_ip_address = '192.168.3.168';
        $customer->last_update_user_id = -1;
        $customer->last_update_date_time = date('Y-m-d H:i:s');
        $customer->last_update_host_name = 'JIMMY-THINKPAD';
        $customer->last_update_ip_address = '192.168.3.168';
        $customer->delete_user_id = null;
        $customer->delete_date_time = null;
        $customer->delete_host_name = null;
        $customer->delete_ip_address = null;
        $customer->password = $request->json('password');
        $customer->save();


        return response()->json($customer);
    }

    public function updateCustomer(Request $request, $id){
        $customer=Customers::find($id);
        $customer->full_name = $request->json('full_name');
        $customer->nick_name = $request->json('nick_name');
        $customer->birth_date = $request->json('birth_date');
        $customer->male = $request->json('male');
        $customer->email_address = $request->json('email_address');
        $customer->phone_number = $request->json('phone_number');
        $customer->image = null;
        $customer->last_update_user_id = -1;
        $customer->last_update_date_time = date('Y-m-d H:i:s');
        $customer->last_update_host_name = 'JIMMY-THINKPAD';
        $customer->last_update_ip_address = '192.168.3.168';
        $customer->save();

        return response()->json($customer);

    }

        public function deleteCustomer($id){
        $customer=Customers::find($id);
        $customer->delete();

        return response()->json('Remove Successfully');

    }

    public function index(){
        $customer = Customers::all();

        return response()->json($customer);
    }

    //
}