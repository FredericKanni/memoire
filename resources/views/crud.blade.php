{{-- la page va herite du html et etc  layout  --}}
@extends('layout')



{{-- le contenu sera placer ds la section content et sera appeler sur le layout  la ou on a mis un yield --}}
@section('content')
  <h1>CRUD</h1>
  <hr>
  <h3>media</h3>
  <p>creer un media</p>
  <form>
    <div class="form">
    
        <input type="text" class="form-control" placeholder="nom du media">
   
      
        <button type="submit" class="btn btn-primary w-100">creer</button>
      
    </div>
  </form>
  <hr>
@endsection 
