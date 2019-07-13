<?php

namespace App\Http\Controllers;

use App\User;
use App\Tran;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     
    public function listarClientes(){

        if (auth()->user()->tipo_user==0) {
            # code...
            $clientes = User::where('tipo_user',1)->get();
            return view('admin.listarClientes')
            ->with('clientes',$clientes);
        } else {
            # code...
            return redirect('home');
        }

    }

    public function transCliente(int $id){
        if (auth()->user()->tipo_user==0) {
            # code...= 
            $trans = Tran::where('user_id',$id)->get();

            return view('admin.transCliente')->with('trans',$trans);
        } else {
            return redirect('home');
            # code...
        }
        
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->tipo_user==0) {
            # code...
            redirect()->route('register');
        } else {
            # code...
            return redirect('home');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
