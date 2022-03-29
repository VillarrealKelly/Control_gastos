<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo;
use App\Control;
use App\Categoria;
use App\User;
use Auth;
use DB;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //dd("movimienrto");
        //$control=Control::all();
        $data=$request->all();
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');

        if(isset($data['desde'])){// si lehe dado en el botón buscar
        $desde=$data['desde'];

        $hasta=$data['hasta'];

        }
         $control=DB::select("
            SELECT * FROM control c 
            Join users u ON c.usu_id=u.usu_id
            JOIN tipo t ON c.tip_id=t.tip_id
            JOIN categoria ca ON c.cat_id=ca.cat_id
            WHERE c.con_fecha BETWEEN '$desde' AND '$hasta'

            ");
        return view('control.index')
         ->with('control',$control)
         ->with('desde',$desde)
         ->with('hasta',$hasta)   
                     ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd("holi");
        $control=Control::all();
        $tipo=tipo::all();
        $categoria=Categoria::all();
        return view('control.create')
         ->with('control',$control)
         ->with('tipo',$tipo)
         ->with('categoria',$categoria)
         ;
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
        $data=$request->all();
        //dd($data);
        $data['usu_id']=Auth::user()->usu_id;
        Control::create( $data);
        return redirect(route('control'));
        //  //
        //  $data=$request->all();
        //  $data['usu_id']=Auth::user()->usu_id;
        //  dd($data);
        //     // $data['tip_id']=Auth::tipo()->tip_id;
        //     //    $data['tip_id']=Auth::categoria()->cat_id;

        // Control::create($data);
        // return redirect(route('control'));
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
     
       $control=Control::find($id);
       $tipo=tipo::all();
        return view('control.edit')
        ->with('control',$control)
        ->with('tipo',$tipo)
        ;
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
                $con=Control::find($id);
        $con->update($request->all());
        return redirect(route('control'));
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
        Control::destroy($id);
        return redirect(route('control'));
    }

    // public function search(){
    //     return view('control.index');
    // }
}
