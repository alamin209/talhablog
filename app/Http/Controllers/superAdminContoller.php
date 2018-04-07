<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Redirect;
use Session ;
use  Illuminate\Support\Facades\DB;
session_start();
class superAdminContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public  function  __construct()
    {

    }



    private  function  auth_check()
    {

        $admin_id=Session::get('admin_id');
        if( $admin_id==null)
        {

            return Redirect::to('admin-panel')->send();
        }


    }






    public function index()


    {
        $this->auth_check();
        $admin_main_content=view('Admin.pages.admin_dashboard');
        return view('admin.admin_master' )
                   ->with('admin_main_content',$admin_main_content);
    }


    public  function  logout()

    {

        Session::put('admin_id','');
        Session::put('admin_names','');
        Session::put('admin_email','');
        Session::put('message',"You  have sucessfully logout ");
        return Redirect::to('/admin-panel');


    }


    public  function  addCatagory()
    {
        $this->auth_check();
        $add_catagory=view('Admin.pages.add_catagory');
        return view('admin.admin_master' )
            ->with('admin_main_content',$add_catagory);

    }


    public function saveCategory(Request $request)
    {
//        protected $timestamps = true;

//        $data=array();
//        $data['category_name']=$request->category_name;
//        $data['category_description']=$request->category_description;
//        $data['Publication_status']=$request->status;
//        $data['created_at'] =new \DateTime();
        $data=array(
            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description,
            'Publication_status'=>$request->status,
            'created_at'=>new \DateTime()
        );
        DB::table('table_category')
            ->insert($data);

//        if (empty($data)) {
//
//            $this->Session::get->set_flashdata('successMessage','Category Added Successfully');
////            redirect('');
//
//        } else {
//
//            $this->session->set_flashdata('errorMessage','Some thing Went Wrong !! Please Try Again!!');
////            redirect('Admin-Category');
//
//        }

    }
    public  function mangaeCatagory()
    {
        $this->auth_check();
        $manage_catagory=view('Admin.pages.manage_catagory');
        return view('admin.admin_master' )
            ->with('admin_main_content',$manage_catagory);

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
        //
    }
}
