<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">  
<head>

  <script src="https://cdn.tiny.cloud/1/fk1oe0ut7i6nzoq82ntt7if82h26qo1ft3trnu0popaq9cl3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<x-app-layout> 
   <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edytowanie artykułu') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <form method="post" action="{{ route('posts.store') }}" enctype="">
            @csrf
            <div class="form-group">
                <label>Nazwa artykułu</label>
                <input type="text" name="title" class="form-control" />
            </div>
			<br>
            <div class="form-group">
                <label>Opis artykułu</label>
                <textarea class="tinymce-editor" name="body"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-block">Edytuj artykuł</button>
            </div>
        </form>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
     <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
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