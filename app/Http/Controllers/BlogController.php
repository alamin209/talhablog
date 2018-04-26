<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;
use DB;
use  Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $all_blog= DB::table('blog_add')
            ->select('blog_id','blog_title', 'short_description','long_description','blog_image','created_at')
            ->where('Publication_status',1)
            ->orderBy('blog_id',' DESC')
            ->get();
        $home_content=view('pages.home')
            ->with('all_blog',$all_blog);
        $sidebar=1;
        return view('master')
            ->with('home_content',$home_content)
            ->with('all_blog',$home_content)
           ->with('sidebar',$sidebar);

    }

    public  function detailsBlog($blog_id)
    {
        DB::table('blog_add')
            ->where('blog_id',$blog_id)
            ->increment('hit_count');
        $blog_info= DB::table('blog_add')
            ->join('table_category','table_category.id','=', 'blog_add.blog_id')
            ->select('blog_id','blog_title', 'short_description','long_description','blog_image','created_at')
            ->where('blog_id',$blog_id)
            ->select("blog_add.*",'table_category.category_name')
            ->first();

        $comment_info= DB::table('tbl_comments')
            ->join('users','users.id','=', 'tbl_comments.user_id')
            ->where('publish_status',1)
            ->where('blog_id',$blog_id)
            ->select("tbl_comments.*",'users.name')
            ->get();

        $home_content=view('pages.blog_details')
            ->with('blog_info',$blog_info)
             ->with('comment_info',$comment_info);
        $sidebar=1;
        return view('master')
            ->with('home_content',$home_content)
            ->with('all_blog',$home_content)
            ->with('sidebar',$sidebar);

    }
    public function catagory_blog($catagory_blog)
    {

        $all_caegory_blog= DB::table('blog_add')
            ->select('blog_id','blog_title', 'short_description','long_description','blog_image','created_at')
            ->where('Publication_status',1)
            ->where('id',$catagory_blog)
            ->orderBy('blog_id',' DESC')
            ->get();
        $home_content=view('pages.category_blog')
            ->with('all_caegory_blog',$all_caegory_blog);
        $sidebar=1;
        return view('master')
            ->with('home_content',$home_content)
            ->with('all_blog',$home_content)
            ->with('sidebar',$sidebar);

    }






    public  function  aboutUs()
    {

        $about_content=view('pages.about');
        $sidebar=null;
        return view('master')
              ->with('home_content',  $about_content)
             ->with('sidebar',$sidebar);;
    }


    public  function userCommemnets(Request $request)

    {
   $data =array();
          $data['blog_id']=$request->blog_id;
         $data['user_id']=$request->user_id;
         $data['comments']=$request->comments;
         $data['created_at']=new \DateTime();
         DB::table('tbl_comments')
        ->insert( $data);
        $request->session()->flash('message', 'Comments has been send to admin  !');
        return Redirect::to('/bolg_details/'.$data['blog_id']);


        

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
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
