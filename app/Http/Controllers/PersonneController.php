<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PersonneController extends Controller
{
    public function index()
    {
       $personne = Personne::All();
       return view('welcome',  compact('personne'));
    }

    public function store(Request $request)
    {
        $personne = new Personne() ;
        $personne->nom = $request->input('nom') ;
        $personne->prenom = $request->input('prenom') ;
        $personne->email = $request->input('email') ;
        $personne->tel = $request->input('tel') ;
        $personne->pj = $request->input('pj') ;

        $personne->save() ;
        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content
          ];
        Mail::send('email-msj', $data, function($message) use ($data) {
            $message->to($data['email'])
            ->subject($data['subject']);
          });

          return back()->with(['message' => 'Email successfully sent!']);
        return redirect('/form/new') ;
    }

}
