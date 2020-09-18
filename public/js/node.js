$(document).ready(function(){

	$("#load").click(function(){
		loadData();
	});

		function loadData()
	{
		$.ajax({
			url:"http://localhost:3000/userlist",
			method:"get",
			
			complete:function(xmlHttp,status){
				if(xmlHttp.status==200)
				{
					var data=xmlHttp.responseJSON;
					var str='';
					for (var i = 0; i < data.length; i++) {
						str+="<tr><td>"+data[i].id+"</td><td>"+data[i].username+
						"</td><td>"+data[i].password+"</td><td>"+data[i].email+
						"</td><td>"+data[i].type+"</td><td>"
						
						  
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
