<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($userId)
    {
        return $userId;
    }

    public function index()
    {
        return [
            [
                'id' => 1,
                'name' => 'abrar',
                'eng' => 'chemical and petrochemical'
            ],
            [
                'id' => 2,
                'name' => 'aisha',
                'eng' => 'chemical science '
            ],
        ];
    }
}
