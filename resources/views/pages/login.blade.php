@extends('layouts.app')

@section('content')

<section class="min-h-screen flex items-center justify-center bg-gray-50 px-6">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-sm border border-gray-100">

        <!-- LOGO -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/transparent-logo.png') }}" 
                 class="h-48">
        </div>

        <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>

        <!-- FORM -->
        <form method="POST" action="/login" class="space-y-4">
            @csrf

            <!-- EMAIL -->
            <div>
                <label class="block text-sm mb-1">Email</label>
                <input type="email" name="email" required
                       class="input-field">
            </div>

            <!-- PASSWORD -->
            <div>
                <label class="block text-sm mb-1">Password</label>
                <input type="password" name="password" required
                       class="input-field">
            </div>

            <!-- BUTTON -->
            <button type="submit" class="btn-primary w-full">
                Login
            </button>

        </form>

        <!-- LINK -->
        <p class="text-sm text-center text-gray-500 mt-4">
            Don’t have an account? 
            <a href="{{url('/register/')}}" class="text-blue-600 hover:underline">Sign up</a>
        </p>

    </div>

</section>

@endsection