<?php

namespace App\Http\Controllers;


use App\Clients;
use Request;
use Symfony\Component\HttpKernel\Client;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Clients::paginate(10);
        return view('clients.index')->with('clients', $clients);
    }

    public function details($id)
    {
        $client = Clients::find($id);
        return view('clients.details')->with('client', $client);
    }

    public function saveEdit(){
        $id = Request::input('id');

        $client = Clients::find($id);
        $client->update(Request::all());
        return "";
    }
}
