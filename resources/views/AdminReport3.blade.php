<!DOCTYPE html>
<html>
<head>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
</head>
<body>
<h1><a href="{{url('/pdfsA3')}}" > Download pdf</a></h1>
<table>
<caption>Student Details</caption>
<tr>
<td>Name</td>
<td> lname    </td>
<td>subject</td>
<td>marks</td>



</tr>
@foreach($users as $user)

<tr> 
	  
     <td>{{ $user->name}}</td>
     <td>{{ $user->lname}}</td>

   
	   
@endforeach

</tr>
</table>

</body>
</html>