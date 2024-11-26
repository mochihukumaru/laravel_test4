<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\RegisterRequest;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Date;

class WeightController extends Controller
{
    public function create()
    {
        return view('auth.register2');
    }

    public function store(RegisterRequest $request)
    {
        WeightLog::create([
            'weight' => $request->weight,
        ]);
        WeightTarget::create([
            'target_weight' => $request->target_weight,
        ]);

        return redirect('/weight_logs')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
