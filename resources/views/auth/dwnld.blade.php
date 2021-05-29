<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<body background="https://images.pexels.com/photos/5797898/pexels-photo-5797898.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
@extends("themefaculty")

@section("content")
<table class="table">
    <thead>
        <td>Emailid</td>
        <td>Course</td>
        <td>File</td>
        <td>Grade</td>
        
    </thead>

@foreach($upload as $row)
<form action="/grade/{{$row->id}}" method="post">
@csrf
<tr>
    <td>{{$row->emailid}}</td>
    <td>{{$row->course}}</td>
   
    <td><a href="{{ asset('assets/file/'.$row->file) }}">Download</a></td>
    <td>      
     <select name="grade" class="form-select" aria-label="Default select example">
  <option selected>Evaluation</option>
  <option value="A+">A+</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select></td>
<td><button type="submit" class="btn btn-success">Submit</button></td>
</tr>
</form>
@endforeach
</table>
    


@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>