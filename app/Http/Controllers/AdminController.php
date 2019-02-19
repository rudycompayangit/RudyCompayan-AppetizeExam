<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassersRequest;
use App\Models\Passers;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Show the Passers Lists.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function passers(Request $request)
    {
        if(!empty($request->filter))
        {
            $passers = Passers::where(function($query) use($request) {
                    $query->where('name', 'like', '%'.$request->filter.'%')
                        ->orWhere('campus_eligibility', 'like', '%'.$request->filter.'%')
                        ->orWhere('school', 'like', '%'.$request->filter.'%')
                        ->orWhere('division', 'like', '%'.$request->filter.'%');
                })
                ->where('name', '<>', '')
                ->orderBy('id', 'desc')
                ->paginate(50);
        }
        else
        {
            $passers = Passers::where('name', '<>', '')
                ->orderBy('id', 'desc')
                ->paginate(50);
        }
        return view('passers', compact('passers'));
    }

    /**
     * Add new Passers.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add_passers()
    {
        return view('add-passers');
    }
    

    /**
     * Save new Passers
     *
     * @param PassersRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function post_add_passers(PassersRequest $request)
    {
        Passers::create([
            'name'      => $request->name,
            'campus_eligibility'    => $request->campus_eligibility,
            'school' => $request->school,
            'division' => $request->division
            ]);

        return redirect(route('passers_list'));
    }

    /**
     * Show the Passers Lists.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function passers_by_school()
    {
        $passers = Passers::where('name', '<>', '')
            ->orderBy('id', 'desc')
            ->select(['school',DB::raw('count(id) as passers_count')])
            ->groupBy('school')
            ->get('passers_count', 'school');
        return view('passers_by_school', compact('passers'));
    }

}
