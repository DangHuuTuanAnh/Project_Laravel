<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Policies\PostPolicy;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status',1)->orderby('updated_at','desc')->get();
        return view('backend.posts.index')->with([
            'posts'=>$posts,
        ]);
    }
    public function browse_list(){
        $browse_posts = Post::where('status',0)->orderby('updated_at','desc')->get();
        return view('backend.posts.browse')->with([
            'browse_posts'=>$browse_posts,
        ]);
    }
    public function browse_post($id){
        $user = Auth::user();
        $post = Post::find($id);
        if($user->can('browse',$post)){
            $post->status = 1;
            $post->save();
            return redirect()->route('backend.post.browse');
        }else{
            $this->authorize('browse',$post);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $name = $request->get('name');
        $description = $request->get('description');
        $category_id = $request->get('category_id');
        $content = $request->get('content');

        $post->name  = $name;
        $post->user_id = Auth::user()->id;
        $post->category_id = $category_id;
        $post->description = $description;
        $post->content = $content;
        if($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $namefile = $thumbnail->getClientOriginalName();
            $thumbnail_post = Storage::disk('public')->putFileAs('thumbnail-post',$thumbnail,$namefile);
            $url = Storage::url($thumbnail_post);
        }
        $post->thumbnail = $url;
        $post->save();

        return redirect()->route('backend.post.index');
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
        $user = Auth::user();
        $post = Post::find($id);
        if($user->can('update',$post)){
            return view('backend.posts.edit')->with([
                'post'=>$post,
            ]);
        }else{
            $this->authorize('update',$post);
        }
        
        
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

        $post = Post::find($id);
        // $this->authorize('update',$post);

        $name = $request->get('name');
        $description = $request->get('description');
        $category_id = $request->get('category_id');
        $content = $request->get('content');

        $post->name  = $name;
        $post->user_id = Auth::user()->id;
        $post->category_id = $category_id;
        $post->description = $description;
        $post->content = $content;
        if($request->has('thumbnail')){
            $thumbnail = $request->file('thumbnail');
            $namefile = $thumbnail->getClientOriginalName();
            $thumbnail_post = Storage::disk('public')->putFileAs('thumbnail-post',$thumbnail,$namefile);
            $url = Storage::url($thumbnail_post);
        }
        $post->thumbnail = $url;
        $post->save();

        return redirect()->route('backend.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $user = Auth::user();
        if($user->can('delete',$post)){
            $post->delete();
            return redirect()->route('backend.post.index');
        }
        else{
            $this->authorize('delete',$post);
        }
        
    }
}
