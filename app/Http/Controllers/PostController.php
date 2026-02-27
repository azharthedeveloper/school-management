<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function addData()
    // {
    //     $post = new Post();
    //     $post->title = "Post 11";
    //     $post->description = "Post 11, Post 11, Post 11, Post 11,Post 11, Post 11, Post 11, Post 11, Post 11";
    //     $post->save();

    //     dd("DATA ADDED");
    // }

    // public function getData()
    // {
    //     // $posts = Post::all();

    //     // $posts = Post::select('id', 'title')->get();

    //     // $posts = Post::where('id', 1)->first();

    //     $posts = Post::find(2);



    //     // return $posts;

    //     dd("GET DATA", $posts);
    // }

    // public function updateData()
    // {
    //     // $post = Post::where('id', 2)->first();
    //     // $post->title = "Post 2 Updated";
    //     // $post->description = "Post 2, Post 2, Post 2, Post 2,Post 2, Post 2, Post 2, Post 2, Post 2 Updated";
    //     // $post->update();

    //     $post = Post::find(1);
    //     $post->title = "Post 1 Updated";
    //     $post->description = "Post 1, Post 1, Post 1, Post 1,Post 1, Post 1, Post 1, Post 1, Post 1 Updated";
    //     $post->update();

    //     dd("UPDATED DATA", $post);
    // }

    // public function deleteData()
    // {

    //     // $post = Post::find(11);
    //     // $post->delete();
    //     // Agar record exists nahi krta hoga to error de dega upar wala code

    //     // $post = Post::findOrFail(11);
    //     // $post->delete();

    //     // $post = Post::findOrFail(10)->delete();

    //     Post::findOrFail(10)->delete();

    //     dd("DELETED DATA");
    // }

    // public function firstMethod(){
    //     $posts = Post::greaterthanfive()->get();
    //     dd("First Method", $posts);
    // }

    // public function secondMethod(){
    //     $posts = Post::greaterthanfive(1, 6)->get();
    //     dd("Second Method", $posts);
    // }

    public function index(Request $request)
    {
        // Without Filter
        // $posts = Post::all();

        //With Filter
        $posts = Post::when($request->search, function($query) use($request){
            return $query->whereAny([
                'id',
                'title',
                'description',
                'status',
                'post_type',
                'views',
                'likes'
            ], 'like', '%' . $request->search . '%');
        })->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {

        dd("CREATED");
    }

    public function store(Request $request)
    {


        dd($request->all());
    }

    public function edit($id)
    {

        dd("EDIT", $id);
    }

    public function update(Request $request, $id)
    {


        dd($request->all(), $id);
    }

    public function destroy(Request $request, $id)
    {

        dd($request->all(), $id);
    }
}
