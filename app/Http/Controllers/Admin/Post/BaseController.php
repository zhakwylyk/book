<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Service\PostService;
use Illuminate\Http\Request;

class BaseController extends Controller
{

            public $servise;

            public function __construct(PostService $service)
            {


                $this->servise = $service;

            }



}
