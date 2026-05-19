@extends('layouts.app')

@section('title', 'Student Detail')

@section('parent', 'Students')

@section('page', 'Student Detail')

@section('content')

<div class="max-w-4xl space-y-6">

    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                {{ $student['name'] }}
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Student ID: {{ $student['id'] }}
            </p>
        </div>

        <x-button :href="route('students.index')" variant="secondary">
            Back
        </x-button>
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 p-6">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <p class="text-sm text-gray-500">Full Name</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student['name'] }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Email</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student['email'] }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Phone</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student['phone'] }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Gender</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student['gender'] }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Class</p>
                <p class="font-semibold text-gray-800 mt-1">
                    {{ $student['class'] }}
                </p>
            </div>

            <div>
                <p class="text-sm text-gray-500">Status</p>
                <div class="mt-2">
                    @include('pages.students.partials.status', [
                        'status' => $student['status']
                    ])
                </div>
            </div>

        </div>

    </div>

</div>

@endsection