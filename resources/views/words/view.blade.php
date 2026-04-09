@extends('index')

@section('content')
<div class="container">
    <h1>Poem Words</h1>

    <a href="{{ route('words.create') }}" style="margin-bottom: 20px; display: inline-block;">Add Word</a>

    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Word</th>
                <th>Syllables</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($words as $word)
                <tr>
                    <td>{{ $word->id }}</td>
                    <td>{{ $word->word }}</td>
                    <td>{{ $word->syllables }}</td>
                    <td>
                        <a href="{{ route('words.edit', $word->id) }}">Edit</a>
                        <form action="{{ route('words.destroy', $word->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No words found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
