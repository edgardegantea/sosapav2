<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Panel de Administración'
        ];

        return view('admin/dashboard', $data);
    }
}