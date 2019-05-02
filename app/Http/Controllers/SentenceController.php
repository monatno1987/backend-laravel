<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SentenceController extends Controller
{
//    mi metodo para contar las palabras

    public function countwords(Request $request)
    {
        $sente = $request->sentence;

            //guardo las palabras en un array
        $array_cadena = str_word_count($sente, 1);
        $sente = preg_replace('[\n\t]', ' ', $sente);
        $array_cadena = explode(' ', $sente);


        $dev = [];
        foreach ($array_cadena as $d)
        {
            if (array_key_exists($d, $dev)) {
                $dev[$d]++;
            } else {
                $dev[$d] = 1;
            }
        }

        return $dev;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
