<?php

namespace App\Http\Controllers;

use App\Result as M ;
use Illuminate\Http\Request;

class ResultController extends Controller
{
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
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {     
        $r = M::where("subcategories_id" , '=' ,  $request->subcategories_id);


        foreach ($request->respuestaT as  $eT ) {
           
            if( $eT  == 'T1' )
                $r = $r->where("t1" , '=' , '1') ;
            
            if( $eT  == 'T1a' )
                $r = $r->where("t1a" , '=' , '1') ;
            if( $eT  == 'T1b' )
                $r = $r->where("t1b" , '=' , '1') ;

            if( $eT  == 'T2' )
                $r = $r->where("t2" , '=' , '1') ;

            if( $eT  == 'T3' )
                $r = $r->where("t3" , '=' , '1') ;

            if( $eT  == 'T4a' )
                $r = $r->where("t4a" , '=' , '1') ;

            if( $eT  == 'T4b' )
                $r = $r->where("t4b" , '=' , '1') ;


            
        }

        
        foreach ($request->respuestaN as  $eN ) {
           
            if(  strtoupper( $eN)  == 'NX' )
                $r = $r->where("nx" , '=' , '1') ;

            if( $eN  == 'N0' )
                $r = $r->where("n0" , '=' , '1') ;

            if( $eN  == 'N1' )
                $r = $r->where("n1" , '=' , '1') ;

            if( $eN  == 'N2' )
                $r = $r->where("n2" , '=' , '1') ;

            if( $eN  == 'N3' )
                $r = $r->where("n3" , '=' , '1') ;

                
        }



        $eM  = $request->respuestaM;   
           
            if( strtoupper( $eM )  == 'MX' )
                $r = $r->where("mx" , '=' , '1') ;

            if( $eM  == 'M0' )
                $r = $r->where("m0" , '=' , '1') ;

            if( $eM  == 'M1' )
                $r = $r->where("m1" , '=' , '1') ;

            if( $eM  == 'M2' )
                $r = $r->where("m2" , '=' , '1') ;

            if( $eM  == 'M3' )
                $r = $r->where("m3" , '=' , '1') ;

                
        

        
        $resultado = $r->get();


        return  response()->json(  $resultado ) ; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
