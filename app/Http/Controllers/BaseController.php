<?php

namespace App\Http\Controllers;

use App\Services\CartService;

class BaseController extends Controller{

    public $service;

    public function __construct( CartService $service)
    {
        $this->service = $service;
    }
}
