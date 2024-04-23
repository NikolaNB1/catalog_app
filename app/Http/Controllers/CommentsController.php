<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'text' => 'required|string|min:2|max:200'
        ]);


        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->text = $request->text;
        $comment->save();

        return redirect()->back()->with('success', 'Comment submitted successfully!');
    }

    public function pending()
    {
        if (!auth()->user()->isAdmin) {
            abort(403, 'Unauthorized action.');
        }

        $comments = Comment::where('approved', false)->get();
        return view('comments.pending', compact('comments'));
    }

    public function approve(Comment $comment)
    {
        if (!auth()->user()->isAdmin) {
            abort(403, 'Unauthorized action.');
        }

        $comment->approved = true;
        $comment->save();

        return redirect()->back()->with('success', 'Comment approved successfully!');
    }
}
