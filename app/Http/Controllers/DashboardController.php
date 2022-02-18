<?php

namespace app\Http\Controllers;

use App\Models\Grades;

class DashboardController
{
    public function show()
    {
        $grades = Grades::all();
        return view('Dashboard', ['grades' => $grades]);
        ;
    }
}
