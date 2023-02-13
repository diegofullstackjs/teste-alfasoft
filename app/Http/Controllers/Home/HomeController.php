<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
class HomeController extends Controller
{
    public function index() {
        $contacts = Contact::all();
        return view("Home.home",['contacts' => $contacts]);
    }
    public function create(Request $request) {
         $request->validate([
            'name' => 'string|required|min:5',
            'contact' => 'string|required|unique:contacts|max:9',
            'address' => 'string|required|unique:contacts',
            'email' => 'string|required|email|unique:contacts'
         ]);
            $contact = Contact::create([
                'name' => $request->input('name'),
                'contact' => $request->input('contact'),
                'address' => $request->input('address'),
                'email' => $request->input('email')
            ]);
            if($contact->id){
                $request->session()->flash('message', 'contact has been created');
                return view('Home.home');
            }
            return \redirect()->back()->with(["error" => "Ocorreu um erro"]);
    }
    public function formContact(){
        return view('form.form');
    }

    public function edit($id) {
        $contact = Contact::where('id',$id)->firstOrFail();
        return view('edit.edit',['contact' =>$contact]);
    }
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'string|required|min:5',
            'contact' => 'string|required|unique:contacts|max:9',
            'address' => 'string|required|unique:contacts',
            'email' => 'string|required|email|unique:contacts'
         ]);
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->contact = $request->input('contact');
        $contact->address = $request->input('address');
        $contact->email = $request->input('email');
        $contact->save();
        return redirect('/');
    }
    public function destroy($id){
        $contact = Contact::where('id',$id)->firstOrFail();
        $contact->delete();
        return redirect('/');
    }
}
