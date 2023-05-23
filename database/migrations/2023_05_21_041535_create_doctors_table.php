<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('subjects')->nullable();
            $table->timestamps();
        });
    }


    // public function create()
    // {
    //     $subjects = ['IT' => 'Information Technology', 'HR' => 'Human Resources', 'Sales' => 'Sales'];
    //     return view('admin-create-accounts', compact('subjects'));
    // }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
