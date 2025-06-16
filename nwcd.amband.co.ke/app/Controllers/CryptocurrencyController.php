<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CryptocurrencyController extends BaseController
{
    public function wallet()
    {
        $data = [
            'title' => 'Wallet',
            'subTitle' => 'Wallet',
        ];
        return view('cryptocurrency/wallet',$data);
    }
}
