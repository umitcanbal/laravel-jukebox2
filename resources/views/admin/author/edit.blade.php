
@extends("admin/layout", [
  "title" => "create a new author"
])
<!-- Burada variable yolladım layout.blade.php'e -->

@section("content")
<!-- content yerine ne yazarsan yaz. -->

  çalışıyo!!

@endsection 

<form action="" method="post">
  @csrf

  <div class="form-group">

    <label for="">Name</label>
    <input type="text" name="name" value="">

  </div>

  <div class="form-group">

    <input type="submit" value="save">
  
  </div>
</form>