<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(20);
        return view('admin.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {
        $data = $request->all();
        Tag::create($data);
        return redirect()->route('tag.index')->with('created','Tag created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('admin.tag.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('admin.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $data = $request->all();
        $tag->update($data);
        return to_route('tag.index')->with('updated','Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->back()->with('deleted','Tag deleted successfully');
    }
}
