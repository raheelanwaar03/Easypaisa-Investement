<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\ReferalLevel;
use App\Models\user\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function allLevels()
    {
        $levels = ReferalLevel::where('status',1)->get();
        return view('admin.setting.level',compact('levels'));
    }

    public function editLevel($id)
    {
        $level = ReferalLevel::find($id);
        return view('admin.setting.editlevel');
    }

    public function updateLevel(Request $request,$id)
    {
        $level = ReferalLevel::find($id);
        $level->level1 = $request->level1;
        $level->level2 = $request->level2;
        $level->level3 = $request->level3;
        $level->level4 = $request->level4;
        $level->level5 = $request->level5;
        $level->level6 = $request->level6;
        $level->level7 = $request->level7;
        $level->level8 = $request->level8;
        $level->level9 = $request->level9;
        $level->level10 = $request->level10;
        $level->save();
        return redirect()->back()->with('success','Level Changed successfully');
    }

    // Widthraw Limits

    public function widthrawLimites()
    {
        $limites = Setting::where('status',1)->get();
        return view('admin.setting.widthraw.limite',compact('limites'));
    }

    public function editWidthrawLimites($id)
    {
        $limite = Setting::find($id);
        return view('admin.setting.widthraw.editlimite',compact('limite'));
    }



}
