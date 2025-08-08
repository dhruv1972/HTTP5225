<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index()
    {
        try {
            $professors = Professor::all();
            return view('professors.index', compact('professors'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error loading professors: ' . $e->getMessage());
        }
    }
}
