<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/puplic">
    
    @include('admin.css')
    <style type="text/css">
         /* Apply black color to all text elements */
    body {
        color: black;
    }

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .font_size{
            font-size: 40px;
            color: black;
            padding-bottom: 40px;
 
        }

        .text_color
        {
            width: 400px;
        }

        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_design
        {
            padding-bottom: 15px;
        }

        .ig
        {
            height: 100px;
            width: 100px;
            margin: auto;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

          @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('message') }}
    </div>
@endif




            <div class="div_center">
                <h1 class="font_size">Update Garment</h1>

                <div class="table-container">


      <form action="{{url('/update_confirm',$store->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
  <table>
    <tr>
      <td>
        <div class="div_design">
          <label for="title">Product title</label>
          <input class="text_color" type="text" name="title" id="title" placeholder="Write a title" required="" value="{{$store->title}}">
        </div>
      </td>
      <td>
  <div class="div_design">
    <label for="description">Product Description</label>
    <input class="text_color" type="text" name="description" id="description" placeholder="Write a description" required="" value="{{$store->description}}">
  </div>
</td>

    </tr>
    <tr>
      <td>
        <div class="div_design">
          <label for="price">Product Price</label>
          <input class="text_color" type="number" name="price" id="price" placeholder="Input price" required="" value="{{$store->price}}">
        </div>
      </td>
      <td>
        <div class="div_design">
          <label for="dis_price">Discount price</label>
          <input class="text_color" type="number" name="dis_price" id="dis_price" placeholder="Write a title" required="" value="{{$store->discount_price}}">
        </div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="div_design">
          <label for="quantity">Product Quantity</label>
          <input class="text_color" type="number" min="0" name="quantity" id="quantity" placeholder="Input Quantity" required="" value="{{$store->quantity}}">
        </div>
      </td>
      <td>
        <div class="div_design">
          <label for="category">Product Category</label>
          <select class="text_color" name="category" id="category" required>
            <option value="{{$store->catagory}}" selected="">{{$store->catagory}}</option>

               @foreach($category as $category)
            <option value="{{$category->catagory_name}}">{{$category->catagory_name}}</option>  
        @endforeach


 

          </select>
        </div>
      </td>
    </tr>
    <tr>

      <td colspan="2">
        <br><br>
        <div class="div_design">
          <label for="image">Poduct Image Here</label>
          <img class="ig" src="/add_garment/{{$store->image}}">
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <br><br>
        <div class="div_design">
          <label for="image">Change Image Here</label>
          <input type="file" name="image" required="">
        </div>
      </td>
    </tr>
    <td colspan="2">
        <br><br>
        <div class="div_design">
          <input type="submit" value="Update" class="btn btn-primary" style="background-color: black;">
        </div>
      </td>

    </tr>
  </table>


      
</form>


</div>

               
            </div>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>