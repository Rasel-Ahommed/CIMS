<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactDtlsController extends Controller
{
    public function show($id){
        // $data = company::find($id);

        // $data = Company::join('company_contact', 'company_contact.company_id', '=', 
        //     'company.id')
        //     ->where('company.id', '=', $id) // Adding a condition for the "users" table
        //     ->select('company.company as company_name', 'company_contact.*')
        //     ->get();

        $data = Contact::where('company_id', '=', $id)->get();            
        return view('contactDtls',compact('data'));
    }
    //delete contacts
    public function distroy($id){
        Contact::destroy($id);
    }

    //edit contact
    public function edit($id){
        $data = Contact::find($id);
        $design = DB::table('designation')->get();
        $categ = DB::table('category')->get();;
        return view('updateContact', compact('data','design','categ'));
    }

    //update contact
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|max:55',
            'designation' => 'required|max:80',
            'phone' => 'required|digits_between:5,11',
            'email' => 'nullable|max:80',
            'category' => 'required'
        ]);
        
        $data = Contact::find($id);

        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['category'] = $request->category;
        
        $data->save();
        return redirect()->route('contactDtls', ['id' => $id])->with('success','Contact update successfull!');
        
    } 
}
