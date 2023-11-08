<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){

        $author = Author::all();

        return $author;
    }

    public function show($id){

        $author = Author::where('id', $id)
            ->first();

        if ($author === null){
            throw  new NotFoundHttpException();
        }
        return $author;

    }
}
