<?php

namespace App\Http\Controllers;

use App\Models\Studentsubject;
use Illuminate\Http\Request;

class studentSubjects extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentsubjects = Studentsubject::all();
        return view('student-register', compact('studentsubjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'subject' => 'nullable|string',

        ]);

    
        // Create a new department with the validated data
        $studentsubject = new Studentsubject;
        $studentsubject->student_name = $validatedData['student_name'];
        $studentsubject->subject = $validatedData['subject'];
        $studentsubject->save();

        // $user = new User;
        // $user->name = $validatedData['username'];
        // $user->email = $validatedData['email'];
        // $user->password = Hash::make($validatedData['password']);//must be hashed 
        // $user->privilege = 'doctor';
        // $user->save();
    
        // Redirect back to the index page
        return redirect('student-subject-register')->with('success','subject added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
