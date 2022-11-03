<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function index(Hosting $hostings)
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $hosting = new Hosting();
        $hosting->name=$request->name;
        $hosting->email=$request->email;
        $hosting->problem = $request->problem;
        $hosting->save();
        return redirect('/');
    }

    public function show(Hosting $hostings)
    {
        $data= Hosting::All();
        return view('welcome', ['hostings'=>$data]);
    }

    public function edit($id)
    {
        $data = Hosting::findOrFail($id);
        return view('edit', [
            'hosting' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $hostings = Hosting::find($id)->update($request->all());
        return redirect('/');
    }

    public function destroy(Hosting $hosting, $id)
    {
        $hosting = Hosting::find($id);
        $hosting->delete();
        return redirect('/');
    }
}
