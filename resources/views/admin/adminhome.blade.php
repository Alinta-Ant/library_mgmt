@extends("theme2")

@section("content")

<div class="bg-image"
  style="
    background-image: url('https://d341ezm4iqaae0.cloudfront.net/assets/2020/06/30160014/librarian-scaled.jpg');
    height: 200vh; "
>
<br>

  <table class="table table-light table-responsive">
  <tr>
  
    <td>CUSTOMER ID</td>
    <td>CUSTOMER NAME</td>
    <td>BOOK ID</td>
    <td>BOOK NAME</td>
    <td>BOOK CATEGORY</td>
    <td>BOOK PRICE</td>
    <TD>STATUS</TD>
    <td>ISSUE DATE</td>
    <td>RETURN DATE</td>
  </tr>

  @foreach($report as $i)

  <tr>
    
    <td>{{$i->c_id}}</td>
    <td>{{$i->name}}</td>
    <td>{{$i->librarybookId}}</td>
    <td>{{$i->librarybookName}}</td>
    <td>{{$i->librarybookCategory}}</td>
    <td>{{$i->librarybookPrice}}</td>
    <td>{{$i->status}}</td>
    <td>{{$i->created_at->format('d-m-Y')}}</td>
    <td>{{$i->return}}</td>
  </tr>
 
@endforeach 
  </table>

</div>
</div> 
</div>
</div>


@endsection