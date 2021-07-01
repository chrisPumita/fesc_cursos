function listaDeptosDB() {
    var data;
    $.ajax(
        {
            url: "./control/list_depto.php",
            dataType: "html",
            success: function (resposnse)
            {
                data = JSON.parse(resposnse);
                callback(data);
            }
        }
    );
}


