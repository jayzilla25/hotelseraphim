<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Log;
use App\Models\User;
use App\Models\Residents;
use App\Models\Households;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ResidentsController extends Controller
{
    public function index(Request $request)
    {
        return view('residents.residents', ['residents' => Residents::sortable(['updated_at' => 'desc'])->filter(request(['search']))->paginate(10)]);
    }

    public function seniors()
    {
        $seniorAge = Carbon::today()->subYears(65)->startOfDay();
        return view('residents.residents', ['residents' => Residents::where('b_date', '<=', $seniorAge)->paginate(10)]);
    }

    public function minors()
    {
        $minorAge = Carbon::today()->subYears(18)->startOfDay();
        return view('residents.residents', ['residents' => Residents::where('b_date', '>', $minorAge)->paginate(10)]);
    }

    public function labor()
    {
        $maxAge = 64;
        $minAge = 15;
        $minDate = Carbon::today()->subYears($maxAge);
        $maxDate = Carbon::today()->subYears($minAge)->endOfDay();
        return view('residents.residents', ['residents' => Residents::whereBetween('b_date', [$minDate, $maxDate])->paginate(10)]);
    }

    public function unemployed()
    {
        $maxAge = 64;
        $minAge = 15;
        $minDate = Carbon::today()->subYears($maxAge);
        $maxDate = Carbon::today()->subYears($minAge)->endOfDay();
        return view('residents.residents', ['residents' => Residents::whereBetween('b_date', [$minDate, $maxDate])->where('employment_status', 'Unemployed')->paginate(10)]);
    }

    public function women()
    {
        $minorAge = Carbon::today()->subYears(18)->startOfDay();
        return view('residents.residents', ['residents' => Residents::where('b_date', '<', $minorAge)->where('gender', 'Female')->paginate(10)]);
    }

    public function farmers()
    {
        return view('residents.residents', ['residents' => Residents::where('occupation', 'Farmer')->paginate(10)]);
    }

    public function ofw()
    {
        return view('residents.residents', ['residents' => Residents::where('occupation', 'OFW')->paginate(10)]);
    }

    public function businessman()
    {
        return view('residents.residents', ['residents' => Residents::where('occupation', 'Business Owner')->paginate(10)]);
    }

    public function philhealth()
    {
        return view('residents.residents', ['residents' => Residents::where('has_philhealth', true)->paginate(10)]);
    }

    public function create()
    {
        return view('residents.createresident');
    }

    public function store(Request $request)
    {
        // dd($request->file('avatar'));
        $validator = Validator::make($request->all(), [
            'last_name' => ['required'],
            'first_name' => ['required'],
            'middle_name' => ['required'],
            'suffix' => ['nullable'],
            'b_date' => ['required'],
            'b_place' => ['required'],
            'gender' => ['required'],
            'religion' => ['required'],
            'nationality' => ['required'],
            'citizenship' => ['required'],
            'civil_status' => ['required'],
            'blood_type' => ['required'],
            'has_philhealth' => ['required'],
            'occupation' => ['required'],
            'employment_status' => ['required'],
            'monthly_income' => ['required'],
            'educational_attainment' => ['required'],
            'mailing_address' => ['required'],
            'contact_email' => ['required', 'email'],
            'contact_phone' => ['required', 'min:7'],
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
        $id = DB::select("SHOW TABLE STATUS LIKE 'residents'");
        $next_id = $id[0]->Auto_increment;
        // dd($next_id);
        $log = array('action' => 'created', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'household', 'receiver_name' => $validated['last_name']);
        Residents::create($validated);
        Log::create($log);

        return redirect('/residents/' . $next_id . '/addhousehold')->with('status', 'Resident Information saved successfully!');
    }

    public function addhousehold(Residents $resident)
    {
        // dd($resident);
        $data = ['id' => 1, 'fullname' => 'Household Head'];
        return view('residents.createaddhousehold', ['resident' => $resident, 'households' => Households::latest()->filter(request(['search']))->paginate(50), 'data' => $data]);
    }

    public function storehousehold(Request $request, Residents $resident)
    {
        // dd($resident);

        $validator = Validator::make($request->all(), [
            'household_id' => ['required'],
            'relation_to_head' => ['required'],
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $resident->update($validated);
        return redirect('/residents/' . $resident->id . '/adduser')->with('status', 'Resident Successfully Created');
    }

    public function adduser(Residents $resident)
    {
        // dd($resident);
        $data = ['id' => 1, 'fullname' => 'Username'];
        return view('residents.createadduser', ['resident' => $resident, 'users' => User::latest()->filter(request(['search']))->paginate(50), 'data' => $data]);
    }

    public function storeuser(Request $request, Residents $resident)
    {
        // dd($resident);

        $validator = Validator::make($request->all(), [
            'user_id' => ['required'],
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $resident->update($validated);
        return redirect('/residents')->with('status', 'User info Successfully Added');
    }

    public function edit(Residents $resident)
    {
        return view('residents.editresident', ['resident' => $resident]);
    }

    public function update(Request $request, Residents $resident)
    {
        // dd($request->file('avatar'));
        $validator = Validator::make($request->all(), [
            'last_name' => ['required'],
            'first_name' => ['required'],
            'middle_name' => ['required'],
            'suffix' => ['nullable'],
            'b_date' => ['required'],
            'b_place' => ['required'],
            'gender' => ['required'],
            'religion' => ['required'],
            'nationality' => ['required'],
            'citizenship' => ['required'],
            'civil_status' => ['required'],
            'blood_type' => ['required'],
            'has_philhealth' => ['required'],
            'occupation' => ['required'],
            'employment_status' => ['required'],
            'monthly_income' => ['required'],
            'educational_attainment' => ['required'],
            'mailing_address' => ['required'],
            'contact_email' => ['required', 'email'],
            'contact_phone' => ['required', 'min:7'],
            'household_id' => ['required'],
            'relation_to_head' => ['required'],
            'user_id' => ['nullable']
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        if ($request->hasFile('avatar')) {
            $validated['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }
        $log = array('action' => 'updated', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'household', 'receiver_name' => $resident->last_name);
        $resident->update($validated);
        Log::create($log);

        return redirect('/residents')->with('status', 'Resident Information updated successfully!');
    }

    public function destroy(Residents $resident)
    {
        $log = array('action' => 'deleted', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'user profile', 'receiver_name' => $resident->last_name);
        // dd($log);
        $resident->delete();
        Log::create($log);
        return back()->with('status', 'User deleted successfully');
    }

    public function createhelper(Residents $resident)
    {

        // dd($resident);
        $data = array('id' => $resident->id, 'fullname' => ($resident->last_name . ', ' . $resident->first_name));
        return view('officials.createofficial', array('residents' => Residents::latest()->filter(request(['search']))->paginate(50), 'data' => $data));
    }
}
