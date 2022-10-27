<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Beranda';
        return view('dashboard.index',compact('title'));
        
    }

    public function allpost()
    {
        $post = Post::orderBy('id','asc')->get();
        $title = 'All Posts';
        return view('dashboard.allpost',compact('post','title'));
    }

    public function addpost()
    {
        $title = 'Add New';
        return view('dashboard.addpost',compact('title'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:20',
            'content' => 'required|min:200',
            'category' => 'required|min:3',
            'status' => 'required',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category'=> $request->category,
            'status' => 'publish',
        ]);
        
        \Session::flash('sukses', 'Berhasil dipost');
        return redirect('/allpost');
    }
}
