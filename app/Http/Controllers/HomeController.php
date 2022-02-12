<?php

namespace App\Http\Controllers;

use App\Models\information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dataUser(Request $request){
        $request->validate([
            'name' => 'required',
            'uname' => 'required',
            'fname' => 'required',
            'mname' => 'required',
            'pnumber' => 'required',
            'address' => 'required|max:255'
        ],[
            'name.required' => 'Please enter your name',
            'uname.required' => 'Please enter your user name',
            'fname.required' => 'Please enter your father name',
            'mname.required' => 'Please enter your mother name',
            'pnumber.required' => 'Please enter your phone number',
            'address.required' => 'Please enter your address'
        ]);

        $insert = new information();

        $insert->name = $request->name;
        $insert->uname = $request->uname;
        $insert->fname = $request->fname;
        $insert->mname = $request->mname;
        $insert->pnumber = $request->pnumber;
        $insert->address = $request->address;
        $insert->save();

        return back()->with('success','Data insert successfull!');
    }

    public function all_datas(){
        $datas = information::all();
        return view('datas', compact('datas'));
    }
}
