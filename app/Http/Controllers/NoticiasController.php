<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelNews;

class NoticiasController extends Controller
{
private $objNews;

    public function __construct() {
        $this->objNews= new ModelNews();
    }

    public function index() {
        return view("noticias.register");
    }

    public function store(Request $request) {
        $this->objNews->create([
            'id'=>$request->id,
            'title'=>$request->title,
            'backgroundimage'=>$request->backgroundimage,
            'topstory'=>$request->topstory,
            'longstory'=>$request->longstory,
            'date'=>$request->date,
            'author'=>$request->author
        ]);
    }

    public function destroy($id) {
        $del=$this->objNews->destroy($id);
        return($del)?"sim":"não";
    }
}
