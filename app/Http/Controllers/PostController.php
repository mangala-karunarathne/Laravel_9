<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        // // dd($posts);
        // return view('blog.index', compact('posts'));

        return view('blog.index', [
            'posts' => Post::orderBy('updated_at', 'desc')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        // dd('Redirected to the Store Method');
        // dd($request->all());
        // exit;


        // Coding with Object Oriented php
        // $post = new Post();
        // $post->title = $request->title;
        // $post->excerpt = $request->excerpt;
        // $post->body = $request->body;
        // $post->image_path = 'temporary';
        // $post->is_published = $request->is_published === 'on';
        // $post->min_to_read = $request->min_to_read;
        // $post->save();

        // Validation
        $request->validated();

        // Coding with Eloquent
        Post::create([
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image_path' => $this->storeImage($request),
            'is_published' => $request->is_published === 'on',
            'min_to_read' => $request->min_to_read
        ]);

        return redirect(route('blog.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::findorfail($id);
        // dd($posts);
        // return view('blog.show');
        return view('blog.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('blog.edit', [
            'post' => Post::where('id', $id)->first()
        ]);
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
        // dd($request->all());

        // dd($request->except(['_token', '_method']));

        // Post::where('id', $id)->update([
        //     'title' => $request->title,
        //     'excerpt' => $request->excerpt,
        //     'body' => $request->body,
        //     'image_path' => $request->image,
        //     'is_published' => $request->is_published === 'on',
        //     'min_to_read' => $request->min_to_read
        // ]);

        $request->validate([
            'title' => 'required | max: 255',
            'excerpt' => 'required',
            'body' => 'required',
            'image' => [ 'mimes:png,jpg,jpeg', 'max:5048'],
            'min_to_read' => 'min:0 | max:60'
        ]);

        Post::where('id', $id)->update($request->except(['_token', '_method']));

        return redirect(route('blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Post::destroy($id);

       return redirect(route('blog.index'))->with('message','Post has been deleted .');
    }

    private function storeImage($request)
    {
        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        return $request->image->move(public_path('images'), $newImageName);
    }
}
