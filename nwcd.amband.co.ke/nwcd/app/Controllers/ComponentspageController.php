<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ComponentspageController extends BaseController
{

    public function alert()
    {
        $data = [
            'title' => 'Alerts',
            'subTitle' => 'Components / Alerts',
        ];
        return view('componentspage/alert',$data);
    }
    
    public function avatar()
    {
        $data = [
            'title' => 'Avatars',
            'subTitle' => 'Components / Avatars',
        ];
        return view('componentspage/avatar',$data);
    }

    public function badges()
    {
        $data = [
            'title' => 'Badges',
            'subTitle' => 'Components / Badges',
        ];
        return view('componentspage/badges',$data);

    }

    public function button()
    {
        $data = [
            'title' => 'Button',
            'subTitle' => 'Components / Button',
        ];
        return view('componentspage/button',$data);
    }

    public function calendar()
    {
        $data = [
            'title' => 'Calendar',
            'subTitle' => 'Components / Calendar',
        ];
        return view('componentspage/calendar',$data);
    }

    public function card()
    {
        $data = [
            'title' => 'Card',
            'subTitle' => 'Components / Card',
        ];
        return view('componentspage/card',$data);
    }

    public function carousel()
    {
        $data = [
            'title' => 'Carousel',
            'subTitle' => 'Components / Carousel',
        ];
        return view('componentspage/carousel',$data);
    }

    public function colors()
    {
        $data = [
            'title' => 'Colors',
            'subTitle' => 'Components / Colors',
        ];
        return view('componentspage/colors',$data);
    }

    public function dropdown()
    {
        $data = [
            'title' => 'Dropdown',
            'subTitle' => 'Components / Dropdown',
        ];
        return view('componentspage/dropdown',$data);
    }

    public function imageUpload()
    {
        $data = [
            'title' => 'Radio',
            'subTitle' => 'Components / Radio',
        ];
        return view('componentspage/imageUpload',$data);
    }

    public function list()
    {
        $data = [
            'title' => 'List',
            'subTitle' => 'Components / List',
        ];
        return view('componentspage/list',$data);
    }

    public function pagination()
    {
        $data = [
            'title' => 'Pagination',
            'subTitle' => 'Components / Pagination',
        ];
        return view('componentspage/pagination',$data);
    }

    public function progress()
    {
        $data = [
            'title' => 'Progress Bar',
            'subTitle' => 'Components / Progress Bar',
        ];
        return view('componentspage/progress',$data);
    }

    public function radio()
    {
        $data = [
            'title' => 'Radio',
            'subTitle' => 'Components / Radio',
        ];
        return view('componentspage/radio',$data);
    }

    public function starRating()
    {
        $data = [
            'title' => 'Star Rating',
            'subTitle' => 'Components / Star Rating',
        ];
        return view('componentspage/starRating',$data);
    }

    public function switch()
    {
        $data = [
            'title' => 'Radio',
            'subTitle' => 'Components / Radio',
        ];
        return view('componentspage/switch',$data);
    }

    public function tabs()
    {
        $data = [
            'title' => 'Tab & Accordion',
            'subTitle' => 'Components / Tab & Accordion',
        ];
        return view('componentspage/tabs',$data);
    }

    public function tags()
    {
        $data = [
            'title' => 'Tags',
            'subTitle' => 'Components / Tags',
        ];
        return view('componentspage/tags',$data);
    }

    public function tooltip()
    {
        $data = [
            'title' => 'Tooltip & Popover',
            'subTitle' => 'Components / Tooltip & Popover',
        ];
        return view('componentspage/tooltip',$data);
    }

    public function typography()
    {
        $data = [
            'title' => 'Typography',
            'subTitle' => 'Components / Typography',
        ];
        return view('componentspage/typography',$data);
    }

    public function videos()
    {
        $data = [
            'title' => 'Videos',
            'subTitle' => 'Components / Videos',
        ];
        return view('componentspage/videos',$data);
    }
}
