<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tdl;

class userStatus extends Controller
{
    public function index()
    {
        $tdl = tdl::all();
        return view('test.index', ['tdl' => $tdl]);
    }

    public function create()
    {
        return view('test.create');
    }

    public function newTask(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'descr' => 'nullable',
        ]);
        $data['status'] = false;

        $newTask = tdl::create($data);

        return redirect(route('tdl.index'))->with('success', 'The task have been added succesfully');
    }

    public function edit(tdl $todo)
    {
        return view('test.edit', ['todo' => $todo]);
    }

    public function update(tdl $todo, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'descr' => 'nullable',
        ]);
        $data['status'] = false;
        $todo->update($data);
        return redirect(route('tdl.index'))->with('success', 'Task update succesfully');
    }

    public function finish(tdl $todo)
    {
        return view('test.finish', ['todo' => $todo]);
    }

    public function finished(tdl $todo, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'descr' => 'nullable',
        ]);
        $data['status'] = true;
        $todo->update($data);
        return redirect(route('tdl.index'))->with('success', 'Task update succesfully');
    }

    public function destroy(tdl $todo)
    {
        $todo->delete();
        return redirect(route('tdl.index'))->with('success', 'Task delete succesfully');
    }
}
