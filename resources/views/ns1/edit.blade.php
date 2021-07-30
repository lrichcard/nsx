@extends('layouts.main')

@section('content')
<div class="container">
@if (session('status'))
    <h6>{{ session('status') }}</h6>
@endif
    

    <meta charset="UTF-8">
    <form action="{{ url('update/'.$video->id) }}" method="POST" enctype="multipart/form-data">
        <!-- <label class="label">Titre</label> -->
      @csrf
      @method("PUT")
      <br>
      <div class="form-group mx-sm-4 mb-4">
            <input type="text" name="titre" value="{{ $video->titre }}" class="input" placeholder="Titre" minlength="3" maxlength="100" required />
        </div>
    </div>
    {{--  --}}
    
    

    <div class="field">
        <!-- <label class="label">objectif</label> -->
        <div class="form-group mx-sm-4 mb-4">
            <textarea name="objectif" class="textarea" placeholder="objectif" minlength="5" maxlength="2000" required rows="2">{{ $video->objectif }}</textarea>
        </div>
    </div>

   
    <div class="field">
        <!-- <label class="label">Commentaire</label> -->
        <div class="form-group mx-sm-4 mb-4">
            <textarea name="commentaire" class="textarea" placeholder="commentaire" minlength="5" maxlength="2000" required rows="2">{{$video->commentaire }}</textarea>
        </div>
    </div>

    <div class="form-group mx-sm-4 mb-4">
        <label for="">upload video</label>
        <input type="file" name="video_name">
        <video width="320" height="240" controls>
            <source src="{{ asset('uploads/ns1/'.$video->video) }}" type="video/mp4">
          Your browser does not support the video tag.
      </video>
    </div>
 
    <div class="field">
        <div class="form-group mx-sm-4 mb-4">
            <button type="submit" class="button is-link is-outlined">Update</button>
        </div>
    </div>

</form>
</div>
@endsection