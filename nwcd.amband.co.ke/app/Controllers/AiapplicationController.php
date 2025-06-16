<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AiapplicationController extends BaseController
{
    public function codeGenerator() 
    {
        $data = [
            'title' => 'Code Generator',
            'subTitle' => 'Code Generator',
        ];
        return view('aiapplication/codeGenerator',$data);
    }

    public function codeGeneratorNew() 
    {
        $data = [
            'title' => 'Code Generator',
            'subTitle' => 'Code Generator',
        ];
        return view('aiapplication/codeGeneratorNew',$data);

    }

    public function imageGenerator() 
    {
        $data = [
            'title' => 'Image Generator',
            'subTitle' => 'Image Generator',
        ];
        return view('aiapplication/imageGenerator',$data);
    }

    public function textGenerator() 
    {
        $data = [
            'title' => 'Text Generator',
            'subTitle' => 'Text Generator',
        ];
        return view('aiapplication/textGenerator',$data);

    }

    public function textGeneratorNew() 
    {
        $data = [
            'title' => 'Text Generator',
            'subTitle' => 'Text Generator',
        ];
        return view('aiapplication/textGeneratorNew',$data);
    }

    public function videoGenerator() 
    {
        $data = [
            'title' => 'Video Generator',
            'subTitle' => 'Video Generator',
        ];
        return view('aiapplication/videoGenerator',$data);
    }

    public function voiceGenerator() 
    {
        $data = [
            'title' => 'Voice Generator',
            'subTitle' => 'Voice Generator',
        ];
        return view('aiapplication/voiceGenerator',$data);
    }
}
