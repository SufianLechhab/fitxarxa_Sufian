<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Centre;
use App\Models\Entrenador;
use App\Models\Sessio;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function entrenadors()
{
    return Entrenador::all();
}
public function sessions()
{
    return Sessio::with('entrenador')->get();
}
public function crearEntrenador(Request $request)
{
    $entrenador = Entrenador::create($request->all());
    return $entrenador;
}
public function crearSessio(Request $request)
{
    return Sessio::create($request->all());
}
public function editarSessio(Request $request, $id)
{
    $sessio = Sessio::findOrFail($id);
    $sessio->update($request->all());

    return $sessio;
}
public function eliminarSessio($id)
{
    Sessio::destroy($id);
}
public function eliminarEntrenador($id)
{
    Entrenador::destroy($id);
}
public function addSessioCentre($idCentre,$idSessio)
{
    $centre = Centre::find($idCentre);
    $centre->sesions()->attach($idSessio);
}
public function removeSessioCentre($idCentre,$idSessio)
{
    $centre = Centre::find($idCentre);
    $centre->sesions()->detach($idSessio);
}
public function centresPerSessio($idSessio)
{
    $sessio = Sessio::find($idSessio);
    return $sessio->centres;
}

public function crearEntrenadorImg(Request $request)
{
    if($request->hasFile('imatge')){

        $file = $request->file('imatge');

        $nom = uniqid().".".$file->extension();

        $file->move(public_path('uploads/imatges'),$nom);
    }

    $entrenador = Entrenador::create([
        'nom'=>$request->nom,
        'cognoms'=>$request->cognoms,
        'imatge'=>$nom ?? null
    ]);

    return $entrenador;
}
public function imatgeEntrenador($nom)
{
    $path = public_path('uploads/imatges/'.$nom);

    return response()->file($path);
}

}
