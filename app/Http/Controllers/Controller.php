<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function postContato() {
        $rules = array( 
            'nome' => 'required', 
            'email' => 'required|email' , 
            'telefone' => 'required',  
            'assunto' => 'required' , 
            'mensagem' => 'required' );
        $validation = Validator::make(Input::all(), $rules);
        
        $data = array();
         $data['nome'] = Input::get("nome");
         $data['email'] = Input::get("email");
         $data['telefone'] = Input::get("telefone");
         $data['assunto'] = Input::get("assunto");
         $data['mensagem'] = Input::get("mensagem");

        if($validation->passes()) {
         Mail::send('emails.contato', $data, function($message) {
         $message->from(Input::get('email'), Input::get('nome'));
         $message->to('aleraymann@gmail.com') ->subject('Contato Bill Jr.');
         });
        return Redirect::to('contato') ->with('message', 'Mensagem enviada com sucesso!');
         }
        return Redirect::to('contato') 
         ->withInput() 
         ->withErrors($validation) 
         ->with('message', 'Erro! Preencha todos os campos corretamente.');
        }
}
