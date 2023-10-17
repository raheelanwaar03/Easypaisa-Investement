<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTaskController extends Controller
{
    public function add()
    {
        return view('admin.task.add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'link' => 'required',
            'description' => 'required'
        ]);

        $image = $validated['image'];
        $imageName = rand(1111111, 9999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/'), $imageName);

        $task = new AdminTaskController();
        $task->title = $validated['title'];
        $task->link = $validated['link'];
        $task->description = $validated['description'];
        $task->image = $imageName;
        $task->save();
        return redirect()->back()->with('error', 'Task added successfully');
    }
}
