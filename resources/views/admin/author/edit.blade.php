
@extends("admin/layout", [
  "title" => "create a new author"
])
<!-- Burada variable yolladım layout.blade.php'e -->

@section("content")
<!-- content yerine ne yazarsan yaz. -->

  @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <!-- ilk başta $error objesi yine vardı ama boştu, bu if döngüsü de geçti gitti, sonra butona tıklayınca (girdi alanı boşken) store methodu çalıştı, store methodunun validate'inden geçemedi bu ve $error'un içi doldu, yine aynı sayfaya redirect oldu ama $error mesajını da yanında taşıyarak. Sonra tekrardan bu sayfanın başına geldik ama bu sefer if döngüsünü ggeçip gitmedik, çünkü $error objesi boş değil artık, yukarıdaki döngünün içine girdik, çalıştırdık, hata mesajlarını yazdırıdk.  -->

  çalışıyo!!

  @if(Session::has('success_message'))
    <div class="alert alert-success">
        {{ Session::get('success_message') }}
    </div>
  @endif



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

      @if ($errors->has("name"))
        THIS FIELD CONTAINS ERRORS:

        <ul>
            @foreach ($errors->get("name") as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      @endif
      
      <input type="text" name="name" value="{{ old('name', $author->name) }}">

    </div>

    <div class="form-group">

      <input type="submit" value="save">
    
    </div>
  </form>

@endsection 