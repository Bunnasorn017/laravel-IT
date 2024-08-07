<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function getComment() {
        $comments = DB::table('comment')->get();
        return view('comment',compact('comments'));
    }
}