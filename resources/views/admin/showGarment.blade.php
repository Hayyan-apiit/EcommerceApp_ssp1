<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
    <style type="text/css">
         /* Apply black color to all text elements */
    body {
        color: black;
    }

    .center
    {
        margin: auto;
        width: 80%;
        border: 4px solid green;
        text-align: center;
        margin-top: 40px;
        font-size:20px ;
    }
    table,tr,th
    {
        border:4px solid green ;
    }

    .font_size
    {
        text-align: center;
        font-size: 40px;
        padding-top: 20px;
    }

    .img_size
    {
        width: 150px;
        height: 150px;
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

          <h2 class="font_size">Garment Update Display</h2>


          <table class="center">

          <tr>
            <th>Product title</th>
            <th>Description</th>
            <th>quantity</th>
            <th>Category</th>
            <th>Price</th>
            <th>Discount Price</th>
            <th>Product Image</th>
            <th>Delete</th>
            <th>Edit</th>

          </tr>

          @foreach($store as $store)

          <tr>
            <td>{{$store->title}}</td>
            <td>{{$store->description}}</td>
            <td>{{$store->quantity}}</td>
            <td>{{$store->catagory}}</td>
            <td>{{$store->price}}</td>
            <td>{{$store->discount_price}}</td>
            <td>
                <img class="img_size" src="/add_garment/{{$store->image}}">
            </td>

            <td>
            <a class="btn btn-danger" onclick="return confirm('Are You Sure to delete this Garment')"   href="{{url('delete_store' ,$store->id)}}">Delete</a>
            </td>

            <td>
            <a class="btn btn-success" href="{{url('update_store',$store->id)}}">Edit</a>
            </td>

          </tr>
          @endforeach



          </table>



          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>