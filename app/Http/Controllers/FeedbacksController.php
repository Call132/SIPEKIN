<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AttitudeTowardsWork;
use App\Models\Certification;
use App\Models\Employee;
use App\Models\feedbacks;
use App\Models\GeneralRating;
use App\Models\OverallRating;
use App\Models\Performance;
use App\Models\PerformanceAppraisal;
use App\Models\Probation;
use App\Models\Promotion;

class FeedbacksController extends Controller
{
    public function index()
    {
        return view('pages.feedback.index');
    }
    public function create($id)
    {
        $data = PerformanceAppraisal::where('id', $id)->first();
        $employee = Employee::where('uuid', $data->employee_uuid)->first();
        $performance = Performance::where('performance_appraisal_id', $data->id)->latest()->first();
        $attitudeTowardsWork = AttitudeTowardsWork::where('performance_appraisal_id', $data->id)->latest()->first();
        $overallRating = OverallRating::where('performance_appraisal_id', $data->id)->latest()->first();
        $generalRating = GeneralRating::where('performance_appraisal_id', $data->id)->latest()->first();
        $certification = Certification::where('performance_appraisal_id', $data->id)->latest()->first();
        $probation = Probation::where('performance_appraisal_id', $data->id)->latest()->first();
        $promotion = Promotion::where('performance_appraisal_id', $data->id)->latest()->first();

        return view('pages.feedback.create', compact('employee', 'data', 'performance', 'attitudeTowardsWork', 'overallRating', 'generalRating', 'certification', 'probation', 'promotion'));
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'performance_appraisal_id' => 'required',
                'feedback' => 'nullable',
            ]);
            $data = new feedbacks([
                'performance_appraisal_id' => $request->performance_appraisal_id,
                'feedback' => $request->feedback
            ]);
            $data->save();

            return redirect()->route('dashboard.index')->with('success', 'Feedback created successfully');
        } catch (\Throwable $th) {
            return dd($th->getMessage());
            return redirect()->back()->withErrors(['error' => $th->getMessage()]);
        }
    }
    public function show($id)
    {
        $data = PerformanceAppraisal::where('id', $id)->first();
        $employee = Employee::where('uuid', $data->employee_uuid)->first();
        $performance = Performance::where('performance_appraisal_id', $data->id)->latest()->first();
        $attitudeTowardsWork = AttitudeTowardsWork::where('performance_appraisal_id', $data->id)->latest()->first();
        $overallRating = OverallRating::where('performance_appraisal_id', $data->id)->latest()->first();
        $generalRating = GeneralRating::where('performance_appraisal_id', $data->id)->latest()->first();
        $certification = Certification::where('performance_appraisal_id', $data->id)->latest()->first();
        $probation = Probation::where('performance_appraisal_id', $data->id)->latest()->first();
        $promotion = Promotion::where('performance_appraisal_id', $data->id)->latest()->first();
        $feedbacks = feedbacks::where('performance_appraisal_id', $data->id)->latest()->first();

    //    dd($feedbacks);
        return view('pages.feedback.show', compact('employee', 'data', 'performance', 'attitudeTowardsWork', 'overallRating', 'generalRating', 'certification', 'probation', 'promotion', 'feedbacks'));
    }
}
