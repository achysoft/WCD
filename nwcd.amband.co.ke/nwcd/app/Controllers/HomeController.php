<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function calendarMain()
    {
        $data = [
            'title' => 'Calendar',
            'subTitle' => 'Components / Calendar',
        ];
        return view('calendarMain',$data);
    }

    public function chatEmpty()
    {
        $data = [
            'title' => 'Chat',
            'subTitle' => 'Chat',
        ];
        return view('chatEmpty',$data);
    }

    public function chatMessage()
    {
        $data = [
            'title' => 'Chat',
            'subTitle' => 'Chat',
        ];
        return view('chatMessage',$data);
    }

    public function chatProfile()
    {
        $data = [
            'title' => 'Chat',
            'subTitle' => 'Chat',
        ];
        return view('chatProfile',$data);
    }

    public function email()
    {
        $data = [
            'title' => 'Email',
            'subTitle' => 'Components / Email',
        ];
        return view('email',$data);
    }

    public function pageError()
    {
        $data = [
            'title' => '404',
            'subTitle' => '404',
        ];
        return view('pageError',$data);
    }

    public function faq()
    {
        $data = [
            'title' => 'Faq',
            'subTitle' => 'Faq',
        ];
        return view('faq',$data);
    }

    public function gallery()
    {
        $data = [
            'title' => 'Gallery',
            'subTitle' => 'Gallery',
        ];
        return view('gallery',$data);
    }

    public function imageUpload()
    {
        $data = [
            'title' => 'Radio',
            'subTitle' => 'Components / Radio',
        ];
        return view('imageUpload',$data);
    }

    public function kanban()
    {
        $data = [
            'title' => 'Kanban',
            'subTitle' => 'Kanban',
        ];
        return view('kanban',$data);
    }

    public function pricing()
    {
        $data = [
            'title' => 'Pricing',
            'subTitle' => 'Pricing',
        ];
        return view('pricing',$data);
    }

    public function starred()
    {
        $data = [
            'title' => 'Email',
            'subTitle' => 'Components / Email',
        ];
        return view('starred',$data);
    }

    public function termsCondition()
    {
        $data = [
            'title' => 'Terms & Conditions',
            'subTitle' => 'Terms & Conditions',
        ];
        return view('termsCondition',$data);
    }

    public function typography()
    {
        $data = [
            'title' => 'typography',
            'subTitle' => 'typography',
        ];
        return view('typography',$data);
    }

    public function veiwDetails()
    {
        $data = [
            'title' => 'Email',
            'subTitle' => 'Components / Email',
        ];
        return view('veiwDetails',$data);
    }

    public function widgets()
    {
        $data = [
            'title' => 'Widgets',
            'subTitle' => 'Widgets',
        ];
        return view('widgets',$data);
    }
}
