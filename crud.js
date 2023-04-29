//select operation
function showdata() {
    $.ajax({
        url: "crud.php",
        type: "POST",
        data: { flag: "select" },
        success: function (data) {
            $("#showdata").html(data)
        }
    })
}

showdata();

//insert operation
$("#add").click(function () {
    var name1 = $("#name").val();
    var mail1 = $("#mail").val();
    $.ajax({
        
        url: "crud.php",
        type: "POST",
        data: { flag: "insert", name: name1, email: mail1 },
        success: function (data) {
            if (data == 1) {
                $("#name").val("");
                $("#mail").val("");
                showdata();
            } else {
                alert("sorry")
            }
        }
    })
})


//delete operation
$(document).on("click", ".delete-btn", function () {
    var id1 = $(this).data("id");
    
    $.ajax({
        
        url: "crud.php",
        type: "POST",
        data: { flag: "delete", id: id1 },
        success: function (data) {
            if (data == 1) {
                showdata();
            } else {
                alert("Sorry")
            }
        }
    })
})


//edit operation
$("#save").hide();
var id1;
$(document).on("click", ".edit-btn", function () {
    $("#add").hide();
    $("#save").show();
    id1 = $(this).data("id");
})
$("#save").click(function () {
    var name1 = $("#name").val();
    var mail1 = $("#mail").val();
    $.ajax({
        url: "crud.php",
        type: "POST",
        data: { flag: "update", id: id1, name: name1, email: mail1 },
        success: function (data) {
            if (data == 1) {
                showdata();
                $("#name").val("");
                $("#mail").val("");
                $("#save").hide();
                $("#add").show();
            } else {
                alert(data)
                $("#edit").hide();
            }
        },
    })
})