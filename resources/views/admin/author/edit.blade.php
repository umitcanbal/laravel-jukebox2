
@extends("admin/layout", [
  "title" => "create a new author"
])
<!-- Burada variable yolladım layout.blade.php'e -->

@section("content")
<!-- content yerine ne yazarsan yaz. -->

  çalışıyo!!

@endsection 

  @if ($author->id !==null) 
    <form action="{{ action('AuthorController@update', ['id' => $author->id]) }}" method="post">
        @method("put")
  @else 
    <form action="{{ action('AuthorController@store') }}" method="post">
  @endif

  <!-- actionın içine sadece /author yazsam da olurdu -->
  <!-- iyi anla burayı!!!! bu route'un yaptığının tam tersini yapıyo, action'ı görünce URL'ye gidiyo, route'da normalde tam tersi oluyo, URL'i görünce actionı aktive ediyo -->
    @csrf

    <div class="form-group">

      <label for="">Name</label>
      <input type="text" name="name" value="{{ $author->name }}">

    </div>

    <div class="form-group">

      <input type="submit" value="save">
    
    </div>
  </form>