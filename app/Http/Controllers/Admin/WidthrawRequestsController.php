<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User\WidthrawReq;
use Illuminate\Http\Request;

class WidthrawRequestsController extends Controller
{
    public function pending()
    {
        $widthraws = WidthrawReq::where('status','pending')->get();
        return view('admin.widthraw.pending',compact('widthraws'));
    }

    public function approved()
    {
        $widthraws = WidthrawReq::where('status','approved')->get();
        return view('admin.widthraw.approved',compact('widthraws'));
    }

    public function rejected()
    {
        $widthraws = WidthrawReq::where('status','rejected')->get();
        return view('admin.widthraw.rejected',compact('widthraws'));
    }
}
