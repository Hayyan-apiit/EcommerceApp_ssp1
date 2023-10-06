<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')
    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
            color: #000;
        }

        .input_color
        {
            color: black;
            width: 400px;
        }

        .input_color1
        {
          color: #000;
          background-color: black;
        }

        .center
        {
          margin: auto;
          width: 800px;
          text-align:center ;
          margin-top: 30px;
          border: 3px solid green;
          color: black; 
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
                <h2 class="h2_font">Add Category</h2>

                <form action="{{url('/add_category')}}" method="POST">

                    @csrf
                    <input class="input_color" type="text" name="category" placeholder="Eg: write category name"><br><br>

                    <input class="input_color1" type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form>
            </div>


            <table class="center">
    <tr>
        <td>Category Name</td>
        <td>Action</td>
        <td>Update</td>
    </tr>

    @foreach($data as $data)

    <tr>
      <td>{{$data->catagory_name}}</td>
      <td>
        <a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete_catagory', $data->id)}}">Delete
      </td>
  
      <td>
        <a class="btn btn-success" href="{{url('delete_catagory', $data->id)}}">Update
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