var objFiles;
var objForm;

var objContentResultAjax;
var automata

function prepareUpload(type){
    automata = type;
    objFiles = $('#fileCSV')[0].files;
    objForm.submit();
}
function uploadFiles(event){
    event.stopPropagation();
    event.preventDefault();

    var objData = new FormData();
    $.each(objFiles, function(key, value){
        objData.append(key, value);
    });

    $.ajax({
        url: "functions.php?operar="+automata,
        type: 'POST',
        data: objData,
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function(){
        },
        success: function(data, textStatus, jqXHR){
            console.log(data);
            if($("#tabletoAppend").length!=0){
                $("#tabletoAppend").remove();
            }
            objContentResultAjax = $("#carga-content-result-ajax"+automata);
            objContentResultAjax.html(data);
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    });
}
function searchByterm(term, type){
    $.ajax({
        url: "functions.php?operar="+type+"&term="+term,
        type: 'POST',
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function(){
        },
        success: function(data, textStatus, jqXHR){
            console.log(data);
            if($("#tabletoAppend").length!=0){
                $("#tabletoAppend").remove();
            }
            objContentResultAjax = $("#carga-content-result-ajax"+type);
            objContentResultAjax.html(data);
        },
        error: function(jqXHR, textStatus, errorThrown){

        }
    });
}

$(document).ready(function(){
    objForm = $("#form-carga");
    objForm.on('submit', uploadFiles);
});