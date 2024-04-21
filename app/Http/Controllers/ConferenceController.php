<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('index', compact('conferences'));
    }

    public function show(Conference $conference)
    {
        return view('show', compact('conference'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Conference::create($request->all());
        return redirect()->route('conference.index');
    }

    public function edit(Conference $conference)
    {
        return view('edit', compact('conference'));
    }

    public function update(Request $request, Conference $conference)
    {
        $conference->update($request->all());
        return redirect()->route('conference.index');
    }

    public function destroy(Conference $conference)
    {
        $conference->delete();
        return redirect()->route('conference.index');
    }
}
