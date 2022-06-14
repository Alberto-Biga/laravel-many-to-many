@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Inserire il titolo del Post">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select name="category_id" id="category">
                <option value="">Nessuna Categoria</option>
                @foreach ($categories as $category)
                <option value=" {{$category->id}} "> {{$category->label}} </option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="title">Contenuto del Post</label>
            <textarea name="content" id="content" cols="30" rows="10"
                placeholder="Inserisci il contenuto del Post"></textarea>
        </div>
        {{-- <div class="form-group">
            <label for="title">Immagine del Post</label>
            <input name="image" type="url" class="form-control" id="image" placeholder="Inserire Url dell'immagine">
        </div> --}}

        <div class="form-group">
            <label for="title">Immagine del Post</label>
            <input name="image" type="file" class="form-control-file" id="image" placeholder="Url immagine">
        </div>

        <hr>
        <h5>
            Seleziona Tags:
        </h5>

        @foreach( $tags as $tag)
            <div class="form-check form-check-inline">
                <input 
                    class="form-check-input" 
                    type="checkbox" 
                    id="tag-{{$tag->id}}" 
                    value=" {{$tag->id}} " 
                    name="tags[]"
                    @if ( in_array($tag->id, old('tags', [])) ) checked @endif
                >

                <label class="form-check-label" for="tag-{{$tag->id}}">{{$tag->label}}</label>
            </div>
        @endforeach



        <div class="form-group">
            <button type="submit" class="btn btn-success">Crea</button>
        </div>
    </form>
</div>
@endsection
