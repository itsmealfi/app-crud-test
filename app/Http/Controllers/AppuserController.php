<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appuser;
use Illuminate\Http\Request;

class AppuserController extends Controller
{
    public function index(){
        $appusers = Appuser::all();
        return view('appusers.index', ['appusers' => $appusers]);
    }

    public function create(){
        return view('appusers.create');
    }

    public function add(Request $request){
        $data = $request->validate([
            'userid'=>'required|uuid',
            'name'=>'required|string',
            'email'=>'required|email|unique:appusers,email',
            'age'=>'required|integer'
        ]);
    
        $newAppuser = Appuser::create($data);

        return redirect(route('appuser.index'));
    }

    public function edit(Appuser $appuser){
        return view('appusers.edit', ['appuser' => $appuser]);
    }

    public function update(Appuser $appuser, Request $request){
        $data = $request->validate([
            'userid'=>'required|uuid',
            'name'=>'required|string',
            'email'=>'required|email|unique:appusers,email,'.$appuser->id,
            'age'=>'required|integer'
        ]);

        $appuser->update($data);

        return redirect(route('appuser.index'))->with('success', 'Data Updated!');
    }

    public function delete(Appuser $appuser){
        $appuser->delete();
        return redirect(route('appuser.index'))->with('success', 'Data Deleted!');
    }

    public function search(Request $request){
        $query = $request->input('query');
        
        $appusers = Appuser::where('userid', $query)->get();

        if ($appusers->isEmpty()) {
            return view('appusers.index', ['appusers' => $appusers, 'message' => 'User ID not found']);
        }

        return view('appusers.index', ['appusers' => $appusers]);
    }

}