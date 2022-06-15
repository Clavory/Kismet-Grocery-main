@extends('layouts.app')
@section('Title', 'Products')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/nostalgia.font" rel="stylesheet">
<body>
    @if(Session::has('success'))
    <div class ="row" style="display: flex; justify-content: center;">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
    

<div class="row row-cols-1 row-cols-md-4 g-6">
<?php foreach ($products as $product): ?>
    <div class="card">
    <div id="container">

  <img src="{{ $product->imagePath }}" class="card-img-top" alt="...">
    <div id="overlay">
        <div id="text">
        <input type="hidden" name="product_id" value="<?php echo $product->getId(); ?>" />
        <h5 id="title_card">{{ $product->title }} </h5>
    <p>{{ $product->description }}<br/>
        <br><span style="color: white; font-weight: bold;">PHP {{ $product->price }}</span>
        <a href = "/add-to-cart/{{ $product->id }}"><button class="btn btn-primary" id ="button_style">
            ADD TO CART
        </button></a>
    </p>
        </div>
    </div>
</div>
</div>
<?php endforeach; ?>
  </div>
  </div>
</body>
@endsection