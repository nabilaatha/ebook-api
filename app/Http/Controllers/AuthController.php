<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return[ 
            'NIS' => '3103119131',
            'Nama' => 'Nabila Atha Tsabitah',
            'Kelas' => 'XII RPL 4',
            'Absen' => '27',
            'TTL' => 'Wonosobo, 20 Oktober 2003'
        ];
    }
}
