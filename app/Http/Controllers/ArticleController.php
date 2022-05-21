<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Response;
class ArticleController extends Controller
{
    public function index()
    {
        return view('article-form');
	}
		 public function index2()
    {
        return view('article-form2');
    }
    public function storeArticle(Request $request)
    {
      $input_data = $request->all();
      $article = new Article();     
      $article->title = $input_data['title'];
      $article->description = $input_data['description'];
      $article->author = $input_data['author'];
      $article->save();
	return redirect()->route('article.form')->withSuccess(['Data saved successfully.']);
	}
	
    public function showArticle(Request $request, $id)
    {
      $article = Article::where('id',$id)->first();
      return view('display-article', compact('article'));
    }
}
?>