<!DOCTYPE html>
 <html lang="en">
  <head> 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" rel="stylesheet">
  </head> 
  <body> 
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista artykułów
        </h2>
    </x-slot>
    <div class="container"> 
      <div class="row"> 
        <div class="col-md-12"> 
          <h1 class="text-center"></h1><br> 
          </div>
      </div>
      <div class="col-md-12">
        <p>Tytuł artykułu: <?php echo $article->title; ?></p>
      </div>
      <div class="col-md-12">
        <p>Opis artykułu: </p>
        <?php echo $article->description; ?>
      </div>
      <div class="col-md-12">
        <p>Autor: <?php echo $article->author; ?></p>
      </div>
    </div>
	  </x-app-layout>
  </body> 
</html>