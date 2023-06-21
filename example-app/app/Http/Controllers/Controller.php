<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'quantity' => 'required|max:1|min:1'
        ]);

        // Здесь вы можете обработать данные, например, сохранить их в базе данных.

        return back()->with('success', 'Form submitted successfully.');
    }
}

//class MapingController extends Controller
//{
//    public function show($name)
//    {
//        if (!view()->exists($name)) {
//            abort(404);
//        }
//
//        return view($name);
//    }
//}
