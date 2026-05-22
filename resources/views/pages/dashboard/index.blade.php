@extends('layouts.app')

@section('title', 'Dashboard')

@section('parent', 'Dashboard')

@section('page', 'Overview')

@section('content')

<div class="space-y-6">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

        <div class="bg-white rounded-2xl border border-gray-200 p-6">
            <p class="text-sm text-gray-500">Total Students</p>
            <h3 class="text-3xl font-bold text-gray-800 mt-2">
                {{ $totalStudents }}
            </h3>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-6">
            <p class="text-sm text-gray-500">Male Students</p>
            <h3 class="text-3xl font-bold text-gray-800 mt-2">
                {{ $maleStudents }}
            </h3>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-6">
            <p class="text-sm text-gray-500">Female Students</p>
            <h3 class="text-3xl font-bold text-gray-800 mt-2">
                {{ $femaleStudents }}
            </h3>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-6">
            <p class="text-sm text-gray-500">Active Students</p>
            <h3 class="text-3xl font-bold text-gray-800 mt-2">
                {{ $activeStudents }}
            </h3>
        </div>

    </div>

    <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden">

        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
            <div>
                <h2 class="text-lg font-semibold text-gray-800">
                    Recent Students
                </h2>

                <p class="text-sm text-gray-500 mt-1">
                    This data comes from app/Services/Data.php
                </p>
            </div>

            <x-button :href="route('students.index')">
                View All
            </x-button>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">#</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Name</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Email</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Gender</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($recentStudents as $student)
                        <tr class="border-t border-gray-100 hover:bg-gray-50">
                            <td class="px-6 py-3 text-sm text-gray-700">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-3 text-sm font-medium text-gray-800">
                                {{ $student['name'] }}
                            </td>

                            <td class="px-6 py-3 text-sm text-gray-700">
                                {{ $student['email'] }}
                            </td>

                            <td class="px-6 py-3 text-sm text-gray-700">
                                {{ $student->gender?->name }}
                            </td>

                            <td class="px-6 py-3 text-sm text-gray-700">
                                @include('pages.students.partials.status', [
                                    'status' => $student['status']
                                ])
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

@endsection