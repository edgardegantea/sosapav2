<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FrontendController extends BaseController
{
    public function index()
    {
        //
    }


    public function mvv()
    {
        return view('frontend/identidad/mvv');
    }



    public function queessosapatlat()
    {
        return view('frontend/identidad/queessosapatlat');
    }


    public function marconormativo()
    {
        return view('frontend/transparencia/marconormativo');
    }


    public function estructuraorganica()
    {
        return view('frontend/transparencia/estructuraorganica');
    }


    public function padronprov()
    {
        return view('frontend/transparencia/padronprov');
    }


    public function conocetumedidor()
    {
        return view('frontend/informacion/conocetumedidor');
    }

    public function tarifasporservicio()
    {
        return view('frontend/informacion/tarifasporservicio');
    }


    public function informacionfinancieracontable()
    {
        return view('frontend/informacion/infofinancieracontable');
    }

}