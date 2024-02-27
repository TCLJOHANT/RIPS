<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           // $usuarios =  Usuario::with(['consultas','procedimientos','urgencias','hospitalizaciones','recienNacidos' ,'medicamentos'])->get();
        
           $usuarios = Usuario::with(['consultas', 'procedimientos', 'urgencias', 'hospitalizaciones', 'recienNacidos', 'medicamentos'])->get();

           $usuariosConServicios = $usuarios->map(function ($usuario) {
               return [
                   'tipoDocumentoIdentificacion' => $usuario->tipo_documento_identificacion,
                   'numDocumentoIdentificacion' => $usuario->num_documento_identificacion,
                   'tipoUsuario' => $usuario->tipo_usuario,
                   'fechaNacimiento' => $usuario->fecha_nacimiento,
                   'codSexo' => $usuario->cod_sexo,
                   'codPaisResidencia' => $usuario->cod_pais_residencia,
                   'codMunicipioResidencia' => $usuario->cod_municipio_residencia,
                   'codZonaTerritorialResidencia' => $usuario->cod_zona_territorial_residencia,
                   'incapacidad' => $usuario->incapacidad,
                   'consecutivo' => $usuario->consecutivo,
                   'codPaisOrigen' => $usuario->cod_pais_origen,
                   'servicios' => [
                       'consultas' => $usuario->consultas,
                       'procedimientos' => $usuario->procedimientos,
                       'urgencias' => $usuario->urgencias,
                       'hospitalizacion' => $usuario->hospitalizaciones,
                       'recienNacidos' => $usuario->recienNacidos,
                       'medicamentos' => $usuario->medicamentos,
                   ],
               ];
           });
       return response()->json($usuariosConServicios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
