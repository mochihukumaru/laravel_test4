<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\RegisterRequest;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Support\Facades\Date;

class WeightLogController extends Controller
{
    public function admin()
        {

            $weightLogs = WeightLog::where('user_id', auth()->id())->select('date','weight','calories','exercise_time','exercise_content')
            ->orderBy('created_at', 'desc')
            ->paginate(8);

           $targetWeight = auth()->user()->targetWeight->target_weight ?? 0;
           $latestWeight = $weightLogs->first()->weight ?? 0;
           $difference = $targetWeight - $latestWeight;


            return view('weight_log',compact('weightLogs','targetWeight', 'latestWeight','difference'));
        }

    public function goal_weight()
    {
        return view('target_weight');
    }

    public function create()
    {
        return view('weight_log_create');
    }

    public function store(Request $request)
    {
        if ($request->has('back')){
            return redirect('/weight_logs')->withInput();
    }
    WeightLog::create($request->only([
        'date',
        'weight',
        'calories',
        'exercise_time',
        'exercise_content',
    ])
    );
    return redirect('/weight_logs');
    }

    //public function goal_weight_update(Request $request)
    //{
    //    if ($request->has('back')){
    //        return redirect('/weight_logs')->withInput();
    //    }
    //    $form = WeightTarget::find($request->id);
    //    unset($form['_token']);
    //    WeightLog::find($request->id)->update($form);
    //    return redirect('/weight_logs');

    //}
}

