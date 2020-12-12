<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
class Crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=DB::table('poet')
            ->orderBy('poet_code')
            ->get();
        return view('crud.showUsuarios',[
            'poet'=> $user
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('Crud.altaUsuario');
    }


    public function store(Request $request)
    {
      $user=DB::table('poet')
          ->insert([
              'poet_code'=> $request->input('code'),
              'first_name'=> $request->input('first'),
              'surname'=> $request->input('surname'),
              'adress'=> $request->input('adress'),
              'postcode'=> $request->input('postcode'),
              'telephone_number'=> $request->input('telephone')
          ]);
      return redirect()->action('Crud@index')
          ->with('status','Usuario creado exitosamente');
    }


    public function show($id)
    {
       $user= DB::table('poet')
           -> where('poet_code','=',$id)
           -> first();
        return view('crud/altaUsuario',['poet'=>$user]);

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        $user=DB::table('poet')
            ->where('poet_code','=', $request->input('id'))
            ->update([
                'first_name'=> $request->input('first'),
                'surname'=> $request->input('surname'),
                'adress'=> $request->input('adress'),
                'postcode'=> $request->input('postcode'),
                'telephone_number'=> $request->input('telephone')
            ]);
        return redirect()->action('Crud@index')
            ->with('status','Usuario modificado exitosamente');
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=DB::table('poet')
            ->where('poet_code','=', $id)
            ->delete();
             return redirect()->action('Crud@index')
            ->with('status','Usuario eliminado exitosamente');
    }
}
