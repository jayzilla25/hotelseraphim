<?php

namespace App\Http\Controllers;

use App\Models\Residents;
use Auth;
use App\Models\Households;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class HouseholdsController extends Controller
{

    public function index(Request $request)
    {
        return view('households.households', ['households' => Households::latest()->filter(request(['search']))->paginate(10)]);
    }

    public function create()
    {
        return view('households.createhousehold');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'household_head' => ['required', Rule::unique('households')],
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'zone_id' => ['required'],
            'street_address' => ['required'],
            'ownership_status' => ['required'],
            'dwelling_type' => ['required'],
            'water_source' => ['required'],
            'lighting_source' => ['required'],
            'toilet_type' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/households/create')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $log = array('action' => 'created', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'household', 'receiver_name' => $validated['household_head']);
        Households::create($validated);
        Log::create($log);
        return redirect('/households')->with('status', 'Household created successfully!');
    }

    public function edit(Households $household)
    {
        // dd($household);
        return view('households.edithousehold', ['household' => $household]);
    }

    public function update(Request $request, Households $household)
    {
        $validator = Validator::make($request->all(), [
            'household_head' => ['required'],
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'zone_id' => ['required'],
            'street_address' => ['required'],
            'ownership_status' => ['required'],
            'dwelling_type' => ['required'],
            'water_source' => ['required'],
            'lighting_source' => ['required'],
            'toilet_type' => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect('/households/create')
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $log = array('action' => 'updated', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'household', 'receiver_name' => $household->household_head);
        $household->update($validated);
        Log::create($log);
        return back()->with('status', 'Household updated successfully!');
    }

    public function destroy(Households $household)
    {
        $log = array('action' => 'deleted', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'household', 'receiver_name' => $household->household_head);
        $household->delete();
        Log::create($log);
        return back()->with('status', 'Household deleted successfully');
    }

    public function createresidenthelper(Households $household)
    {
        $resident = Residents::latest()->first();
        // dd($resident);
        // dd($household);
        $data = array('id' => $household->id, 'fullname' => ($household->household_head), 'address' => $household->street_address);
        // dd($data);
        return view('residents.createaddhousehold', array('households' => Households::latest()->filter(request(['search']))->paginate(50), 'data' => $data, 'resident' => $resident));
    }
}
