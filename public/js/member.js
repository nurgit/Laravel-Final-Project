$(document).ready(function() {

    $("#load").click(function() {
        loadData();
    });
    $("#delete").click(function() {
        deleteData();
    });
    $("#Edit").click(function() {
        editData();
    });
    $("#save").click(function() {
        postData();
    });
    $("#Create").click(function() {
        creatediv();
    });
    $("#update").click(function() {
        updateData();
    });

    function loadData() {
        $.ajax({
            url: "http://localhost:56895/api/flatmembers",
            method: "get",

            complete: function(xmlHttp, status) {
                if (xmlHttp.status == 200) {
                    var data = xmlHttp.responseJSON;
                    var str = '';
                    for (var i = 0; i < data.length; i++) {
                        str += "<tr><td>" + data[i].id + "</td><td>" + data[i].fullname +
                            "</td><td>" + data[i].flat_no +
                            "</td><td>" + data[i].relation + "</td><td>" + data[i].photo +
                            "</td><td>" + data[i].user_id + "</td><td>" + data[i].status +
                            "</td></tr>";
                    };

                    $("#list tbody").html(str);

                    createdivhide();

                } else {
                    $("#msg").html(xmlHttp.status + ":" + xmlHttp.statusText);
                }
            }
        });

    }

    function deleteData() {
        var id = $("#memberid").val();
        $.ajax({
            url: "http://localhost:56895/api/flatmembers/" + id,
            method: "delete",
            complete: function(xmlHttp, status) {
                if (xmlHttp.status == 204) {
                    $("#msg").html("servant Deleted");
                    loadData();
                } else {
                    $("#msg").html(xmlHttp.status + ":" + xmlHttp.statusText);
                }
            }
        });
    }

    function editData() {
        var id = $("#memberid").val();
        updatediv();
        $.ajax({
            url: "http://localhost:56895/api/flatmembers/" + id,
            method: "get",

            complete: function(xmlHttp, status) {
                if (xmlHttp.status == 200) {
                    var data = xmlHttp.responseJSON;
                    var str = '';
                    document.getElementById("memberFullName").value = data.fullname;
                    document.getElementById("memberFlatNno").value = data.flat_no;
                    document.getElementById("memberRelation").value = data.relation;
                    document.getElementById("userId").value = data.user_id;
                    document.getElementById("status").value = data.status;

                    //$("#list tbody").html(str);
                    //createdivhide();

                } else {
                    $("#msg").html(xmlHttp.status + ":" + xmlHttp.statusText);
                }
            }
        });
    }

    function updateData() {
        var id = $("#memberid").val();
        $.ajax({
            url: "http://localhost:56895/api/flatmembers/" + id,
            method: "put",
            headers: {
                ContentType: "application/json"
            },
            data: {
                fullname: $("#memberFullName").val(),
                flat_no: $("#memberFlatNno").val(),
                relation: $("#memberRelation").val(),
                user_id: $("#userId").val(),
                status: $("#status").val()
            },
            complete: function(xmlHttp, status) {
                if (xmlHttp.status == 200) {
                    $("#msg").html("Servent Updated");
                    loadData();
                    createdivhide();
                    reset();



                } else {
                    $("#msg").html(xmlHttp.status + ":" + xmlHttp.statusText);
                }
            }
        });
    }


    function postData() {
        $.ajax({
            url: "http://localhost:56895/api/flatmembers",
            method: "post",
            headers: {
                ContentType: "application/json"
            },
            data: {
                fullname: $("#memberFullName").val(),
                flat_no: $("#memberFlatNno").val(),
                relation: $("#memberRelation").val(),
                user_id: $("#userId").val(),
                status: $("#status").val()
            },
            complete: function(xmlHttp, status) {
                if (xmlHttp.status == 200) {
                    $("#msg").html("Member Created");
                    loadData();
                    createdivhide();
                    reset();
                } else {
                    $("#msg").html(xmlHttp.status + ":" + xmlHttp.statusText);
                }
            }
        });
    }

    function creatediv() {

        var CreateDiv = document.getElementById("CreateDiv");
        var action = document.getElementById("action");
        var update = document.getElementById("update");
        var save = document.getElementById("save");

        CreateDiv.style.display = "block";
        action.style.display = "none";
        update.style.display = "none";
        save.style.display = "block";

        reset();

    }

    function updatediv() {

        var CreateDiv = document.getElementById("CreateDiv");
        var action = document.getElementById("action");
        var update = document.getElementById("update");
        var save = document.getElementById("save");

        CreateDiv.style.display = "block";
        action.style.display = "none";
        update.style.display = "block";
        save.style.display = "none";

    }

    function createdivhide() {

        var CreateDiv = document.getElementById("CreateDiv");
        var action = document.getElementById("action");

        CreateDiv.style.display = "none";
        action.style.display = "block";

    }

    function reset() {
        document.getElementById("memberFullName").value = "";
        document.getElementById("memberFlatNno").value = "";
        document.getElementById("memberRelation").value = "";
        document.getElementById("userId").value = "";
        document.getElementById("status").value = "";
        document.getElementById("Edit").value = "";
    }
















});