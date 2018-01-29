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
<h1><a href="{{url('/pdfsS3')}}" > Download pdf</a></h1>
<table>
<caption>Student Details</caption>
<tr>
<td>Name</td>
<td> lname    </td>
<td>subject</td>
<td>marks</td>



</tr>


<tr> 
	  
     <td>{{ $user->name}}</td>
     <td>{{ $user->lname}}</td> 
       <td><img src="/uploads/avatars/{{$user->avatar}}" style="width:150px; height:150px; float:left; border-radius: 50px; margin-right: 25px; "></td>
       <td>{{$user->subject}}</td>








</tr>
</table>

</body>
</html>