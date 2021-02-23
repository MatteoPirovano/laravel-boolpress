<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class BlogController extends Controller
{
    public function show($slug) {
        $post = Post::where('slug', $slug)->firstorfail();

        // if(empty($post)) {
        //     abort('404');
        // }

        return view('post', compact('post'));
    }
    
    public function addComment(Request $request, $id) {
        // dd($request->all());
        $data= $request->all();
        $newComment= new Comment();
        // $newComment->author= $data["author"];
        // $newComment->text= $data["text"];
        // $newComment->post_id= $id;
        $newComment->fill($data);
        $newComment->save();

        $post = Post::findOrFail($id);

        return redirect()->route('post', $post->slug); 
    }
}
