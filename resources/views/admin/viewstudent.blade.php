<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f5f5f5;
}
</style>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toLowerCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toLowerCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</head>
<body style="background-color : #f1c30f">
   <a href="Admin/adminstudent">Back</a>|
      <a href="/logout">Logout</a><br>

<h2 style="text-align: center;">All User's Information </h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter ID here.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:10%;">Student ID</th>
    <th style="width:10%;">Login ID</th>
    <th style="width:20%;">Name</th>
    <th style="width:20%;">Class </th>
    <th style="width:10%;">Package ID</th>
    <th style="width:30%;">Action</th>
  </tr>
 @for($i=0; $i != count($users); $i++)
  <tr>
    <td>{{$users[$i]->student_id}}</td>
    <td>{{$users[$i]->login_id}}</td>
    <td>{{$users[$i]->name}}</td>
    <td>{{$users[$i]->class}}</td>
    <td>{{$users[$i]->package_id}}</td>
    
    <td>
      <a href="/Admin/editstudent/{{$users[$i]->student_id}}">Edit</a> |
      <a href="/Admin/deletestudent/{{$users[$i]->student_id}}">Delete</a>
     </td>
  </tr>
@endfor
</table>






</body>
</html>
