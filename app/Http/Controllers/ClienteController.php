<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //BASICAMENTE TODAS AS FUNÇÕES DEVEM LEVAR A UMA VIEW
     
    public function index()
    {
        //Retorna todos os clientes com paginaçao
        return response()->json([
            'status' => [
                'code' => 200,
                'clientes' => Cliente::paginate(10)
            ]
        ]);
        //deve-se retornar para a view, sempre retorna-se da seguinte forma
        /* return view('clientes.index', [
            //aqui vão os elementos para serem exibidos/tratados na view (front)
            'clientes' => Cliente::paginate(10)
        ]); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Aqui deve-se chamar view com o form de criação
        return view('clientes.create', [
            'titulo_pagina' => 'Adicionar Cliente'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($cliente = Cliente::create([
                'nome' => $request->nome,
                'sobrenome' => $request->sobrenome,
                'nascimento' => $request->nascimento,
                'sexo' => $request->sexo,
                'pai' => $request->pai,
                'mae' => $request->mae
        ])) {
            //deve-se retornar para uma view com mensagem amigavel,
            //sugiro o uso do sweetAlert
            return response()->json([
                'status' => [
                    'code' => 200,
                    'cliente' => $cliente
                ]
            ]);
        } else {
            //deve-se retornar para uma view com mensagem amigavel,
            //sugiro o uso do sweetAlert
            return response()->json([
                'status' => [
                    'code' => 201,
                    'mensagem' => 'Não foi possível criar um novo cliente!'
                ]
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //retorna os dados de um determinado cliente
        if ($cliente = Cliente::where('id', $id)->first()) {
            //deve-se retornar para uma view
            return response()->json([
                'status' => [
                    'code' => 200,
                    'cliente' => $cliente
                ]
            ]);
        } else {
            return response()->json([
                'status' => [
                    'code' => 201,
                    'mensagem' => 'Cliente não localizado!'
                ]
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //retorna uma view de edição dos dados do cliente
        if ($cliente = Cliente::where('id', $id)->first()) {
            //retorna para uma view com form para editar os dados do cliente
            //OS DADOS VÃO JUNTO COM A VARIÁVEL $CLIENTE
            return response()->json([
                'status' => [
                    'code' => 200,
                    'cliente' => $cliente
                ]
            ]);
        } else {
            return response()->json([
                'status' => [
                    'code' => 201,
                    'mensagem' => 'Cliente não localizado!'
                ]
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($cliente = Cliente::where('id', $id)->first()) {
            $cliente->update([
                'nome' => $request->nome,
                'sobrenome' => $request->sobrenome,
                'nascimento' => $request->nascimento,
                'sexo' => $request->sexo,
                'pai' => $request->pai,
                'mae' => $request->mae
            ]);
            //deve-se retornar para uma view com mensagem amigavel de sucesso no update,
            //sugiro o uso do sweetAlert
            return response()->json([
                'status' => [
                    'code' => 200,
                    'cliente' => $cliente
                ]
            ]);
        } else {
            //deve-se retornar para uma view com mensagem amigavel em caso de falha do update,
            //sugiro o uso do sweetAlert
            return response()->json([
                'status' => [
                    'code' => 201,
                    'mensagem' => 'Cliente não localizado!'
                ]
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($cliente = Cliente::where('id', $id)->first()) {
            $cliente->delete();
            //deve-se retornar para uma view com mensagem amigavel em caso de sucesso,
            //sugiro o uso do sweetAlert
            return response()->json([
                'status' => [
                    'code' => 200,
                    'mensagem' => 'Deletado com sucesso!'
                ]
            ]);
        } else {
            //deve-se retornar para uma view com mensagem amigavel em caso de fracasso,
            //sugiro o uso do sweetAlert
            return response()->json([
                'status' => [
                    'code' => 201,
                    'mensagem' => 'Cliente não localizado!'
                ]
            ]);
        }
    }
}
