<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //displays the form to create a new author
    public function create() {


        //return view("admin/author/edit");
        //view'ın içindeki edit dosyasını renderlemek istiyorum burada

        $view = view("admin/author/edit");
        return $view;
        //$view bi object!!
        //renderladığım şey aslında layout.blade.php ama o her şeyi saran bi yapı, direkt edit dosyasını koyabilirim burada view'e, o extendlendiği için kendi yolunu bulup, renderlanır.
    }
}
