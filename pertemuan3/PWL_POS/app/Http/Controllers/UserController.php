<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = [
            'nama'=>'Pelanggan Pertama',
        ];
        UserModel :: where('username', 'customer-1')->update($data);


        // dd(UserModel :: where('username', 'customer-1')->get());


        

        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        
        // UserModel::insert($data);




        $user = UserModel::all();
        return view('user', ['data' => $user]);
        }
}
