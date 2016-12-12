<?php

namespace App\Http\Controllers;

use App\Building;
use App\Http\Requests\BuildingRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Facades\Datatables;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::all();
        return view('admin.buildings.index', compact('buildings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.buildings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuildingRequest $request)
    {
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        dd($inputs);
        $building = Building::create($inputs);
        return redirect()->route('adminpanel.buildings.index')->with('status', trans('welcome.building_add_msg'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $building = Building::findOrFail($id);
        return view('admin.buildings.edit', compact('building'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        $building = Building::findOrFail($id)->update($request->all());
        return redirect()->route('adminpanel.buildings.index')
                    ->with('status_for_update_building', trans('welcome.building_edit_msg') . '( ' . $request->bu_name . ' )');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Building::findOrFail($id)->delete();
        return redirect()->route('adminpanel.buildings.index')->with('status', trans('welcome.building_remove_msg') );
    }

    public function anyData()
    {
        Carbon::setLocale('ar');
        $buildings = Building::select(['id', 'bu_name', 'bu_price', 'bu_type', 'created_at', 'bu_status']);
        return Datatables::of($buildings)
            ->editColumn('bu_status', function($model){
                return ($model->bu_status == 1) ? trans('welcome.active') : trans('welcome.inactive');
            })
            ->editColumn('control', function($model){
                $all = '<a href="' . url("/adminpanel/buildings/" . $model->id . "/edit") . '" style="padding: 10px">';
                $all .= '<i class="fa fa-pencil"></i></a>';
                $all .= '<a href="' . url("/adminpanel/buildings/" . $model->id . "/delete") . '"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })
            ->editColumn('bu_name', function($model) {
                return '<a href="' . url("/adminpanel/buildings/" . $model->id . "/edit") . '">' . $model->bu_name . '</a>';
            })
            ->editColumn('created_at', function($model) { return $model->created_at->diffForHumans(); })
            ->editColumn('bu_type', function($model) { return setBuildingType($model->bu_type); })
            ->editColumn('bu_status', function($model) { return setStatus($model->bu_status); })
            ->make(true);
    }
}
