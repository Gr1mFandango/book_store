<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $image = Image::all();

        return $image;
    }

    public function show($id)
    {
        $image = Image::where('id', $id)
            ->first();
        if($image === null){
            throw new NotFoundHttpException();
        }
        return $image;
    }
}
