@extends('layouts.main')

@section('content')

<br>
@foreach ($videos as $video )

<h3>{{ $video->titre }}</h3>
{{-- <video src="{{ asset('uploads/ns1/'.$video->video) }}" width="400px" height="360px" alt=""> --}}
    
    <video width="320" height="240" controls>
        <source src="{{ asset('uploads/ns1/'.$video->video) }}" type="video/mp4">
      Your browser does not support the video tag.
  </video>
<a href="{{ url('edit_ns1',$video->id) }}" class="btn btn-primary btn-sm">Edit</a>
<form action="{{ url('delete/'.$video->id) }}" method="POST">
    @csrf
    @method('DELETE')
<button type="submit" class="bnt btn-danger btn-sm">Delete</button>
</form>
@endforeach
    
@endsection