public function index(){
        $householdHeads = DB::table('residents')
            ->select('household_id', 'last_name', 'first_name', 'middle_name', 'suffix')
            ->where('relation_to_head', 'head')
            ->orderBy('household_id', 'asc');

        $households = array("households" => DB::table('households')
            ->joinSub($householdHeads, 'householdHeads', function ($join) {
                $join->on('households.id', '=', 'householdHeads.household_id');
            })->orderBy('updated_at', 'desc')->paginate(10));
        return view('households.households', $households);
    }
    public function search(Request $request){
        $query = ($request->input('search'));
        if ($query != '') {
            $householdHeads = DB::table('residents')
            ->select('household_id', 'last_name', 'first_name', 'middle_name', 'suffix')
            ->where('relation_to_head', 'head')
            ->orderBy('household_id', 'asc');

            $households = array(
                "households" => DB::table('households')
                    ->joinSub($householdHeads, 'householdHeads', function ($join) {
                        $join->on('households.id', '=', 'householdHeads.household_id');
                    })
                    ->where('id', 'like', '%' . $query . '%')
                    ->orWhere('last_name', 'like', '%' . $query . '%')
                    ->orWhere('first_name', 'like', '%' . $query . '%')
                    ->orWhere('middle_name', 'like', '%' . $query . '%')
                    ->orWhere('suffix', 'like', '%' . $query . '%')
                    ->orWhere('street_address', 'like', '%' . $query . '%')
                    ->paginate(10)
            );
        
            if(count($households)>0){
                return view('households.households', $households);
            }
            return redirect('/households');
        }
        return redirect ('/households')->with('error', "Please search by Household's name, role");
    }