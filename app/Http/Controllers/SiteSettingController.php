<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteSettingController extends Controller
{
    public function index()
    {
        $siteSettings = SiteSetting::all();
        return view('admin.siteSetting.index', compact('siteSettings'));
    }

    public function store(Request $request, SiteSetting $siteSetting)
    {
        foreach (array_except($request->toArray(), ['_token', 'submit']) as $key => $value) {
            $siteSettingUpdate = $siteSetting->where('namesetting', $key)->first();
            $siteSettingUpdate->fill(['value' => $value])->save();
        }
        return redirect()->back()->with('status', trans('welcome.update_msg'));
    }
}
