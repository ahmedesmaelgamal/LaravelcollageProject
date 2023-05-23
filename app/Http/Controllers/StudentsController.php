<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentsController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string',
            'academic_number' => 'required|string',

        ]);
    
        // Create a new department with the validated data
        $student = new Student;
        $student->username = $validatedData['username'];
        $student->password = $validatedData['password'];
        $student->academic_number = $validatedData['academic_number'];
        $student->email = $validatedData['email'];
        $student->save();


        $user = new User;
        $user->name = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);//must be hashed 
        $user->privilege = 'student';
        $user->save();

    
        // Redirect back to the index page
        return redirect('admin-create-accounts')->with('success','Student Created');
    }


    public function show(string $id)
    {
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
