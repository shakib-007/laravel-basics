@extends('layout')

@section('content')
<table border="1" style="width:100%" >
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
        <th>Operation</th>
    </tr>
    
    @foreach ( $students as $student )
        <tr>
            <td>{{$student -> id}}</td>
            <td>{{$student -> name}}</td>
            <td>{{$student -> age}}</td>
            <td>{{$student -> city}}</td>
            <td>{{$student -> country}}</td>

            <td><a href="/student/edit/{{$student->id}}" style="background-color:rgb(140, 228, 179);">Edit</a></td>
            <td><a href="/student/delete/{{$student->id}}" style="background-color:rgb(140, 228, 179);">Delete</a></td>  
        </tr>
    @endforeach
    
</table>
@endsection