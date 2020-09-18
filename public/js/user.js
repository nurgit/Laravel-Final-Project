$(document).ready(function(){

	$("#load").click(function(){
		loadData();
	});

		function loadData()
	{
		$.ajax({
			url:"http://localhost:56895/api/users",
			method:"get",
			
			complete:function(xmlHttp,status){
				if(xmlHttp.status==200)
				{
					var data=xmlHttp.responseJSON;
					var str='';
					for (var i = 0; i < data.length; i++) {
						str+="<tr><td>"+data[i].id+"</td><td>"+data[i].fullname+
						"</td><td>"+data[i].fathersname+"</td><td>"+data[i].flat_no+
						"</td><td>"+data[i].type+"</td><td>"+data[i].phonenumber+
						// "</td><td>"+data[i].nidnumber+"</td><td>"+data[i].dateofbirth+
						"</td><td>"+data[i].email+"</td><td>"
						// <td>"+data[i].isemailveryfied+
						// "</td><td>"+data[i].activationcode+"</td><td>"+data[i].password+
						// "</td>
						 // +data[i].photo+"</td><td>"
						  +data[i].status+
						"</td></tr>";
					};

					$("#list tbody").html(str);

				}
				else
				{
					$("#msg").html(xmlHttp.status+":"+xmlHttp.statusText);
				}
			}
		});

}
	});
