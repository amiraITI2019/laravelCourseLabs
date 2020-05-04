@extends('layouts.app')
<style>
   li{
        list-style: none;
    }
</style>
@section('content')
<div class="container">

<table class="table  table-striped table-primary">
<tr>
<td>
User name 
</td>
<td>
<input type="text" name="username" id="username" value="{{$user->name}}
" disabled>
</td>
<td>
</td>
</tr>
<tr>
<td>
Email:  
</td>
<td >
<h5 id="email">{{$user->email}}</h5>

</td>
</tr>
<tr>
<td>
Address:  
</td>
<td>
<textarea name="" id="" cols="30" rows="5" disabled>
{{$user->address}}</textarea>

</td>

</tr>
<tr>
<td>
Mobile:  
</td>
<td>
   
<ul>
<table>
@foreach($user->mobiles()->get("mobile") as $mobile)
<tr>
<li>
 
        <td>
{{$mobile["mobile"]}}
</td>
<td>
<a href="/mobile/delete/{{$mobile["mobile"]}}" class="btn btn-danger">
        Delete
    </a>
</td>
<td>
    <a href="/mobile/update/{{$mobile["mobile"]}}" class="btn btn-danger">
        update
    </a>
</td>

</li></tr>

@endforeach

</table>
</ul>

</td>
<td>
    <a class="btn btn-primary">
        Add Mobile

    </a>
</td>

</tr>
</table>
<button class="btn btn-primary" type="submit">Edit</button>
</div>
@endsection
