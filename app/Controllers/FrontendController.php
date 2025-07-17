<?php
namespace App\Controllers;

use App\Controllers\BaseController;

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

    // NUEVAS FUNCIONES

    public function faqs()
    {
        return view('frontend/informacion/faqs');
    }

    public function postprueba()
    {
        $db = \Config\Database::connect();

        $query   = $db->query('SELECT * FROM posts');
        $results = $query->getResult();

        $data = [
            'posts' => $results,
        ];

        return view('frontend/informacion/postprueba', compact($data));
    }

}
