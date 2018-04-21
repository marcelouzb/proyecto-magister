/***** Author: Ing. Emanuel Torres C.
 			 Descriptions: se definen las funciones que determinan los parametros del plugin "file input"*****/

$(document).ready(function() {
    $([
        "#img_perfil_profesor_1",
        "#img_perfil_profesor_2",
        "#img_perfil_profesor_3",
        "#img_perfil_alumno_1",
        "#img_perfil_alumno_2",
        "#img_perfil_alumno_3"
    ]).fileinput({
        showCaption: true,
        allowedFileExtensions: ["jpg", "png"],
        showUpload: false,
        showRemove: false,
        showCancel: false,
        removeTitle: true
    });
    var btnCust =
        '<button type="button" class="btn btn-secondary" title="Add picture tags" ' +
        "onclick=\"alert('Call your custom code here.')\">" +
        '<i class="glyphicon glyphicon-tag"></i>' +
        "</button>";
    $("#avatar-2").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        showBrowse: false,
        browseOnZoneClick: true,
        removeLabel: "",
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: "Cancel or reset changes",
        elErrorContainer: "#kv-avatar-errors-2",
        msgErrorClass: "alert alert-block alert-danger",
        defaultPreviewContent: '<img src="img/user1_bn.jpg" alt="Your Avatar"><h6 class="text-muted">Click to select</h6>',
        layoutTemplates: { main2: "{preview} " + btnCust + " {remove} {browse}" },
        allowedFileExtensions: ["jpg", "png", "gif"]
    });
});