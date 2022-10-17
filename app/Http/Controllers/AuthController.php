<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120140,
            'Name' => 'Agi',
            'Phone' => 123456789,
            'Class' => 'XII RPL 4'
        ];
    }
}
