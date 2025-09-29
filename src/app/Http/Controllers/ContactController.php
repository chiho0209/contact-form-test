<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\FormRequest;
use PHPUnit\Framework\Constraint\Count;

class ContactController extends Controller
{
  
    public function login()
  {
    return view('login');
  }

   public function admin()
  {
    return view('admin');
  }

   public function register()
  {
    return view('register');
  }

  public function confirm()
  {
    return view('confirm');
  }

    public function thanks()
    {
        return view('thanks');
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('index', ['contact' => $contacts]);
   }
  
    public function create(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect('/');
    }

    public function store(Request $request)
    {
        $form = $request->all();
        Contact::create($form);
        return redirect()->route('thanks');
    }

    public function delete(Request $request)
    {
        $contact = Contact::find($request->id);
        return view('delete', ['contact' => $contact]);
    }

    public function remove(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $contact = Contact::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $contact->fill($form)->save();
        return redirect('/');
    }
}