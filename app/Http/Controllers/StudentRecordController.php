<?php

namespace App\Http\Controllers;

use App\Models\StudentRequirement;
use Illuminate\Http\Request;

class StudentRecordController extends Controller
{
    public function index()
    {
        $requirements = StudentRequirement::all();
        return response()->json($requirements);
    }
}
