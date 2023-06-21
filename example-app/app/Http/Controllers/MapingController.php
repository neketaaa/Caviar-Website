<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class MapingController extends Controller
{
    public function show($name)
    {
        if (!view()->exists($name)) {
            abort(404);
        }

        return view($name);
    }

    public function tile($type) {
        $goods = Good::where('type', $type)->get();
        $title = '';
        switch ($type) {
            case 'red': $title = 'Червона ікра'; break;
            case 'black': $title = 'Чорна ікра'; break;
            case 'special': $title = 'Пропозиція місяця'; break;
        }
        return view('tile', ['goods' =>$goods, 'title' => $title]);
    }


    public function item($id) {
        $good = Good::where('id', $id)->first();
//        dd($good);
        return view('item', ['good'=>$good]);
    }
}
