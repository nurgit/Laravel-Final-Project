<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;

}

/* Header/Blog Title */
.header {
  padding: 15px;
  font-size: 30px;
  text-align: center;
  background: rgb(175, 172, 172);
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 100%;
  position: center;
}




/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 1366PX) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}

.backLogout{
  text-align: left;

  margin-left: 30px;
  padding-top: 20px;

}
.title{
  text-align: center;

}

</style>
</head>
<body>


        <div class="backLogout">
          <a href="/student">Back</a>|
          <a href="/logout">Logout</a>

          <a href="{{ url('tutor/readBlog/pdf') }}" class="btn btn-danger">Convert into PDF</a>

        </div>


<div class="row">
    @for($i=0; $i != count($user); $i++)
  <div class="leftcolumn">
    <div class="card">
      <h2 class="title">{{$user[$i]->article_name}}	</h2>
      <p>	<br>{{$user[$i]->article}}</p>
      <h4><br><b>Author:</b><i>	{{$user[$i]->author}}</i></h5>
    </div>

  </div>


  @endfor

     <!-- <table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>SUBJECT</th>



		</tr>

		<% for(var i=0; i < userList.length; i++){ %>
		<tr>
			<td><%= userList[i].articlename %></td>
			<td><%= userList[i].author %></td>
			<td><%= userList[i].article %></td>


		</tr>
		<% } %>
	</table> -->

  </div>
</div>



</body>
</html>
