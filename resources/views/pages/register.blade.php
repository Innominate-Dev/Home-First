@extends('layouts.app')

@section('content')

<section class="min-h-screen flex items-center justify-center bg-gray-50 px-6">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-sm border border-gray-100">

        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/transparent-logo.png') }}" 
                 class="h-48">
        </div>

        <h2 class="text-2xl font-semibold text-center mb-6">Create Account</h2>

        <form method="POST" action="/register" class="space-y-4">
            @csrf

            <input type="text" name="name" placeholder="Full Name" class="input-field" required>
            <input type="email" name="email" placeholder="Email" class="input-field" required>
            <input type="date" name="dob" class="input-field" required>
            <input type="password" name="password" placeholder="Password" class="input-field" required>

            <button class="btn-primary w-full">Sign Up</button>

        </form>

        <p class="text-sm text-center text-gray-500 mt-4">
            Already have an account?
            <a href="{{ url('/login/') }}" class="text-blue-600 hover:underline">Login</a>
        </p>

    </div>

</section>

@endsection