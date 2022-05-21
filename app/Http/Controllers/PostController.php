<?php
   
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\Post;
   
class PostController extends Controller
{
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return view('postsCreate');
    }
	
	 public function edit()
    {
        return view('postsEdit');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
        ]);
 
        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
		
		  $post = Post::edit([
            'title' => $request->title,
            'body' => $request->body
        ]);
 
       dd($post->toArray());
    }
}