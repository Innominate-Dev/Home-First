<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ucfirst(Auth::user()->role) }} {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- This is the "Traffic Controller" for your views --}}
            @if(Auth::user()->role === 'doctor')
                @include('dashboards.partials.doctor-view')
            @elseif(Auth::user()->role === 'admin')
                @include('dashboards.partials.admin-view')
            @else
                @include('dashboards.partials.patient-view')
            @endif
        </div>
    </div>
</x-app-layout>