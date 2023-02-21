<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Residents;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\BarangayOfficials;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BarangayOfficialsController extends Controller
{
    public function index()
    {
        $officials = array("officials" => DB::table('barangayofficials')
            // ->join('residents', 'resident_id', '=', 'residents.id')
            // ->select('residents.last_name', 'residents.first_name', 'residents.middle_name', 'residents.suffix', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
            ->select('barangayofficials.barangayofficial_name', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
            ->orderBy('role', 'asc')
            ->paginate(10));
        return view('officials.officials', $officials);
    }

    public function search(Request $request)
    {
        $query = ($request->input('search'));
        if ($query != '') {
            $officials = array(
                "officials" => DB::table('barangayofficials')
                    // ->join('residents', 'resident_id', '=', 'residents.id')
                    // ->select('residents.last_name', 'residents.first_name', 'residents.middle_name', 'residents.suffix', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
                    ->select('barangayofficials.barangayofficial_name', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
                    // ->where('residents.last_name', 'like', '%' . $query . '%')
                    // ->orWhere('residents.first_name', 'like', '%' . $query . '%')
                    // ->orWhere('residents.middle_name', 'like', '%' . $query . '%')
                    // ->orWhere('residents.suffix', 'like', '%' . $query . '%')
                    ->where('barangayofficials.barangayofficial_name', 'like', '%' . $query . '%')
                    ->orWhere('barangayofficials.role', 'like', '%' . $query . '%')
                    ->orWhere('barangayofficials.resident_id', $query)
                    ->orWhere('barangayofficials.id', $query)
                    ->paginate(10)
            );
            if (count($officials) > 0) {
                // dd($officials);
                return view('officials.officials', $officials);
            }
            return redirect('/officials');
        }
        return redirect('/officials')->with('error', "Please search by Official's name, role");
    }

    public function active()
    {
        $officials = array("officials" => DB::table('barangayofficials')
            ->select('barangayofficials.barangayofficial_name', 'barangayofficials.resident_id', 'barangayofficials.id', 'barangayofficials.role', 'barangayofficials.term_start', 'barangayofficials.term_end')
            ->whereNull('term_end')
            ->orderBy('role', 'asc')
            ->paginate(10));
        return view('officials.officials', $officials);
    }

    public function create()
    {
        $data = ['id' => 1, 'fullname' => 'Barangay Official'];
        return view('officials.createofficial', ['residents' => Residents::latest()->filter(request(['search']))->paginate(50), 'data' => $data]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'resident_id' => ['required', Rule::unique('barangayofficials')],
            'barangayofficial_name' => ['required'],
            'role' => ['required'],
            'term_start' => ['required'],
            'term_end' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return redirect('/officials/create')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();
        $log = array('action' => 'created', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'barangay official profile', 'receiver_name' => $validated['barangayofficial_name']);
        BarangayOfficials::create($validated);
        Log::create($log);
        return redirect('/officials')->with('status', 'Barangay Official created successfully!');
    }

    public function edit(BarangayOfficials $official)
    {
        return view('officials.editofficial', ['official' => $official]);
    }

    public function update(Request $request, BarangayOfficials $official)
    {
        $validator = Validator::make($request->all(), [
            'resident_id' => ['required'],
            'barangayofficial_name' => ['required'],
            'role' => ['required'],
            'term_start' => ['required'],
            'term_end' => ['nullable'],
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $validated = $validator->validated();
        $log = array('action' => 'updated', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'barangay official profile', 'receiver_name' => $official->barangayofficial_name);
        $official->update($validated);
        Log::create($log);
        return redirect('/officials')->with('status', 'Official updated successfully!');
    }

    public function destroy(BarangayOfficials $official)
    {
        $log = array('action' => 'deleted', 'by_userId' => auth()->id(), 'by_userName' => auth()->user()->name, 'receiver_type' => 'barangay official profile', 'receiver_name' => $official->barangayofficial_name);
        $official->delete();
        Log::create($log);
        return back()->with('status', 'Official deleted successfully');
    }
}
