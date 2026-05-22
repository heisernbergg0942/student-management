<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Student;
use App\Services\Data;

class DashboardController extends Controller
{
    public function index()
    {
        $maleStudents = Student::whereHas('gender', function ($query) {
            $query->where('name', 'Male');
        })->count();

        $femaleStudents = Student::whereHas('gender', function ($query) {
            $query->where('name', 'Female');
        })->count();

        $activeStudents = collect(Data::students())->where('status', 'Active')->count();

        $recentStudents = collect(Data::students())->map(function ($item) {
            $student = new Student();
            $student->id = $item['id'];
            $student->name = $item['name'];
            $student->email = $item['email'];
            $student->phone = $item['phone'];
            $student->status = $item['status'];
            
            $gender = new Gender();
            $gender->name = $item['gender'];
            $student->setRelation('gender', $gender);
            
            return $student;
        });

        return view('pages.dashboard.index', [
            'totalStudents'  => Student::count(),
            'totalGenders'   => Gender::count(),
            'maleStudents'   => $maleStudents,
            'femaleStudents' => $femaleStudents,
            'activeStudents' => $activeStudents,
            'recentStudents' => $recentStudents,
        ]);
    }
}