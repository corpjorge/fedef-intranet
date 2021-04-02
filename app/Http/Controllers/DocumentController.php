<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\File;
use App\Model\Config\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index(Document $documents)
    {
        return view('documents.index', ['documents' => $documents->all()]);
    }

    public function create(Area $areas)
    {
        return view('documents.create', [ 'areas' => $areas->all()]);
    }

    public function store(Request $request)
    {
        $image = $request->file('document')->getClientOriginalName();
        $image = \Str::random(3).$image;

        $document = new Document;
        $document->area_id = $request->area_id;
        $document->name = $request->name;
        $document->path = $image;
        $document->save();

        Storage::putFileAs('public/document', new File($request->document), $image);

        return redirect()->route('document.index')->withStatus(__('Documento guardado.'));
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('document.index')->withStatus(__('eliminado exitosamente.'));
    }
}
