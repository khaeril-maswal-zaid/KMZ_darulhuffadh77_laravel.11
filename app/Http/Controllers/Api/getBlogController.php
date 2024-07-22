<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class getBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return response()->json([
            'title' => $blog->title,
            'slug' => $blog->slug,
            'oleh' => $blog->oleh,
            'description' => $blog->excerpt,
            'body1' => $blog->body1,
            'body2' => $blog->body2,
            'picture1' => $blog->picture1,
            'picture2' => $blog->picture2,
            'picture3' => $blog->picture3,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
