@extends('index')

@section('content')
<div class="container">
    <h1>Edit Word</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('words.update', $word->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 10px;">
            <label for="word">Word:</label><br>
            <input type="text" name="word" id="word" value="{{ old('word', $word->word) }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="syllables">Syllables:</label><br>
            <input type="number" name="syllables" id="syllables" value="{{ old('syllables', $word->syllables) }}" required>
        </div>

        <button type="submit">Update Word</button>
    </form>

    <br>
    <a href="{{ route('words-view') }}">Back to Words List</a>
</div>
@endsection
