<?php

class ContactsController extends BaseController {
 
    
    public function delete($id)
    {   
        $user = User::find($id);
        $list = $user->list_id;
        $user->delete();

        return Redirect::to('/lista/'.$list);
    }    
 
}