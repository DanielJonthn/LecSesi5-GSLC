<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Food extends Controller
{
    public function index(){
        $data = [
            'fName' => ['Cumi Goreng Tepung', 'Udang Asam Manis', 'Kepiting Saos Padang', 'Kerang Tahu Tauco'],
            'img' => ['https://assets-pergikuliner.com/PGWOG7iaph4z_mxl607acgsDnk4=/385x290/smart/https://assets-pergikuliner.com/uploads/image/picture/457311/picture-1486363497.jpg', 
            'https://www.sajianbunda.com/wp-content/uploads/2016/03/Resep-Udang-Asam-Manis.jpg', 
            'https://img.qraved.co/v2/image/data/Indonesia/jakarta/Green_Ville/Pondok_Pangandaran/15034812_1832483430374812_3849147324148219904_n.14973249871080.810-m.jpg',
            'https://img-global.cpcdn.com/recipes/7d67977ba5e662b4/680x482cq70/kerang-tahu-tauco-foto-resep-utama.webp'],
            'price' => ['Rp. 39.000', 'Rp. 59.500', 'Rp. 36.000', 'Rp. 34.500'],
            'stk' => ['0', '12', '9', '6']
        ];
        return view('main', $data);
    }
}

