<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // return PostResource::collection($posts);
        $posts = Post::all()->toArray();
        return array_reverse($posts);
    }

    public function store(PostRequest $request)
    {
        $post = new Post([
            'title' => $request->input('title'), 
            'description' => $request->input('description') 
        ]);
        $post->save();
        return response()->json('post created!');
    }

    public function edit($id){
        $post = Post::find($id);
        return response()->json($post);
    }

    public function update(UpdatePostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json('Post updated!');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json('Post deleted!');
    }
}
