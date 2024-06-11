<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve all posts
        $posts = Post::orderBy('id')->paginate(10);
        return view('auth.post', compact('posts'));
    }

    // public function show($id)
    // {
    //     // Retrieve a single post by its ID
    //     $post = Post::findOrFail($id);
    //     return view('posts.show', compact('post'));
    // }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('delete_success','Deleted successfully');
    }

    public function sendMsg(Request $request) 
    {
        $data = $request->all();
        $post = Post::create($data);
        $result = $post?'ok':'fail';
        if (array_key_exists('contactflag', $data)) {
            return $result;
        }
        if ($result == 'ok'){
            return back()->with('contact_success', 'Successfully submitted!');
        } else{
            return back()->with('contact_error', 'Submission Failed!');
        }
    }
}