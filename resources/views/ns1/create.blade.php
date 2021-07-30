@extends('layouts.main')

@section('content')
<div class="container">
@if (session('status'))
    <h6>{{ session('status') }}</h6>
@endif
    

    <meta charset="UTF-8">
    <form action="{{ url('/ns1/create') }}" method="POST" enctype="multipart/form-data">
        <!-- <label class="label">Titre</label> -->
      @csrf
      <br>
      <div class="form-group mx-sm-4 mb-4">
            <input type="text" name="titre" value="{{ old('titre') }}" class="input" placeholder="Titre" minlength="3" maxlength="100" required />
        </div>
    </div>
    {{--  --}}
    
    

    <div class="field">
        <!-- <label class="label">objectif</label> -->
        <div class="form-group mx-sm-4 mb-4">
            <textarea name="objectif" class="textarea" placeholder="objectif" minlength="5" maxlength="2000" required rows="2">{{ old('objectif') }}</textarea>
        </div>
    </div>

   
    <div class="field">
        <!-- <label class="label">Commentaire</label> -->
        <div class="form-group mx-sm-4 mb-4">
            <textarea name="commentaire" class="textarea" placeholder="commentaire" minlength="5" maxlength="2000" required rows="2">{{ old('commentaire') }}</textarea>
        </div>
    </div>

    <div class="form-group mx-sm-4 mb-4">
        <label for="">upload video</label>
        <input type="file" name="video_name">
    </div>
 
    <div class="field">
        <div class="form-group mx-sm-4 mb-4">
            <button type="submit" class="button is-link is-outlined">Publish</button>
        </div>
    </div>

</form>
</div>
@endsection