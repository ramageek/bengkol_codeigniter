$(document).ready(function(){
    $(".closebutton").click(function(){
        $("#myAlert").alert("close");
        location.reload();
    });
});