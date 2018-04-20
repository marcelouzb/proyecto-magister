/***** Author: Ing. Emanuel Torres C.
 			 Descriptions: se definen las funciones que determinan los parametros del plugin "file input"*****/


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