<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.btn{
  padding : 5px;
  background-color:   #1ad1ff;
  border-radius :5px;
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
  background-color:  #ccffeb;
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
    td = tr[i].getElementsByTagName("td")[2];
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
<body style="background-color :  #4dffb8">

<h1 style="text-align: center;">Active Tutors </h1>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Serch By Subject" title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:30%;">Tutor Name</th>
    <th style="width:20%;">Paid Amount</th>

<th style="width:20%;"Date</th>
    
    
  </tr>
 @for($i=0; $i != count($user); $i++)
  <tr>
    <td>{{$user[$i]->tutor_name}}</td>
    <td>{{$user[$i]->amount}}</td>
    <td>{{$user[$i]->date}}</td>
    
    
  
   
  </tr>
@endfor
</table>






</body>
</html>
