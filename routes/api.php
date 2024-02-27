<?php


use App\Http\Controllers\Api\TransaccionController;
use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("example",function(){
    $jsonexample =json_decode('{
        "numDocumentoIdObligado":"814006170",
        "numFactura":"CTFE226713",
        "tipoNota":null,
        "numNota":null,
        "usuarios":[
           {
              "tipoDocumentoIdentificacion":"CC",
              "numDocumentoIdentificacion":"52100200",
              "tipoUsuario":"01",
              "fechaNacimiento":"2000-01-01",
              "codSexo":"M",
              "codPaisResidencia":"170",
              "codMunicipioResidencia":"05134",
              "codZonaTerritorialResidencia":"01",
              "incapacidad":"02",
              "consecutivo":1,
              "codPaisOrigen":"170",
              "servicios":{
                 "consultas":[
                    {
                       "codPrestador":"500000000001",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "numAutorizacion":"100000000002",
                       "codConsulta":"890201",
                       "modalidadGrupoServicioTecSal":"09",
                       "grupoServicios":"01",
                       "codServicio":1,
                       "finalidadTecnologiaSalud":"11",
                       "causaMotivoAtencion":"21",
                       "codDiagnosticoPrincipal":"D482",
                       "codDiagnosticoRelacionado1":"B428",
                       "codDiagnosticoRelacionado2":null,
                       "codDiagnosticoRelacionado3":null,
                       "tipoDiagnosticoPrincipal":"01",
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"80100200",
                       "vrServicio":36341,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":8000,
                       "numFEVPagoModerador":"AF0987232XX",
                       "consecutivo":1
                    },
                    {
                       "codPrestador":"500000000001",
                       "fechaInicioAtencion":"2021-08-19 05:00",
                       "numAutorizacion":"100000000002",
                       "codConsulta":"890201",
                       "modalidadGrupoServicioTecSal":"09",
                       "grupoServicios":"01",
                       "codServicio":1,
                       "finalidadTecnologiaSalud":"11",
                       "causaMotivoAtencion":"21",
                       "codDiagnosticoPrincipal":"D482",
                       "codDiagnosticoRelacionado1":"B428",
                       "codDiagnosticoRelacionado2":null,
                       "codDiagnosticoRelacionado3":null,
                       "tipoDiagnosticoPrincipal":"01",
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"80100200",
                       "vrServicio":36341,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":4500,
                       "numFEVPagoModerador":"FVE6",
                       "consecutivo":2
                    }
                 ],
                 "procedimientos":[
                    {
                       "codPrestador":"500000000001",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "idMIPRES":null,
                       "numAutorizacion":null,
                       "codProcedimiento":"895100",
                       "viaIngresoServicioSalud":"01",
                       "modalidadGrupoServicioTecSal":"01",
                       "grupoServicios":"04",
                       "codServicio":1,
                       "finalidadTecnologiaSalud":"44",
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"80100200",
                       "codDiagnosticoPrincipal":"E109",
                       "codDiagnosticoRelacionado":"E109",
                       "codComplicacion":"E109",
                       "vrServicio":49700,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":20000,
                       "numFEVPagoModerador":"FVE7",
                       "consecutivo":1
                    }
                 ],
                 "urgencias":[
                    {
                       "codPrestador":"500000000001",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "causaMotivoAtencion":"21",
                       "codDiagnosticoPrincipal":"B427",
                       "codDiagnosticoPrincipalE":"B427",
                       "codDiagnosticoRelacionadoE1":null,
                       "codDiagnosticoRelacionadoE2":null,
                       "codDiagnosticoRelacionadoE3":null,
                       "condicionDestinoUsuarioEgreso":"01",
                       "codDiagnosticoCausaMuerte":null,
                       "fechaEgreso":"2021-08-23 20:22",
                       "consecutivo":1
                    }
                 ],
                 "hospitalizacion":[
                    {
                       "codPrestador":"500000000001",
                       "viaIngresoServicioSalud":"02",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "numAutorizacion":"0102342",
                       "causaMotivoAtencion":"21",
                       "codDiagnosticoPrincipal":"B427",
                       "codDiagnosticoPrincipalE":"B427",
                       "codDiagnosticoRelacionadoE1":null,
                       "codDiagnosticoRelacionadoE2":null,
                       "codDiagnosticoRelacionadoE3":null,
                       "codComplicacion":null,
                       "condicionDestinoUsuarioEgreso":"02",
                       "codDiagnosticoCausaMuerte":null,
                       "fechaEgreso":"2021-12-12 14:22",
                       "consecutivo":1
                    }
                 ],
                 "recienNacidos":[
                    {
                       "codPrestador":"500000000001",
                       "tipoDocumentoIdentificacion":"RC",
                       "numDocumentoIdentificacion":"10172349991",
                       "fechaNacimiento":"2019-05-10 10:40",
                       "edadGestacional":40,
                       "numConsultasCPrenatal":6,
                       "codSexoBiologico":"02",
                       "peso":1850,
                       "codDiagnosticoPrincipal":"K469",
                       "condicionDestinoUsuarioEgreso":"01",
                       "codDiagnosticoCausaMuerte":null,
                       "fechaEgreso":"2019-05-25 09:30",
                       "consecutivo":1
                    }
                 ],
                 "medicamentos":[
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":null,
                       "idMIPRES":"1017232344",
                       "fechaDispensAdmon":"2021-08-18 08:10",
                       "codDiagnosticoPrincipal":"K469",
                       "codDiagnosticoRelacionado":null,
                       "tipoMedicamento":"01",
                       "codTecnologiaSalud":"1A1014721001104",
                       "nomTecnologiaSalud":null,
                       "concentracionMedicamento":0,
                       "unidadMedida":0,
                       "formaFarmaceutica":"123456",
                       "unidadMinDispensa":1,
                       "cantidadMedicamento":10,
                       "diasTratamiento":365,
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"10234561292",
                       "vrUnitMedicamento":1,
                       "vrServicio":1,
                       "conceptoRecaudo":"01",
                       "valorPagoModerador":30000,
                       "numFEVPagoModerador":"FVE8",
                       "consecutivo":1
                    }
                 ],
                 "otrosServicios":[
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":null,
                       "idMIPRES":"1034284847",
                       "fechaSuministroTecnologia":"2021-08-18 08:10",
                       "tipoOS":"01",
                       "codTecnologiaSalud":"T2387G",
                       "nomTecnologiaSalud":"Dispositivo",
                       "cantidadOS":1,
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"10234561292",
                       "vrUnitOS":350000,
                       "vrServicio":350000,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":4000,
                       "numFEVPagoModerador":"FVE9",
                       "consecutivo":1
                    },
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":null,
                       "idMIPRES":null,
                       "fechaSuministroTecnologia":"2021-08-18 08:10",
                       "tipoOS":"03",
                       "codTecnologiaSalud":" 5DSB01",
                       "nomTecnologiaSalud":"Derechos de sala de observación en urgencias complejidad baja",
                       "cantidadOS":5,
                       "tipoDocumentoIdentificacion":null,
                       "numDocumentoIdentificacion":null,
                       "vrUnitOS":80000,
                       "vrServicio":400000,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":5000,
                       "numFEVPagoModerador":"FVE10",
                       "consecutivo":2
                    },
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":null,
                       "idMIPRES":null,
                       "fechaSuministroTecnologia":"2021-08-18 08:10",
                       "tipoOS":"03",
                       "codTecnologiaSalud":" 10B002",
                       "nomTecnologiaSalud":"Internación complejidad baja habitación bipersonal",
                       "cantidadOS":116,
                       "tipoDocumentoIdentificacion":null,
                       "numDocumentoIdentificacion":null,
                       "vrUnitOS":120000,
                       "vrServicio":13920000,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":4500,
                       "numFEVPagoModerador":"FVE11",
                       "consecutivo":3
                    }
                 ]
              }
           },
           {
              "tipoDocumentoIdentificacion":"CC",
              "numDocumentoIdentificacion":"79100200",
              "tipoUsuario":"01",
              "fechaNacimiento":"2021-08-18",
              "codSexo":"M",
              "codPaisResidencia":"170",
              "codMunicipioResidencia":"05134",
              "codZonaTerritorialResidencia":"01",
              "incapacidad":"02",
              "consecutivo":2,
              "codPaisOrigen":"170",
              "servicios":{
                 "consultas":[
                    {
                       "codPrestador":"500000000001",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "numAutorizacion":"0000000",
                       "codConsulta":"890201",
                       "modalidadGrupoServicioTecSal":"09",
                       "grupoServicios":"01",
                       "codServicio":1,
                       "finalidadTecnologiaSalud":"11",
                       "causaMotivoAtencion":"21",
                       "codDiagnosticoPrincipal":"D479",
                       "codDiagnosticoRelacionado1":"B428",
                       "codDiagnosticoRelacionado2":null,
                       "codDiagnosticoRelacionado3":null,
                       "tipoDiagnosticoPrincipal":"01",
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"70100200",
                       "vrServicio":36341,
                       "conceptoRecaudor":"02",
                       "valorPagoModerador":5000,
                       "numFEVPagoModerador":"FVE12",
                       "consecutivo":1
                    }
                 ],
                 "procedimientos":[
                    {
                       "codPrestador":"500000000001",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "numAutorizacion":"0000000",
                       "codProcedimiento":"895100",
                       "viaIngresoServicioSalud":"01",
                       "modalidadGrupoServicioTecSal":"01",
                       "grupoServicios":"04",
                       "codServicio":1,
                       "finalidadTecnologiaSalud":"44",
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"80000000",
                       "codDiagnosticoPrincipal":"E109",
                       "codDiagnosticoRelacionado":"C842",
                       "codComplicacion":"C842",
                       "vrServicio":49700,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":5000,
                       "numFEVPagoModerador":"FVE13",
                       "consecutivo":1
                    }
                 ],
                 "urgencias":[
                    {
                       "codPrestador":"500000000001",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "causaMotivoAtencion":"22",
                       "codDiagnosticoPrincipal":"K469",
                       "codDiagnosticoPrincipalE":"K469",
                       "codDiagnosticoRelacionadoE1":"K469",
                       "codDiagnosticoRelacionadoE2":"K469",
                       "codDiagnosticoRelacionadoE3":"K469",
                       "condicionDestinoUsuarioEgreso":"02",
                       "codDiagnosticoCausaMuerte":"K469",
                       "fechaEgreso":"2021-08-18 08:10",
                       "consecutivo":1
                    }
                 ],
                 "hospitalizacion":[
                    {
                       "codPrestador":"500000000001",
                       "viaIngresoServicioSalud":"02",
                       "fechaInicioAtencion":"2021-08-18 08:10",
                       "numAutorizacion":"000000",
                       "causaMotivoAtencion":"21",
                       "codDiagnosticoPrincipal":"K469",
                       "codDiagnosticoPrincipalE":"K469",
                       "codDiagnosticoRelacionadoE1":"K469",
                       "codDiagnosticoRelacionadoE2":"K469",
                       "codDiagnosticoRelacionadoE3":"K469",
                       "codComplicacion":"K469",
                       "condicionDestinoUsuarioEgreso":"02",
                       "codDiagnosticoCausaMuerte":"K469",
                       "fechaEgreso":"2021-08-19 08:10",
                       "consecutivo":1
                    }
                 ],
                 "recienNacidos":[
                    {
                       "codPrestador":"500000000001",
                       "tipoDocumentoIdentificacion":"RC",
                       "numDocumentoIdentificacion":"10184354743",
                       "fechaNacimiento":"2021-08-18 08:10",
                       "edadGestacional":40,
                       "numConsultasCPrenatal":2,
                       "codSexoBiologico":"01",
                       "peso":1753,
                       "codDiagnosticoPrincipal":"K469",
                       "condicionDestinoUsuarioEgreso":"02",
                       "codDiagnosticoCausaMuerte":"K469",
                       "fechaEgreso":"2021-08-18 08:10",
                       "consecutivo":1
                    }
                 ],
                 "medicamentos":[
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":"0000000",
                       "idMIPRES":"",
                       "fechaDispensAdmon":"2021-08-18 08:10",
                       "codDiagnosticoPrincipal":"A080",
                       "codDiagnosticoRelacionado":"A080",
                       "tipoMedicamento":"01",
                       "codTecnologiaSalud":"44405-3",
                       "nomTecnologiaSalud":"CEFALEXINA 500 MG",
                       "concentracionMedicamento":0,
                       "unidadMedida":1,
                       "formaFarmaceutica":null,
                       "unidadMinDispensa":1,
                       "cantidadMedicamento":21,
                       "diasTratamiento":21,
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"79100200",
                       "vrUnitMedicamento":555,
                       "vrServicio":11655,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":5000,
                       "numFEVPagoModerador":"FVE14",
                       "consecutivo":1
                    }
                 ],
                 "otrosServicios":[
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":"00",
                       "idMIPRES":"9999",
                       "fechaSuministroTecnologia":"2021-08-18 08:10",
                       "tipoOS":"01",
                       "codTecnologiaSalud":"T2387G",
                       "nomTecnologiaSalud":"Dispositivo",
                       "cantidadOS":120,
                       "tipoDocumentoIdentificacion":"CC",
                       "numDocumentoIdentificacion":"80122000",
                       "vrUnitOS":12000,
                       "vrServicio":12000,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":5000,
                       "numFEVPagoModerador":"FVE15",
                       "consecutivo":1
                    },
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":null,
                       "idMIPRES":null,
                       "fechaSuministroTecnologia":"2021-08-18 08:10",
                       "tipoOS":"03",
                       "codTecnologiaSalud":" 5DSB01",
                       "nomTecnologiaSalud":"Derechos de sala de observación en urgencias complejidad baja",
                       "cantidadOS":1,
                       "tipoDocumentoIdentificacion":null,
                       "numDocumentoIdentificacion":null,
                       "vrUnitOS":80000,
                       "vrServicio":80000,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":5000,
                       "numFEVPagoModerador":"FVE16",
                       "consecutivo":2
                    },
                    {
                       "codPrestador":"500000000001",
                       "numAutorizacion":null,
                       "idMIPRES":null,
                       "fechaSuministroTecnologia":"2021-08-18 08:10",
                       "tipoOS":"03",
                       "codTecnologiaSalud":" 10B002",
                       "nomTecnologiaSalud":"Internación complejidad baja habitación bipersonal",
                       "cantidadOS":1,
                       "tipoDocumentoIdentificacion":null,
                       "numDocumentoIdentificacion":null,
                       "vrUnitOS":120000,
                       "vrServicio":120000,
                       "conceptoRecaudo":"02",
                       "valorPagoModerador":5000,
                       "numFEVPagoModerador":"FVE17",
                       "consecutivo":3
                    }
                 ]
              }
           }
        ]
     }');    
    return response()->json($jsonexample);
   // print_r($jsonexample);
});
Route::resource('transacciones',TransaccionController::class);
Route::resource('usuarios',UsuarioController::class);