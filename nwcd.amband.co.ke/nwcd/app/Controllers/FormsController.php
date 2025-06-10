<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FormsController extends BaseController
{
    public function form()
    {
        $data = [
            'title' => 'Input From',
            'subTitle' => 'Input From',
        ];
        return view('forms/form',$data);
    }

    public function formLayout()
    {
        $data = [
            'title' => 'Input Layout',
            'subTitle' => 'Input Layout',
        ];
        return view('forms/formLayout',$data);
    }

    public function formValidation()
    {
        $data = [
            'title' => 'Form Validation',
            'subTitle' => 'Form Validation',
        ];
        return view('forms/formValidation',$data);
    }

    public function wizard()
    {
        $data = [
            'title' => 'Wizard',
            'subTitle' => 'Wizard',
        ];
        return view('forms/wizard',$data);
    }
}
