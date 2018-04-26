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

//    public function deleteCatagoryid()
//
//    {
//        $id = $this->input->post('id');
//        DB::table('table_category')->where('id', '>', $id)->delete();
//    }


    public  function  addCatagory()
    {
        $this->auth_check();
        $add_catagory=view('Admin.pages.add_catagory');
        return view('admin.admin_master' )
            ->with('admin_main_content',$add_catagory);

    }


    public function saveCategory(Request $request)
    {

        $data = array(
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'Publication_status' => $request->status,
            'created_at' => new \DateTime()
        );
        DB::table('table_category')
            ->insert($data);
        $request->session()->flash('message', 'Category added successfully !');
        return back()->withInput();

    }

////////////////////////for database view ////////////////////////////
    public  function mangaeCatagory()
    {

        $this->auth_check();

        $allcatory= DB::table('table_category')
            ->get();

        $manage_catagory=view('Admin.pages.manage_catagory')
            ->with('allcatory',$allcatory);
        //

        return view('admin.admin_master' )
        ->with('admin_main_content',$manage_catagory);
    }

    public  function publish($id)
    {
        $data=array();
        $data['Publication_status']=1;
        DB::table('table_category')
            ->where('id',$id)
            ->update($data);
        return back()->withInput();
    }
    public  function mangaeComments()
    {

        $this->auth_check();

        $allcomments= DB::table('tbl_comments')
            ->orderBy('id',' DESC')
            ->get();

        $allcomments=view('Admin.pages.comments_mangement')
            ->with('allcomments',$allcomments);
        //
        return view('admin.admin_master' )
            ->with('admin_main_content',$allcomments);
    }


    public  function unpublishcomment($comment_id)
    {
        $data=array();
        $data['publish_status']=0;
        DB::table('tbl_comments')
            ->where('id',$comment_id)
            ->update($data);
        return back()->withInput();
    }



    public function unpublish($id1)
    {

        $data=array();
        $data['Publication_status']=0;
        DB::table('table_category')
            ->where('id',$id1)
            ->update($data);
        return back()->withInput();
    }

    public  function publishComments($id)
    {

        $data=array();
        $data['publish_status']=1;
        DB::table('tbl_comments')
            ->where('id',$id)
            ->update($data);
        return back()->withInput();
    }





    public function deletecatgory($id)
    {
        DB::table('table_category')->where('id',$id)->delete();
        return back()->withInput();


    }

    public  function editCategory($id)
    {
        $this->auth_check();

        $allcatoryinfor = DB::table('table_category')
              ->where('id',$id)
            ->first();
        $catagory_info = view('Admin.pages.edit_catagory')
                   ->with('allcatoryinfor', $allcatoryinfor);



        return view('admin.admin_master')
               ->with('admin_main_content', $catagory_info);


    }

    public  function updateCategory( Request $request, $id)
    {
        $data = array(
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'Publication_status' => $request->status,
            'updated_at' => new \DateTime()
        );
        DB::table('table_category')
            ->where('id',$id)
            ->update($data);

        return Redirect::to('/manage-catagory');
//        return back()->withInput();

    }

    public  function addBlog()
    {
        $this->auth_check();
        $this->auth_check();

        $allcatory= DB::table('table_category')
              ->where('Publication_status',1)
            ->get();
        $add_blog=view('Admin.pages.add_blog')
                 ->with('allcatory',$allcatory);
        return view('admin.admin_master' )
            ->with('admin_main_content',$add_blog);

    }

    public function saveBlog(Request $request )
    {
$data=array(

     'blog_title'=>$request->blog_title,
     'admin_id'=>Session::get('admin_id'),
     'id'=>$request->add_catgory,
     'blog_title'=>$request->blog_title,
    'short_description'=>$request->short_description,
    'long_description'=>$request->long_description,
    'Publication_status'=>$request->Publication_status,
    'created_at'=>new \DateTime()

);

$image=$request->file('blog_image');
        if($image) {
            $image_name = str_random(20);//it will cretae randomm  20 string for the image
            ///getint orginal name
            $ext = strtolower($image->getClientOriginalExtension());
//            $imaze_size = ($image->getClientSize() > 1024);
//            echo "<script>alert('the image is larget thatn upload condotion')</script>";
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = "blog_image/";
            $image_url = $upload_path . $image_full_name;
            $sucess = $image->move($upload_path, $image_full_name);
            if ($sucess) {
                $data['blog_image'] = $image_url;
                DB::table('blog_add')
                    ->insert($data);
                $request->session()->flash('message', 'Blog added successfully !');
                return Redirect::to('/add-blog');
            }
        }

            else
            {

                DB::table('blog_add')
                    ->insert($data);
                $request->session()->flash('message', 'Blog added successfully !');
                return Redirect::to('/add-blog');
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
        //
    }
}
