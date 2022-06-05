@extends('layout')

@section('content')
<form action="/student/store" method="post">
    @csrf
    <table>
        <tr>
            <td>Name : </td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Age : </td>
            <td><input type="number" name="age" id=""></td>
        </tr>
        <tr>
            <td>City : </td>
            <td><input type="text" name="city" id=""></td>
        </tr>
        <tr>
            <td>Country : </td>
            <td><input type="text" name="country" id=""></td>
        </tr>
    </table>
    
    <input type="submit" name="Submit">
</form>
@endsection