@extends("theme2")
@section("content")
<div class="bg-image"
  style="
    background-image: url('https://previews.123rf.com/images/peshkov/peshkov1701/peshkov170100076/69328773-front-view-of-modern-library-interior-with-equipment-and-city-view-3d-rendering.jpg');
    height: 200vh; "
>

<br>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 ">
 </div>
 <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 ">
 <br><br>
 <table class="table">
 
<tr><th scope="row">librarybook Category</th>
    <th scope="row">librarybook Id</th>
    <th scope="row">librarybook Name</th>
    <th scope="row">librarybook Price</th>
    <th scope="row">librarybook Description</th>
    <th scope="row"><center>image</center></th>
    <th>#</th>
    </tr>
<form action="update" method="post" >
@csrf    
@foreach($prod as $prods)

<tr class="table-primary">
   
    <td > <input name="librarybookCategory" type="text" class="form-control" value="{{$prods->librarybookCategory}}">  <span class="text-danger">@error('librarybookCategory'){{$message}} @enderror  </span></td>

    <td><input name="librarybookId" type="text" class="form-control" value="{{$prods->librarybookId}}"> <span class="text-danger">@error('librarybookId'){{$message}} @enderror  </span></td>
    <td><input name="librarybookName" type="text" class="form-control" value="{{$prods->librarybookName}}"> <span class="text-danger">@error('librarybookName'){{$message}} @enderror  </span></td>
    <td><input name="librarybookPrice" type="text" class="form-control" value="{{$prods->librarybookPrice}}"> <span class="text-danger">@error('librarybookPrice'){{$message}} @enderror  </span></td>
    <td><input name="librarybookDescription" type="text" class="form-control" value="{{$prods->librarybookDescription}}"> <span class="text-danger">@error('librarybookDescription'){{$message}} @enderror  </span></td>
    
    <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}"></td>

   <td><button class="btn btn-primary" type="submit" >SAVE</button><input type="hidden" name="id"  value="{{$prods->id}}"/></td>
   
</tr>

@endforeach
</form> 
</table>
</div>
 <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
</div>
</div>
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       
</body>
</html>