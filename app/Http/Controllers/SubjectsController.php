<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectsController extends Controller
{

    public function index()
    {
        $subjects = Subject::all();
        return view('admin-attendance', compact('subjects'));
    }
    public function showTable()
    {
        $isClicked = false;
        return view('admin-attendance', compact('isClicked'));
    }
    
    public function create()
    {
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'subject' => 'required|string|max:255',
            'subject_code' => 'required|string',
            'department' => 'required|string',
            'prerequisite' => 'required|string',
        ]);

        // Create a new department with the validated data
        $subject = new Subject;
        $subject->subject = $validatedData['subject'];
        $subject->subject_code = $validatedData['subject_code'];
        $subject->department = $validatedData['department'];
        $subject->prerequisite = $validatedData['prerequisite'];
        $subject->save();

        // Redirect back to the index page
        return redirect('admin-subjects')->with('success', 'Subject Added');
    }

    public function show($id)
    {
        // $subjects_1 = Subjects::findOrFail($id);

        // $subjects_2 = Subjects::all(); // get all subjects
        // return view('admin-create-accounts',compact('subjects_1','subjects_2'));
        // //->with('subjects', ['subjects' => $subjects]);
        // return view('admin-attendance')->with('subjects', ['subjects' => $subjects_1]);




        // $subjects = Subject::all();
        // $columnData = DB::table('subjects')->pluck('subject');
        // return view('admin-attendance', compact('subjects', 'columnData'));
    }

    
    

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
