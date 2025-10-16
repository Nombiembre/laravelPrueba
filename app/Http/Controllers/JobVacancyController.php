<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\JobVacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobVacancy::with('company')->get();
        
        return view('vacantes.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all(); 
         return view('vacantes.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JobVacancy $jobVacancy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobVacancy $jobVacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobVacancy $jobVacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobVacancy $jobVacancy)
    {
        //
    }
}
