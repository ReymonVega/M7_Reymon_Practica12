<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Cliente() {
        return view( view: 'admin/clientes') -> with(['text' => 'Estoy en la pagina Clientes']);
    }
    public function Facturacion() {
        return view( view: 'admin/facturacion') -> with(['text' => 'Estoy en la pagina Facturaciones']);
    }
    public function Contabilidad() {
        return view( view: 'admin/contabilidad') -> with(['text' => 'Estoy en la pagina Contabilidades']);
    }
}
