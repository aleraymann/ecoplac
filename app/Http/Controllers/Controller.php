<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function postContato(Request $request) {

        $data = array();
         $data['nome'] = $request->nome;
         $data['email'] = $request->email;
         $data['telefone'] = $request->telefone;
         $data['assunto'] = $request->assunto;
         $data['mensagem'] = $request->mensagem;
            //dd($data); 
        
         Mail::send('emails.contato', $data, function($message) {
         $message->from( $_POST['email'], $_POST['nome']);
         $message->replyTo($_POST['email'], $_POST['nome']);
         //$message->to('aleraymann@gmail.com') ->subject($_POST['assunto'] . ' - Ecoplac');
         $message->to('comercial@compensadosecoplac.com.br') ->subject($_POST['assunto'] . ' - Ecoplac');
         });
        return redirect("/fale-conosco")->with('success', 'Email enviado com Sucesso');
         }
        
      
}
