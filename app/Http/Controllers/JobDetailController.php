<?php

namespace App\Http\Controllers;

use App\Models\JobDetail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobsRequest;
use App\Http\Requests\UpdateJobsRequest;

class JobDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JobDetail $jobDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobDetail $jobDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobsRequest $request, JobDetail $jobDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobDetail $jobDetail)
    {
        //
    }
}
