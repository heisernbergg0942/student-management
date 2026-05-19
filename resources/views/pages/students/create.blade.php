@extends('layouts.app')

@section('title', 'Add New Student')

@section('parent', 'Students')

@section('page', 'Add New Student')

@section('content')

<div class="max-w-4xl space-y-6">

    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                Add Student Profile
            </h1>
            <p class="text-sm text-gray-500 mt-1">
                Enter details to register a new student in the system.
            </p>
        </div>

        <x-button :href="route('students.index')" variant="secondary">
            Back to List
        </x-button>
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 p-8 shadow-sm">
        
        <form action="#" method="POST" class="space-y-6" onsubmit="event.preventDefault(); alert('Success! Student registration submitted (Simulated).'); window.location.href='{{ route('students.index') }}';">
            @csrf

            <!-- Form Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Full Name -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Full Name <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="text"
                               id="name"
                               name="name"
                               required
                               placeholder="e.g. Sok Dara"
                               class="w-full border border-gray-300 rounded-xl px-4 py-3 text-gray-800 focus:outline-hidden focus:border-secondary focus:ring-4 focus:ring-secondary/10 transition duration-200">
                    </div>
                </div>

                <!-- Email Address -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email Address <span class="text-red-500">*</span>
                    </label>
                    <input type="email"
                           id="email"
                           name="email"
                           required
                           placeholder="e.g. sok.dara@rupp.edu.kh"
                           class="w-full border border-gray-300 rounded-xl px-4 py-3 text-gray-800 focus:outline-hidden focus:border-secondary focus:ring-4 focus:ring-secondary/10 transition duration-200">
                </div>

                <!-- Phone Number -->
                <div>
                    <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">
                        Phone Number
                    </label>
                    <input type="tel"
                           id="phone"
                           name="phone"
                           placeholder="e.g. 010 123 123"
                           class="w-full border border-gray-300 rounded-xl px-4 py-3 text-gray-800 focus:outline-hidden focus:border-secondary focus:ring-4 focus:ring-secondary/10 transition duration-200">
                </div>

                <!-- Gender Selection -->
                <div>
                    <label for="gender" class="block text-sm font-semibold text-gray-700 mb-2">
                        Gender <span class="text-red-500">*</span>
                    </label>
                    <select id="gender"
                            name="gender"
                            required
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-gray-800 focus:outline-hidden focus:border-secondary focus:ring-4 focus:ring-secondary/10 transition duration-200 bg-white">
                        <option value="" disabled selected>Select Gender</option>
                        @foreach ($genders as $gender)
                            <option value="{{ $gender['name'] }}">{{ $gender['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Class -->
                <div>
                    <label for="class" class="block text-sm font-semibold text-gray-700 mb-2">
                        Class / Course <span class="text-red-500">*</span>
                    </label>
                    <select id="class"
                            name="class"
                            required
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-gray-800 focus:outline-hidden focus:border-secondary focus:ring-4 focus:ring-secondary/10 transition duration-200 bg-white">
                        <option value="" disabled selected>Select a class</option>
                        <option value="Laravel A">Laravel A</option>
                        <option value="Laravel B">Laravel B</option>
                        <option value="Laravel C">Laravel C</option>
                    </select>
                </div>

                <!-- Status -->
                <div>
                    <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">
                        Registration Status <span class="text-red-500">*</span>
                    </label>
                    <select id="status"
                            name="status"
                            required
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 text-gray-800 focus:outline-hidden focus:border-secondary focus:ring-4 focus:ring-secondary/10 transition duration-200 bg-white">
                        <option value="Active" selected>Active</option>
                        <option value="Pending">Pending</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>

            </div>

            <!-- Action Buttons -->
            <div class="flex items-center justify-end gap-4 pt-4 border-t border-gray-100">
                <a href="{{ route('students.index') }}" 
                   class="px-6 py-3 rounded-full border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition duration-200">
                    Cancel
                </a>
                
                <button type="submit" 
                        class="bg-primary hover:bg-secondary text-white px-8 py-3 rounded-full font-medium shadow-md hover:shadow-lg transition duration-200 transform hover:-translate-y-0.5">
                    Save Student
                </button>
            </div>

        </form>

    </div>

</div>

@endsection
