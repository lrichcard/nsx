@extends('layouts.main')

@section('content')
<div class="container">


@if (session('status'))
    <h6>{{ session('status') }}</h6>
@endif
    
<a href="{{ url('ns2') }}">Back</a>


    <form action="{{ url('/ns2/create') }}" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="lien" value="{{ old('titre') }}" class="input" placeholder="lien" minlength="3" maxlength="100" required />
        </div>
    </div>

    <div class="field">
        <!-- <label class="label">objectif</label> -->
        <div class="form-group mx-sm-4 mb-4">
            <textarea name="objectif" class="textarea" placeholder="objectif" minlength="5" maxlength="2000" required rows="2">{{ old('objectif') }}</textarea>
        </div>
    </div>

 

   
    <div class="field">
        <!-- <label class="label">Commentaire</label> -->
        <div class="form-group mx-sm-4 mb-4">
            <textarea name="commentaire" class="textarea" placeholder="commentaire" minlength="5" maxlength="2000" rows="2">{{ old('commentaire') }}</textarea>
        </div>
    </div>

 
    <div class="field">
        <div class="form-group mx-sm-4 mb-4">
            <button type="submit" class="button is-link is-outlined">Publish</button>
        </div>
    </div>

</form>
</div>
@endsection