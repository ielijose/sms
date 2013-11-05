<?php

class ListsController extends BaseController {
 
    
    public function index()
    {   
        $lists = DB::table('lists')->where('user_id', '=', Auth::user()->id )->get();
        return View::make('lists', array('lists' => $lists));
    }   

    public function post_list(){    
        $inputs = Input::all();

        $reglas = array('name' => 'required');
        $mensajes = array('name' => 'El nombre de la lista es obligatorio.');
        $validar = Validator::make($inputs, $reglas, $mensajes);

        if($validar->fails()){
            return Redirect::back()->withErrors($mensajes);
        }else{
            $list = new Lista;
            $list->name = Input::get('name');
            $list->user_id = Auth::user()->id;
            $list->save();

            return Redirect::to('/listas');
        }        
    }
    
    public function get_list($id)
    {      
        $list = DB::table('lists')->where('id', '=', $id )->get()[0];
        $contacts = DB::table('contacts')->where('list_id', '=', $id )->get();
        return View::make('list', array('list' => $list, 'contacts' => $contacts));
    }
 
}