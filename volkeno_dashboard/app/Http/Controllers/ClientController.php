<?php

namespace App\Http\Controllers;
use App\Models\Client;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function allclient()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $client = Client::all();
        return view('client/client',['client'=>$client]);
    }

    public function addclient()
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        return view('client/addclient');
    }

    public function storeclient(Request $req)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $client = Client::create([
            'firstname' => $req->input('firstname'),
            'lastname' => $req->input('lastname'),
        ]);
        $client = Client::all();
        return redirect('/client');
    }

    public function editclient($id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $client = Client::findorFail($id);
        return view('client/editclient', ['client' => $client]);
    }

    public function updateclient(Request $req,$id)
    {
        if (auth()->guest()) {
            return redirect('/login');
        }
        $client = Client::findorFail($id);
        $client->firstname = $req->input('new_firstname');
        $client->lastname = $req->input('new_lastname');
        $client->save();
        $client = Client::all();
        return redirect('/client');
    }

    public function destroycli($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect('/client');
    }

}
