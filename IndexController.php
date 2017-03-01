<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;
class IndexController extends Controller
{
  public function getform(){
    return view('insert');
  }
  public function index(){
    $contacts = Contact::all();
    return view('index',['contacts'=>$contacts]);
  }
  public function show($id){
    $record = Contact::find($id);
    return view('change',['record'=>$record]);
  }

  public function change($id, Request $request){
    $this->validate($request, [
      'name'=>'required|max:255',
      'surname'=>'required|max:255',
      'phonenumber'=>'required|max:255'

  ]);
  $data =["name"=>$request->input('name'), "surname"=>$request->input('surname'), "phonenumber"=> $request->input('phonenumber')];
  $contact= \App\Contact::find($id);
  $contact->fill($data);
  $contact->save();
  //  return view('test',['request'=>$request]);
  return redirect('/');
  }


  public function insert (Request $request){
    $this->validate($request, [
      'name'=>'required|max:255',
      'surname'=>'required|max:255',
      'phonenumber'=>'required|max:255'

  ]);
  $data =["name"=>$request->input('name'), "surname"=>$request->input('surname'), "phonenumber"=> $request->input('phonenumber')];
  $contact= new Contact;
  $contact->fill($data);
  $contact->save();
  return redirect('/');
  }
}
