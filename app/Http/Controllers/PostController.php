<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    public function store(Request $resquest)
    {
        $resquest->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        Post::create($resquest->all());
        
        return redirect()->route('posts.index')->with('success', 'Post criado com sucesso.');
    }    

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit', compact('post','users'));
    }

    public function update(Request $resquest, Post $post)
    {
        $resquest->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $post->update($resquest->all());

        return redirect()->route('posts.index')->with('success','Post atualizado com sucesso.');

    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deletado com sucesso.');
    }


}
