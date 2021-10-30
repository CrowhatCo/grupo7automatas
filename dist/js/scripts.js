var objFiles;
var objForm1;
var objForm2;

var objContentResultAjax;
var automata

function prepareUpload(type){
    automata = type;
    objFiles = $('#fileCSV'+automata)[0].files;
    //console.log(objForm);
    window['objForm'+type].submit();
}
function uploadFiles(event){
    event.stopPropagation();
    event.preventDefault();
    var myForm = document.getElementById('form-carga'+automata);
    var objData = new FormData(myForm);
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
            //console.log(data);
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

    term = term+' ';
    $.ajax({
        url: "functions.php?operar="+type+"&term="+term,
        type: 'POST',
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function(){
        },
        success: function(data, textStatus, jqXHR){
            //console.log(data);
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
    objForm1 = $("#form-carga1");
    objForm1.on('submit', uploadFiles);
    objForm2 = $("#form-carga2");
    objForm2.on('submit', uploadFiles);
});