<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorsController extends Controller
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
            'subjects' => 'nullable|string',

        ]);
        if (empty($validatedData['subjects'])) {
            $validatedData['subjects'] = 'none'; // Set a default value
        }
    
        // Create a new department with the validated data
        $doctor = new Doctor;
        $doctor->username = $validatedData['username'];
        $doctor->password = $validatedData['password'];
        $doctor->subjects = $validatedData['subjects'];
        $doctor->email = $validatedData['email'];
        $doctor->save();

        $user = new User;
        $user->name = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);//must be hashed 
        $user->privilege = 'doctor';
        $user->save();
    
        // Redirect back to the index page
        return redirect('admin-create-accounts')->with('success','Doctor Created');
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
