<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::all();
        return view('words.view', compact('words'));
    }

    public function create()
    {
        return view('words.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'word' => 'required|string|max:255',
            'syllables' => 'required|integer',
        ]);

        Word::create($request->all());

        return redirect()->route('words-view')->with('success', 'Word added successfully.');
    }

    public function edit(Word $word)
    {
        return view('words.edit', compact('word'));
    }

    public function update(Request $request, Word $word)
    {
        $request->validate([
            'word' => 'required|string|max:255',
            'syllables' => 'required|integer',
        ]);

        $word->update($request->all());

        return redirect()->route('words-view')->with('success', 'Word updated successfully.');
    }

    public function destroy(Word $word)
    {
        $word->delete();

        return redirect()->route('words-view')->with('success', 'Word deleted successfully.');
    }
}
