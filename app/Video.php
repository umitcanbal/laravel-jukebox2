<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function author(){
        // return $this->belongsTo("App\Author");
        // return $this->belongsTo(\App\Author::class);
        return $this->belongsTo(Author::class);


        //Burada iki table arasındaki ilişkiyi deklare ediyorum, Author authors table'ını temsil ediyo falan

        //git şimdi Author Modelında bu ilişkiyi tersten yaz ki şöyle olacak;
        //return $this->hasMany(Video::class);
        //fonksiyonun adı da çoğul! niye tam bilmiyorum.

        //laravel eloquent relations diye googledan arat, Honza Author.php'ye çok güzel de bi örnek koydu
    }

    public function genres() {
        return $this->belongsTo(Genre::class);
    }
}
