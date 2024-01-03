<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Rules\NumberLength;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // store data 
    public  function store(Request $request){
        $request->validate([
            'company' => 'required|max:55',
            'phone' => ['required',new NumberLength],
            'email' => 'email|max:80',
            'address' => 'required|max:100',
            'post' => 'max:55',
        ]);

        $data['company'] = $request-> company;
        $data['phone'] = $request-> phone;
        $data['email'] = $request-> email;
        $data['address'] = $request-> address;
        $data['post'] = $request-> post;

        $customar = company::create($data);

        if(!$customar){
            return redirect(route('customar_form'))->with('error','Customar Add failed!');
        }
        return redirect(route('customar_form'))->with('success','Customar Add successfull!');
    }

    // show data 
    public function show(){
        $myData = company::all();
        return view('dashboard', compact('myData'));
    }


    //delete data 
    public function destroy($id){
        company::destroy($id);
        return back();
    }

    //edit data
    public function edit($id){
        $data = company::find($id);
        return view('update', compact('data'));
    }

    //update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => 'required|max:55',
            'phone' => 'required|digits_between:5,11',
            'email' => 'email|max:80',
            'address' => 'required|max:100',
            'post' => 'max:55',
        ]);

        $data = company::find($id);

        $data['company'] = $request->company;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['post'] = $request->post;

        $data->save();
        return redirect()->route('dashboard')->with('success','Company update successfull!');
    }

}
