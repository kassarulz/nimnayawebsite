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
<h1><a href="{{url('/pdfsS1')}}" > Download pdf</a></h1>

<p><font face="verdana" color="green">{{Auth::user()->name}}  {{Auth::user()->lname}}</font></p><br><br>

<caption>Subjects of the student</caption>
<table>
	<tr>
		<td>Subject name</td>
		<td>id</td>
	</tr>
@foreach($subject1 as $subject)
     <tr>   
   <td>{{ $subject->subject_name}}</td>
    <td>{{ $subject->subject_id}}</td>
     @endforeach
 </tr>
</table>
</body>
</html>