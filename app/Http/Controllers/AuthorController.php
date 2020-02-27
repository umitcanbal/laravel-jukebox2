<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    //displays the form to create a new author
    public function create() {

        $author = new Author;
        //empty object with default values created in the line above.




        //return view("admin/author/edit");
        //view'ın içindeki edit dosyasını renderlemek istiyorum burada

        // compact("author") === ["author", $author] aynı şeye denk geliyolar
        $view = view("admin/author/edit", compact("author"));
        return $view;
        //$view bi object!!
        //renderladığım şey aslında layout.blade.php ama o her şeyi saran bi yapı, direkt edit dosyasını koyabilirim burada view'e, o extendlendiği için kendi yolunu bulup, renderlanır.
    }

    //to be able to insert author object into the database/table.
    public function store(Request $request) {
        $this->validate($request, [
            "name" => "required"
        ]);
        //"this" represent the Controller

        // dd("çalışıyo");

        // create a new object Author
        $author = new Author;

        // fill the new object from the request
        //There are two methods, first: as a parameter!
        //second $request = request();
        // $request = request();
        $author->name = $request->input("name");
        //$request = $_POST VE $_GET, istersen hala bunları kullanabilirsin

        // store the filled object into the database into table "authors"
        $author->save();

        session()->flash('success_message', 'Success!');

        // redirect somewhere
        return redirect("author/".$author->id."/edit");
        //bu şimdilik çalışmayacak, return demek zorunda da değildim, sadece executionın bittiğinden emin olmak için koydum
    }

    //displays the form to edit an existing author record
    public function edit($id) {
        $author = Author::findOrFail($id);
        // $author->name = "Ümitcan";
        // dd($author);
        // Bu phpmyadmindekini değiştirmedi ama local'deki objeyi değiştirdi

        return view("admin/author/edit", compact("author"));
        
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            "name" => "required"
        ]);

        // select an existing object Autor from the database 
        $author = Author::findOrFail($id);

        // fill the object from the request
        $author->name = $request->input("name");
        //$request = $_POST VE $_GET, istersen hala bunları kullanabilirsin

        // store the filled object into the database into table "authors", BUT updating
        $author->save();
        
        session()->flash('success_message', 'Success!');

        // redirect somewhere
        return redirect("author/".$author->id."/edit");
        //bu şimdilik çalışmayacak, return demek zorunda da değildim, sadece executionın bittiğinden emin olmak için koydum
    }
}
