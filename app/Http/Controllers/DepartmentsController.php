<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{

    public function index()
    {
        $departments = Department::all();
        return view('admin-department', compact('departments'));

    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string',
        ]);
    
        // Create a new department with the validated data
        $department = new Department;
        $department->department = $validatedData['name'];
        $department->department_code = $validatedData['code'];
        $department->save();
    
        // Redirect back to the index page
        return redirect('admin-department')->with('success','Department Created');
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
