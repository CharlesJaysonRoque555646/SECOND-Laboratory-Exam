@extends('index')

@section('content')
<div class="container">
    <h1>Add New Poem Word</h1>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('words.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <label for="word">Word:</label><br>
            <input type="text" name="word" id="word" value="{{ old('word') }}" required>
        </div>

        <div style="margin-bottom: 10px;">
            <label for="syllables">Syllables:</label><br>
            <input type="number" name="syllables" id="syllables" value="{{ old('syllables') }}" required>
        </div>

        <button type="submit">Add Word</button>
    </form>

    <br>
    <a href="{{ route('words-view') }}">Back to Words List</a>
</div>
@endsection
