<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Namo;


class RegisterController extends Controller
{
    public function index()
    {
        return view('form');
    }


    public function register(Request $request){
       

        //insert Query
        $namo = new Namo;
        $namo->Username = $request['Username'];
        $namo->password = $request['password'];
        $namo->Email = $request['email'];
        $namo->Mobile = $request['mobile'];
        $namo->Gender = $request['gender'];
        $namo->City = $request['city'];
        $namo->save();
        return redirect('view');

    }

    public function view(){
        $user = Namo::all();
        // dd($user);
        // $data = compact('user');
        return view('view')->with(compact('user'));

    }
    public function delete($id)
    {
        Namo::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $user = Namo::find($id);
        return view('edit')->with('user', $user);
        
    }


    public function update($id, Request $request)
    {
        // print_r($id); die();
        $user = Namo::find($id);
        // $input = $request->all();
        // $user->update($input);
        $user->Username = $request['Username'];
        $user->password = $request['password'];
        $user->Email = $request['email'];
        $user->Mobile = $request['mobile'];
        $user->Gender = $request['gender'];
        $user->City = $request['city'];
        $user->update();
        return redirect('view');
        
    }


    


}
