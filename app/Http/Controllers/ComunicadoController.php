<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comunicado;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class ComunicadoController extends Controller
{
    public function index(Comunicado $comunicados)
    {
        return view('comunicado.index', ['comunicados' => $comunicados->all()]);
    }

    public function create()
    {
        return view('comunicado.create');
    }

    public function store(Request $request)
    {
        $request->validate([ 'ruta' => 'required']);

        $image = $request->file('ruta')->getClientOriginalName();
        $image = \Str::random(3).$image;

        $comunicado = new Comunicado;
        $comunicado->url = $request->url;
        $comunicado->ruta =  $image;
        $comunicado->save();

        Storage::putFileAs('public/img/comunicados', new File($request->ruta), $image);

        return redirect()->route('comunicado.index')->withStatus(__('Documento guardado.'));

    }

    public function delete($id)
    {
        $comunicados = Comunicado::findOrFail($id);
        $comunicados->delete();
        return redirect()->route('comunicado.index')->withStatus(__('eliminado exitosamente.'));
    }

}
