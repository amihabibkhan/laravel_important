public function index(Request $request)
    {
        $search_items = [];
        if ($request->name){
            $search_items[] = ['name', 'like', '%' . $request->name . '%'];
        }
        if ($request->branch_id){
            $search_items[] = ['branch_id', $request->branch_id];
        }
        if ($request->ranking_id){
            $search_items[] = ['ranking_id', $request->ranking_id];
        }
        if ($request->status_id){
            $search_items[] = ['status_id', $request->status_id];
        }
        if ($request->role_id){
            $search_items[] = ['role_id', $request->role_id];
        }
        $data['rankings'] = Ranking::all();
        $data['branches'] = Branch::all();
        $data['roles'] = Role::all();
        $data['statuses'] = Status::all();
        $data['users'] = User::where($search_items)
            ->orderBy('id', 'desc')->get();
        return view('admin.user', $data);
    }
