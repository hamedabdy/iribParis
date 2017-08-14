<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IribParis;

class ItemViewerController extends Controller
{    
    public function index() {
        return view('items/welcome');
    }

    public function create() {
        return view('items/new');
    }

    public function store(Request $request) {
        $report = 0; 
        $rush = 0;
        $monitoring = 0;
        if($request->rush_report == 1) $report = 1;
        if($request->rush_report == 2) $rush = 1;
        if($request->rush_report == 3) $monitoring = 1;
        $iribParis = IribParis::create(array('global_id' => $request->global_id, 'item_id' => $request->item_id, 'title' => $request->title, 'date' => $request->date, 'date_shamsi' => $request->date_shamsi, 'report' => $report, 'rush' => $rush, 'monitoring' => $monitoring, 'sent' => $request->sent, 'description' => $request->description));
        return "STORE DONE!" . $iribParis;
    }

    public function show($id) {
        if (isset($id) && is_numeric($id)) {
            $rows[] = IribParis::find($id);
        } else $rows = IribParis::all();
        return view('items/view', ['rows'=>$rows]);
    }

    public function edit($id) {
        echo 'EDIT';
    }

    public function update(Request $request, $id) {
        echo 'UPADATE';
    }

    public function destroy($id, Request $request) {
        $row = IribParis::findOrFail($id);
        if ($request->ajax()) {
            $row->delete( $request->all() );
            return response(['msg' => 'Row deleted', 'status' => 'success'], 200);
        }
        return response(['msg' => 'Failed deleting row', 'status' => 'failed']);
    }

    public function search() {
        echo 'SEARCH';
    }

    protected function defaultFor($key, $val) {
        if($key == 0 || $key == '' || $key == null) {
            return $val;
        } else return $key;
    }

}