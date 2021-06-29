<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AppFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::paginate(1000);
        return view('home', compact('users'));                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dados = $request->all();
        $users = User::create($dados);

        $result["success"] = true;
        $result["message"] =  "Cadastrado com sucesso";
        $result["dados"] = $users;
        echo json_encode($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $result['success'] = true;
        $result['message'] = 'Sucesso!!';
        $result['dados'] = $user;
        echo json_encode($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $user = User::find($id);
        $user->name = $request->all()['name'];
        $user->lastName = $request->all()['lastName'];
        $user->document = $request->all()['document'];
        $user->birthDate = $request->all()['birthDate'];
        $user->email = $request->all()['email'];
        $user->save();

        $result["success"] = true;
        $result["message"] =  "Dados do Usuário";
        $result["dados"] = $user;

        echo json_encode($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result["success"] = true;
        $result["message"] =  "Dados do Usuário";
        $result["dados"] = $id;

        echo json_encode($result);
    }
}
