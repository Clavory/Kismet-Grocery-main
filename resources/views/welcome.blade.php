@extends('layouts.app')
@section('Title', 'Kismet Grocery')
@section('content')
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/nostalgia.font" rel="stylesheet">
    <title>Home - Kismet Grocery</title>
</head>
  <body>
    <table class="products_table">
      <tr>
        <th><h1>Featured Products</h1></th>
      </tr>
      <tr>
      <td><a href = "/products"><img src="/images/Condiments.png" alt="every_products" class="each_product"></a></td>
      <td><a href = "/products"><img src="/images/FrozenFood.png" alt="every_products" class="other_product"></a></td>
      <td><a href = "/products"><img src="/images/PersonalCare.png" alt="every_products" class="other_product"></a></td>
      </tr>
    </table>
    </div>
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <style>

      /*-------HOME-------*/

      .index {
        margin-top: 5px;
        justify-content: center;
      }

      .index img {
        width: 70%;
        height: 80%;
        margin-left: 15%;
        position: absolute;
      }

      .categories {
        position: relative;
        margin-top: 480px;
        margin-bottom: 50px;
      }


      table {
        margin-left: auto;
        margin-right: auto;
      }

    

      .categories h2{
        font-family: 'Nostalgia', sans-serif;
        font-size: 30px;
        font-weight: 600;
        color: rgb(0, 0, 0);
        margin-left: 5px;
      }

      .td_size {
        width: 60px;
        height: 50px;
      }

      .each_category {
        width: 150px;
        height: 150px;
        transition: 0.2s;
      }

      .other_category {
        width: 150px;
        height: 110px;
        margin-left: 50px;
        transition: 0.2s;
      
      }

      .categories img[alt="categories"]:hover {
        transform: scale(0.8);
        transition: 0.2s;}


      .products img[alt="products"]{
        width: 70%;
        height: 60%;
        left: 10%;
        position: absolute;
      }
      
      .products h1{
        font-family: 'Nostalgia', sans-serif;
        font-size: 60px;
        font-weight: 600;
        color: rgb(255, 255, 255);
        margin: 0px;
        position: absolute;
        left: 400px;
        top: 1070px;
        text-shadow: 1px 1px 10px #000000;
      }

      .products_menu h2{
        font-family: 'Nostalgia', sans-serif;
        font-size: 30px;
        font-weight: 600;
        color: rgb(0, 0, 0);
        margin-left: 5px;
      }

      .each_product {
        width: 350px;
        height: 350px;
        transition: 0.2s;
      }

      .other_product {
        width: 350px;
        height: 350px;
        margin-left: 50px;
        transition: 0.2s;
      }

      .every_products {
        position: relative;
        margin-top: 500px;
        margin-bottom: 50px;
      }

      .products_menu img[alt="every_products"]:hover {
        transform: scale(0.8);
        transition: 0.2s;}

      .{
        text-align: center;
      }


    </style>
  </body>
</html>
@endsection