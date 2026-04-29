@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="bg-blue-100 py-20 px-10 flex items-center justify-between">
    <div class="max-w-xl">
        <h1 class="text-5xl font-bold mb-4">HOME FIRST</h1>
        <p class="mb-6">
            Expert healthcare and wellbeing support delivered directly to your home.
        </p>

        <div class="space-x-4">
            <button class="btn-primary">Book Appointment</button>
            <button class="btn-secondary">Contact Us</button>
            <button class="border px-6 py-3 rounded">Contact Us</button>
        </div>
    </div>

    <div>
        <img src="{{ asset('images/docHero.png') }}" alt="Doctor with arms folded" class="w-[400px] h-[400px] object-cover rounded-xl shadow-lg">
    </div>
</section>

<!-- FEATURES -->
<section class="grid grid-cols-3 gap-6 px-10 py-12 bg-white">
    <div class="p-6 border rounded-lg text-center">
        <h3 class="font-bold">Book an Appointment</h3>
    </div>
    <div class="p-6 border rounded-lg text-center">
        <h3 class="font-bold">Emergency Call</h3>
    </div>
    <div class="p-6 border rounded-lg text-center">
        <h3 class="font-bold">24/7 Online Support</h3>
    </div>
</section>

<!-- ABOUT -->
<section class="flex gap-10 px-10 py-16 items-center">
    <img src="{{ asset('images/team.png') }}" alt="Team of doctors" class="w-full max-w-[500px] h-[350px] object-cover rounded-xl shadow-lg">
    
    <div>
        <h2 class="text-2xl font-bold mb-4">About Us</h2>
        <p>
            5 years of compassionate care delivered directly to your home.
        </p>
        <button class="mt-4 bg-black text-white px-5 py-2 rounded">About Us</button>
    </div>
</section>

<!-- SERVICES -->
<section class="bg-blue-100 px-10 py-16">
    <h2 class="text-2xl font-bold mb-8">Our Services</h2>

    <div class="grid grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">Physiotherapy</div>
        <div class="bg-white p-6 rounded-lg shadow">Specialist Nursing</div>
        <div class="bg-white p-6 rounded-lg shadow">Well-being Support</div>
        <div class="bg-white p-6 rounded-lg shadow">Health Assessments</div>
        <div class="bg-white p-6 rounded-lg shadow">Equipment Support</div>
        <div class="bg-white p-6 rounded-lg shadow">Home Assistance</div>
    </div>
</section>

<!-- STEPS -->
<section class="flex px-10 py-16 gap-16 items-center">

    <!-- STEPS TEXT -->
    <div class="space-y-6 max-w-md">

        <h2 class="text-3xl font-bold mb-6">Our Simple Process</h2>

        <div class="flex items-start gap-4">
            <div class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded-full">1</div>
            <p>Request a visit through our system</p>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded-full">2</div>
            <p>Meet your assigned healthcare professional</p>
        </div>

        <div class="flex items-start gap-4">
            <div class="bg-blue-600 text-white w-8 h-8 flex items-center justify-center rounded-full">3</div>
            <p>Receive care in the comfort of your home</p>
        </div>

    </div>

    <img src="{{ asset('images/docStandingWithTablet.png') }}" alt="Doctor helping patient" class="w-full max-w-[450px] h-[350px] object-cover rounded-xl shadow-lg">

</section>

<!-- CTA -->
<section class="bg-blue-100 text-center py-16">
    <h2 class="text-2xl font-bold mb-4">
        Ready to experience care that puts you first?
    </h2>

    <div class="space-x-4">
        <button class="bg-black text-white px-6 py-3 rounded">
            Request Appointment
        </button>
        <button class="border px-6 py-3 rounded">
            Login to your account
        </button>
    </div>
</section>

@endsection