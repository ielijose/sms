<?php

class ContactsController extends BaseController {
 
    
    public function delete($id)
    {   
        $contact = Contact::find($id);
        $list = $contact->list_id;
        $contact->delete();

        return Redirect::to('/lista/'.$list);
    }    

    public function post_add($id){
        $inputs = Input::all();

        $reglas = array('name' => 'required', 'phone' => 'required');
        $mensajes = array('name' => 'El nombre del contacto es obligatorio.', 'phone' => 'El numero del contacto es obligatorio.');
        $validar = Validator::make($inputs, $reglas, $mensajes);

        if($validar->fails()){
            return Redirect::back()->withErrors($mensajes);
        }else{
            $contact = new Contact;
            $contact->name = Input::get('name');
            $contact->phone = Input::get('phone');
            $contact->list_id = $id;
            $contact->save();

            return Redirect::to('/lista/'.$id);
        }    
    }

    public function get_edit($id){
        $contact = Contact::find($id);
        return View::make('contact.edit', array('contact'=>$contact));
    }

    public function put_edit($id){
        $inputs = Input::all();

        $reglas = array('name' => 'required', 'phone' => 'required');
        $mensajes = array('name' => 'El nombre del contacto es obligatorio.', 'phone' => 'El numero del contacto es obligatorio.');
        $validar = Validator::make($inputs, $reglas, $mensajes);

        if($validar->fails()){
            return Redirect::back()->withErrors($mensajes);
        }else{
            $contact = Contact::find($id);
            $contact->name = Input::get('name');
            $contact->phone = Input::get('phone');
            $contact->save();

            return Redirect::to('/lista/'.$contact->list_id);
        }    
    }

    public function get_json($id){
        $contact = Contact::find($id);
        return Response::json($contact);
    }


 
}