$("#form1").submit(function(e){
    e.preventDefault();

    $("#Modal1 .btn-close").click();

    $.post("send.php", {
        name: $("#send-name").val(),
        phone: $("#send-phone").val()
    }, function(res){
        if(res == "Успех"){
            let myModal = new bootstrap.Modal(document.getElementById('Modal2'))
            myModal.show();
            $("#send-name").val("");
            $("#send-fio").val("");
            $("#send-phone").val("");
            $("#send-phone1").val("");
        }
        else alert(res);
    })
});

$("#form2").submit(function(e){
    e.preventDefault();
    $.post("send.php", {
        name: $("#send-fio").val(),
        phone: $("#send-phone1").val()
    }, function(res){
        if(res == "Успех"){
            let myModal = new bootstrap.Modal(document.getElementById('Modal2'))
            myModal.show();
            $("#send-name").val("");
            $("#send-fio").val("");
            $("#send-phone").val("");
            $("#send-phone1").val("");
        }
        else alert(res);
    })
});