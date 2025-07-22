<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->authorizeResource(Comment::class, 'comment');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([

        'body' => 'required',
        'post_id' => 'required',
       ]); 


        Comment::create([
            'body' => $request->body,
            'post_id' => $request->post_id,
            'user_id' => auth()->id(),
       ]);

       return redirect()->back()->with('successfully','Xabar muvaffaqiyatli yuklandi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('postdetail',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'body'=>'required',
            'post_id' => 'required',
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->id();

        $comment->update($data);
        return redirect()->back()->with('updated','Xabar muvaffaqiyatli o\'zgartirildi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('deleted','Xabar muvaffaqiyatli o\'chirildi');
    }
}
