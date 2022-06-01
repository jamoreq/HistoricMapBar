<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.tiny.cloud/1/fk1oe0ut7i6nzoq82ntt7if82h26qo1ft3trnu0popaq9cl3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>    
</head>
<body>
<x-app-layout> 
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publikowanie artykułu') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <form method="post" action="{{ route('store.article') }}" enctype="">
            @csrf
            <div class="form-group">
                <label>Tytuł artykułu</label>
                <input type="text" name="title" class="form-control" />
            </div>
			<br>
            <div class="form-group">
                <label>Treść artykułu</label>
                 <textarea name="description" rows="5" cols="40" class="form-control tinymce-editor"></textarea>
				 <br>
			<div class="form-group">
                <label>Autor artykułu</label>
                 <input type="text" name="author" class="form-control"/>
                    </div>   	 
				<br>	
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-block">Opublikuj artykuł</button>
            </div>
        </form>
    </div>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
   <script>
    tinymce.init({
      selector: 'textarea',
	  language: 'pl',
      plugins: 'image autolink lists media table',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
  </x-app-layout>
  <br><br>
</body>
</html>