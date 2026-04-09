@extends('index')

@section('content')
<div class="container">
    <h1>Delete Word</h1>

    <p>Are you sure you want to delete the word: <strong>{{ $word->word }}</strong>?</p>

    <form action="{{ route('words.destroy', $word->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" style="color: white; background-color: red;">Yes, Delete</button>
    </form>

    <br>
    <a href="{{ route('words-view') }}">Cancel</a>
</div>
@endsection
