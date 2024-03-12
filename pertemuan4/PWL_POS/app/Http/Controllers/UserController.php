<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        /*$data = [
            'level_id'=> 2,
            'username'=> 'manager 2',
            'nama'=> 'Manager 2',
            'password'=> Hash::make('12345')
        ];
        UserModel::create($data);*/

        /*$data = [
            'level_id'=> 3,
            'username'=> 'manager 3',
            'nama'=> 'Manager 3',
            'password'=> Hash::make('12345')
        ];
        UserModel::create($data);*/



        // dd(UserModel :: where('username', 'customer-1')->get());


        

        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 4
        // ];
        
        // UserModel::insert($data);




        //$user = UserModel::all();
        //$user = UserModel::find(1);
        //$user = UserModel::where('level_id', 1)->first();
        //$user = UserModel::firstWhere('level_id', 1);
        //$user = UserModel::findOr(1, ['username', 'nama'], function (){abort(404);});
        $user = UserModel::findOr(20, ['username', 'nama'], function (){abort(404);});
        return view('user', ['data' => $user]);
        }
}
