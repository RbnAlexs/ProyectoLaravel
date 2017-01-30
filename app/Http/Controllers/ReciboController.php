<?php

namespace App\Http\Controllers;

use App\ReciboDocumento;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Recibo;
use Illuminate\Support\Facades\Auth;

class ReciboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibo = Recibo::paginate(20);
        return view('admin.recibos.index')->withRecibos($recibo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recibos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*  INSERTANDO RECIBOS    */
        for ($i=0; $i<count($request['usuarios']); $i++) {
            $usuario = $request['usuarios'][$i];
            $fechaRecibo = $request['fechasRecibo'][$i];
            $observacion = $request['observaciones'][$i];
            $fechaRecibo = str_replace('/', '-', $fechaRecibo);
            $fechaRecibo = date("Y-m-d", strtotime($fechaRecibo));

            /*  INSERTANDO FACTURAS    */
            $recibo = new Recibo();
            $recibo->id_usuario = $usuario;
            $recibo->observacion = $observacion;
            $recibo->fechaRecibo = $fechaRecibo;
            $recibo->estatus = 1;
            $recibo->save();
            foreach($request->file(['files_'.$usuario]) as $archivo){
                $random = str_random(5);
                $filename  = $random."_".time() . '.' . $archivo->getClientOriginalExtension();
                $path = public_path('archivos/recibos');
                $move = $archivo->move($path,$filename);
                $reciboDocumento = new ReciboDocumento();
                $reciboDocumento->id_recibo = $recibo->id;
                $reciboDocumento->ruta = $filename;
                $reciboDocumento->estatus = 1;
                $reciboDocumento->save();
            }
        }
        Session::flash('message', array('success','Se han cargado los recibos correctamente.'));
        return Redirect::to('/admin/recibos');
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
    public function recibosByUser()
    {
        $id = Auth::user()->id;
        $recibo = Recibo::where('id_usuario', '=', $id)->get();
        return view('paginas.rh.recibos')->withRecibos($recibo);
    }
}
