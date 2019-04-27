<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $request->all();

        $blogs = Blog::where(function ($query) use ($data) {
            if (!empty($data['id'])) {
                $query->where('id', $data['id']);
            }
        })->with('tag')->get();

        return $blogs;
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
        $data = $request->all();

        $validation = $this->validation($data);
        
        $newBlog = Blog::create($data);

        return response()->json($newBlog, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        $blog->tag;

        return $blog;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return response('', 204);
    }

    private function validation(array $data)
    {
        $validator = Validator::make($data, [
            'title' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
            'content' => 'required|string',
            'image' => 'required|image',
        ], [
            'title' => 'Título inválido',
            'user_id' => 'Usuário inválido',
            'content' => 'Conteúdo inválido',
            'image' => 'Imagem inválida',
        ]);

        return $validator;
    }
}
