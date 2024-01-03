<?php

namespace App\Http\Controllers;


use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Contracts\Service\Attribute\Required;

class ContactContoller extends Controller
{
    //view form
    public function index($id){
        $design = DB::table('designation')->get();
        $categ = DB::table('category')->get();
        return view('companyContacts', compact('id','design','categ'));
    }


    //store contact data
    public function store(Request $request, $id){
       $request->validate([
            'name' => 'required|max:55',
            'designation' => 'required|max:80',
            'phone' => 'required|digits_between:5,11',
            'email' => 'nullable|max:80',
            'category' => 'required'
        ]);
        
        $data['company_id'] = $id;
        $data['name'] = $request->name;
        $data['designation'] = $request->designation;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['category'] = $request->category;

        $contact = Contact::create($data);

        if(!$contact){
            return back()->with('error', 'Failed to add the contact. Please check your input and try again');
        }
        return back()->with('success', 'Contact added successfully');
    }

    
}
