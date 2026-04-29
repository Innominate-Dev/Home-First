<nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
    <img src="{{ asset('images/transparent-logo-1.png') }}" alt="Home First Logo" class="h-10 w-auto">

    <div class="space-x-6">
        <a href="{{ url('/') }}" class="hover:text-blue-600">Home</a>
        <a href="{{ url('/') }}" class="hover:text-blue-600">About</a>
        <a href="{{ url('/') }}" class="hover:text-blue-600">Services</a>
    </div>

    <div>
        <a href="{{ url('/login/') }}" class="bg-gray-800 text-white px-4 py-2 rounded">Login</a>
    </div>
</nav>