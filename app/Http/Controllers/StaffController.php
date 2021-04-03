<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
            if ($cond_title != '') {
            $staff = Staff::where('name', $cond_title)->get();
        } else {
          $staff = Staff::all();
        }
    

        return view('index',['staff'=>$staff,'cond_title'=>$cond_title]);
    }

    public function add()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Staff::$rules);
        $staff = new Staff;
        $form =$request->all();

        $staff->fill($form);
        $staff->save();

        return redirect('/');
    }

    public function edit(Request $request)
    {
        $staff =Staff::find($request->id);

        return view('edit',['staff_form'=>$staff]);
    }

    public function update(Request $request)
    {
        $this->validate($request,Staff::$rules);

        $staff =Staff::find($request->id);
        $form =$request->all();

        $staff->fill($form);
        $staff->save();

        return redirect('/');
    }

    public function delete(Request $request)
    {
        $staff=Staff::find($request->id);
        $staff->delete();

        return redirect('/');
    }
}
