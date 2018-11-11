<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class PostsController extends Controller
{
    //

	public function AllPost(){
		$posts = Post::all();
		return view('allpost', compact('posts'));
	}

    public function CreatePost(){
    	return view('createpost');
    }

    public function SavePost(Request $request){
    	$data = [
    		'title' => $request->title,
    		'isi' => $request->isi
    	];

    	Post::create($data);
    	return redirect('/allpost');
    }

    public function DeletePost($id){
    	$post = Post::find($id);
    	$post->delete();
    	return redirect('/allpost');
    }

    public function EditPost($id){
    	$post = Post::find($id);
    	return view('editpost', compact('post'));

    }

    public function UpdatePost(Request $request){
  

    	$post = Post::find($request->id);

    	$data = [
    		'title' => $request->title,
    		'isi' => $request->isi,
    	];

    	$post->update($data);
    	return redirect('/allpost');

    }


    public function ViewPost($id){
    	$post = Post::find($id);
    	$comment = $post->Comment;

		return view('viewpost', compact(['post','comment']));    	
    }

    public function CommentPost(Request $request){

    	$comment = new Comment();
    	$comment->posts_id = $request->id;
    	$comment->isi_comment = $request->comment;

    	$comment->save();

    	return redirect()->back();
    }


    public function DeleteCommentPost($id){
    	$comment = Comment::find($id);
    	$comment->delete();
    	
    	return redirect()->back();
    }

}
