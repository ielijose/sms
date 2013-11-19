<?php

class MessagesController extends BaseController {
 
    
    public function send($messages)
    {   
        var_dump($messages);
    }   

    public function send_message($id){    
        $inputs = Input::all();

        $reglas = array('message' => 'required');
        $mensajes = array('message' => 'El mensaje es obligatorio.');
        $validar = Validator::make($inputs, $reglas, $mensajes);

        if($validar->fails()){
            return Redirect::back()->withErrors($mensajes);
        }else{
            $messages = array();

            $list = DB::table('lists')->where('id', '=', $id )->get()[0];
            $contacts = DB::table('contacts')->where('list_id', '=', $id )->get();

            foreach($contacts as $contact){
                $sms = new Sms($contact->phone, $inputs['message']);
                $sms->send();  
                $sms->contact = $contact;
                array_push($messages, $sms);              
            }

            return View::make('messages-sended', array('messages' => $messages));
        }        
    }
    
    public function get_list($id)
    {      
        $list = DB::table('lists')->where('id', '=', $id )->get()[0];
        $contacts = DB::table('contacts')->where('list_id', '=', $id )->get();
        if(!$contacts){
            return Redirect::to('/listas')->withErrors(array("error" => "Lista Vacia"));
        }
        return View::make('messages', array('list' => $list, 'contacts' => $contacts));
    }
 
}