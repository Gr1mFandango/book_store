<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
