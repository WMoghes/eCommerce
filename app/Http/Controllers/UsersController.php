<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
        $inputs = $request->all();

        $inputs['password'] = bcrypt($request->password);
        $user = User::create($inputs);
        return redirect()->route('adminpanel.users.index');
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
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
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
        if ($request->password == ''){
            $inputs = $request->except(['password']);
        } else {
            $inputs = $request->all();
            $inputs['password'] = bcrypt($request->password);
        }
        $user = User::findOrFail($id);
        $user->update($inputs);
        return redirect()->route('adminpanel.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id != 1){
            $user = User::findOrFail($id)->delete();
            return redirect()->route('adminpanel.users.index')->with('info', 'Done');
        }
    }

    public function anyData()
    {
        Carbon::setLocale('ar');
        $users = User::select(['id', 'name', 'email', 'admin', 'created_at', 'updated_at']);
        return Datatables::of($users)
            ->editColumn('admin', function($model){
                return ($model->admin == 1) ? trans('welcome.admin') : trans('welcome.user');
            })
            ->editColumn('control', function($model){
                $all = '<a href="' . url("/adminpanel/users/" . $model->id . "/edit") . '" style="padding: 10px">';
                $all .= '<i class="fa fa-pencil"></i></a>';
                if($model->id != 1){
                    $all .= '<a href="' . url("/adminpanel/users/" . $model->id . "/delete") . '"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->editColumn('name', function($model) {
                return '<a href="' . url("/adminpanel/users/" . $model->id . "/edit") . '">' . $model->name . '</a>';
            })
            ->editColumn('created_at', function($model) { return $model->created_at->diffForHumans(); })
            ->editColumn('updated_at', function($model) { return $model->updated_at->diffForHumans(); })
            ->make(true);
    }
}
