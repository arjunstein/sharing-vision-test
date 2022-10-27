<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
   public function index()
   {
        $post = Post::orderBy('id','asc')->offset(0)->limit(5)->get();
   
        return new PostResource(true, 'List data post', $post);
    } 

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:20',
            'content' => 'required|min:200',
            'category' => 'required|min:3',
            'status' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category'=> $request->category,
            'status' => $request->status,
        ]);

        return new PostResource(true, 'Data Post Berhasil Ditambahkan!', $post);
    }

    public function show(Post $post)
    {
        return new PostResource(true, 'Data post ditemukan', $post);
    }

    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|min:20',
            'content' => 'required|min:200',
            'category' => 'required|min:3',
            'status' => 'required', 
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->status = $request->status;
        $post->update();

        return new PostResource(true, 'Data Post Berhasil Diubah!', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return new PostResource(true, 'Data berhasil dihapus', null);
    }
}
