<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected  $request;
    public $rules =[
    'name' => 'required',
    'phone' => 'required',
    'email' => 'required'
   ];

    public function __construct (Resquest $request)
    {
        $this-> request = $request;
    }

    public function index() // rota index (todos)
    {
        sleep(2);

        $records = Register::get();

        return response()->json($records);
    }

    public function show($id) //rota show com id
    {
        sleep(2);

        $record = Register::find($id);

        return response->json($record);
    }

    public function store () // rota store sem id (todos)
    {
        $validation = \Validator::make($this->request->all(), $this->rules);

        if($validation->fails()){
            return response()->json([
                'message' => 'ERRO',
                'errors'=> $validation->messages()
                ], 400);
        }

        $register = new Register();

        $register->fill($this->request->all());

        $register->save();

        return response()->json($register);
    }

    public function update($id)  // rota update com id (unico)
    {
        $register = Register::find($id);

        $register =  fill($this->request->all());

        $register = save();

        return response()->json($register);
    }

    public function destroy($id) //rota del com id (unico)
    {
        return Register::destroy($id);
    }
}
