<?php

namespace App\Http\Controllers;
use App\Upload;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts =  Upload::orderBy('created_at','desc')->get();
       return view('posts.find')->with('posts',$posts);
       //return response()->json($posts, 200);
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

        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required|numeric|digits:10',
            'dfname'=>'required',
            'dlname'=>'required',
            'terms' => 'required',
            'pincode' => 'required|numeric|digits:6'
        ]);


        //create post
        $post = new Upload;
        $post->name = $request->input('name');
        $post->phone = $request->input('phone');
        $post->email = $request->input('email');
        $post->email = $request->input('doc');
        $post->dname = $request->input('dfname');
        $post->dname = $request->input('dlname');
        $post->pincode = $request->input('pincode');
        $post->dob = $request->input('dob');
        $post->age = $request->input('age');
        $post->pname = $request->input('pname');

        $post->save();

        return redirect('/')->with('success','successfully uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post =  Upload::find($id);
         return view('posts.show')->with('post',$post);

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
