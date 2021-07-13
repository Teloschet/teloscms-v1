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

        $date = new DateTime(date("d/m/Y"));

        $this->objNews->create([
            'id'=>$request->id,
            'title'=>$request->title,
            'backgroundimage'=>$request->backgroundimage,
            'topstory'=>$request->topstory,
            'longstory'=>$request->longstory,
            'date'=>$request->$date->date,
            'author'=>$request->author
        ]);
    }

    public function destroy($id) {
        $del=$this->objNews->destroy($id);
        return($del)?"sim":"não";
    }

    public function update(Request $request, $id) {
        if ($_POST['title'] == $request->title) {
            $this->objNews->where(['id'=>$id])->update([
                'title'=>$request->title,
            ]);
        }

        if ($_FILE['backgroundimage'] == $request->backgroundimage) {
            $this->objNews->where(['id'=>$id])->update([
                'backgroundimage'=>$request->backgroundimage
            ]);
        }

        if ($POST['topstory'] == $request->topstory) {
            $this->objNews->where(['id'=>$id])->update([
                'topstory'=>$request->topstory
            ]);
        }

        if ($POST['longstory'] == $request->longstory) {
            $this->objNews->where(['id'=>$id])->update([
                'longstory'=>$request->longstory
            ]);
        }
    }

    private $dateNews;
    public function lastNotices() {
        $today = new DateTime(date("d/m/Y"));
        $sql = mysqli_query("SELECT * FROM tb_news ORDER BY id");

        while($table = mysql_fetch_assoc($sql)) {
            if ($today = $table['date']) {
                echo $table['date'];
            } else {
                echo 'Dont have last news today!';
            }
        }
    }
}
