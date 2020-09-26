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
   <a href="/payment">Back</a>|
      <a href="/logout">Logout</a><br> |<br>
         <a href="/tutorpdf">Download pdf</a><br>

<h2 style="text-align: center;">All Tutors payment Information </h2>
<form>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter ID here.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:10%;">Tuor ID</th>
    <th style="width:20%;">Tutor Name</th>
    <th style="width:20%;">Subject</th>
    <th style="width:20%;">Avtive Status</th>
    <th style="width:10%;">Payer ID</th>
    <th style="width:20%;">Ammount</th>
   
  </tr>
 @for($i=0; $i != count($users); $i++)
  <tr>
    <td>{{$users[$i]->reciverttid}}</td>
    <td>{{$users[$i]->name}}</td>
    <td>{{$users[$i]->subject}}</td>
    <td>{{$users[$i]->activestatus}}</td>
    <td>{{$users[$i]->payerssid}}</td>
    
    <td>{{$users[$i]->amount}}</td>
    
    
  </tr>
@endfor
</table>





</form>
</body>
</html>
