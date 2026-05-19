@extends('layouts.app')

@section('title', 'Students')

@section('parent', 'Students')

@section('page', 'Student List')

@section('content')

<div class="space-y-6">

    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">
                Student List
            </h1>

            <p class="text-sm text-gray-500 mt-1">
                Practice routes, views, loops, includes, and route parameters.
            </p>
        </div>

        <x-button :href="route('students.create')">
            Add Student UI
        </x-button>
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 p-6">
        <form action="{{ route('students.index') }}"
              method="GET"
              class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Search
                </label>

                <input type="text"
                       name="search"
                       value="{{ $search }}"
                       placeholder="Search name, email, or class"
                       class="w-full border border-gray-300 rounded-lg px-4 py-3">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Gender
                </label>

                <select name="gender"
                        class="w-full border border-gray-300 rounded-lg px-4 py-3">
                    <option value="">All Gender</option>

                    @foreach ($genders as $gender)
                        <option value="{{ $gender['name'] }}"
                            @selected($selectedGender === $gender['name'])>
                            {{ $gender['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-end gap-3">
                <button type="submit"
                        class="bg-primary hover:bg-secondary text-white px-5 py-3 rounded-full transition">
                    Filter
                </button>

                <a href="{{ route('students.index') }}"
                   class="bg-gray-100 hover:bg-gray-200 text-gray-700 px-5 py-3 rounded-full transition">
                    Reset
                </a>
            </div>

        </form>

        @if ($search || $selectedGender)
            <p class="text-sm text-gray-500 mt-4">
                Filter is active.
            </p>
        @endif
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full">

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">#</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Name</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Email</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Gender</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Class</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Status</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold text-gray-600">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($students as $student)

                        @include('pages.students.partials.row', [
                            'student' => $student
                        ])

                    @empty

                        @include('pages.students.partials.empty')

                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>

@endsection