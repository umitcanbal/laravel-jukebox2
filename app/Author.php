<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function videos() {

        return $this->hasMany(Video::class);

    }

    public function genres() {
        return $this->belongsToMany(Genre::class);

        // return $this->belongsToMany(Genre::class, "author_genre", "author_id", "genre_id");
        //böyle de yazabiliriz ama iki üstteki kod zaten bunun yerine geçiyo, çünkü isimlendirmeyi çok düzgün yaptık. yoksa author_genre table'ın adı, author_id o table'daki bi kolonun adı ama aynı zamanda başka bi table'a referans gösteriyo, genre_id de aynı şekilde.
    }
}
