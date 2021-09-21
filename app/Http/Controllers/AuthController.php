<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[ 
            'NIS' => '3103119131',
            'Nama' => 'Nabila Atha Tsabitah',
            'Kelas' => 'XII RPL 4',
            'Absen' => '27',
            'TTL' => 'Wonosobo, 20 Oktober 2003'
        ];
    }
}
