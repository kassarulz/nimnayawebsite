<!DOCTYPE html>
<html>
<head>
<style>
#teachers{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#teachers td, #teachers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#teachers tr:nth-child(even){background-color: #f2f2f2;}

#teachers tr:hover {background-color: #ddd;}

#teachers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>

<body>
<h1><a href="{{url('/pdfsA1')}}" > Download pdf</a></h1>
<table id="teachers">
  
<caption>Teacher Details</caption>
<tr>
<td>Name</td>
<td> lname    </td>
<td> email    </td>
<td> phone    </td>
<td> school    </td>


</tr>
@foreach($users as $user)

<tr> 
    
     <td>{{ $user->name}}</td>
     <td>{{ $user->lname}}</td>
      <td>{{ $user->email}}</td>
 <td>{{ $user->phone}}</td>
  <td>{{ $user->school}}</td> 
     
@endforeach

</tr>
</table>
</table>

</body>
</html>
