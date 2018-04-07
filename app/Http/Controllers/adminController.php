<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

use Session ;
session_start();
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function _construct()
    {


    }

    private function auth_status()
    {
        $admin_id=Session::get('admin_id');
        echo  $admin_id;
        if( $admin_id !=null)
        {

            return Redirect::to('/dashboard')->send();
        }

    }

    public function index()
    {

        $this->auth_status();

        return view('Admin.admin_Login');

    }




    public  function adminLoginCheck(Request $request)
    {

        $admin_email=$request->admin_email;
        $password=$request->password;

        $admininfo=DB::table('tbl_admin')
                   ->select('*')
                   ->where('admin_email',$admin_email)
                   ->where('admin_password',$password)
                   ->first();
        if ($admininfo) {
            Session::put('admin_id',$admininfo->admin_id);
            Session::put('admin_names',$admininfo->admin_name);
            Session::put('admin_email',$admininfo->admin_email);

//            return view('admin.admin_master');

            return Redirect::to('/dashboard');
        }
        else
        {
            Session::put('exception',"User email id or password is not match");
            return Redirect::to('/admin-panel');
        }
    }





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


    }
}
