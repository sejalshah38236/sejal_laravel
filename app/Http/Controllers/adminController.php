<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Alert;
use App\Models\admin;

class adminController extends Controller
{

    public function admin_index()
    {
        if(!(session()->has('id'))){
            Alert('please Login to view this Page !!');
            return redirect('/adminlogin');
        }

        return view('backend.index');
    }

    public function adminlogin()
    {
        return view('backend.login');

    }

    public function logincheck(Request $request)
    {

       $email=$request->email;
        $password=$request->password;
        $data=admin::where('email','=', $email)->first();
        if($data){
            if(Hash::check($password,$data->password)){
                session()->put('email',$data->email);
                session()->put('name',$data->name);
                session()->put('id',$data->id);
                Alert::success('you have successfully login');
                return redirect('/adminindex');
            }
            else{
                Alert::error('wrong password');
                return redirect()->back();
            }     
        }
        else{
        Alert::error('Wrong Username');
            return redirect()->back();
          }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
