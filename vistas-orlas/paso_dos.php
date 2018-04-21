<!DOCTYPE html>
<html>

<head>
    <title>Paso 2 - Añadir a personas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>

<body>
    <div class="box-header">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="button-box">
                <div class="number-box">
                    <h3 class="number-text"><span>1</span></h3>
                </div>
                <div class="paragraph-box">
                    <p class="paragraph">
                        Rellenar información básica de la Orla
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="button-box1">
                <div class="number-box">
                    <h3 class="number-text"><span>2</span></h3>
                </div>
                <div class="paragraph-box">
                    <p class="paragraph">
                        Añadir a personas
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="button-box">
                <div class="number-box">
                    <h3 class="number-text"><span>3</span></h3>
                </div>
                <div class="paragraph-box">
                    <p class="paragraph">
                        Elegir diseño
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="button-box">
                <div class="number-box">
                    <h3 class="number-text"><span>4</span></h3>
                </div>
                <div class="paragraph-box">
                    <p class="paragraph">
                        Vista previa y registro
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <center>
                <img class="img-responsive image-group" id="foto-a" src="/img/group-bottom.png">
            </center>
            <center>
                <img class="img-responsive image-group" id="foto-b" src="/img/group-bottom2.png">
            </center>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="box-paso2">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title-add">
                        <h3>Profesores</h3>
                    </div>
                    <form action="" method="post">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <div class="foto-box">
                                    <center>
                                        <img src="/img/user1_bn.jpg" class="photo-user" alt="foto usuario">
                                    </center>
                                    <input type="file" id="img_perfil_profesor_1" name="imagen[]" accept="image/*" class="estilo-file">
                                    <center>
                                        <p class="fa fa-plus-circle boton-file"></p>
                                    </center>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre completo" name="nombre[]" id="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apodo" name="apodo[]" id="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <div class="foto-box">
                                    <center>
                                        <img src="/img/user2_bn.jpg" class="photo-user" alt="foto usuario">
                                    </center>
                                    <input id="img_perfil_profesor_2" type="file" name="imagen[]" accept="image/*" class="estilo-file" />
                                    <center>
                                        <p class="fa fa-plus-circle boton-file"></p>
                                    </center>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre completo" name="nombre[]" id="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apodo" name="apodo[]" id="">
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <div class="foto-box">
                                    <center>
                                        <img src="/img/user3_bn.jpg" class="photo-user" alt="foto usuario">
                                    </center>
                                    <input type="file" id="img_perfil_profesor_3" name="imagen[]" accept="image/*" class="estilo-file" />
                                    <center>
                                        <p class="fa fa-plus-circle boton-file"></p>
                                    </center>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre completo" name="nombre[]" id="">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Apodo" name="apodo[]" id="">
                            </div>
                        </div>
                </div>
            </div>
            <center>
                <p class="fa fa-plus-circle button-more"></p>
            </center>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="title-add">
                        <h3>Alumnos</h3>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <div class="foto-box">
                                <center>
                                    <img src="/img/user4_bn.jpg" class="photo-user" alt="foto usuario">
                                </center>
                                <input type="file" id="img_perfil_alumno_1" name="imagen[]" accept="image/*" class="estilo-file" />
                                <center>
                                    <p class="fa fa-plus-circle boton-file"></p>
                                </center>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre completo" name="nombre[]" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apodo" name="apodo[]" id="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <div class="foto-box">
                                <center>
                                    <img src="/img/user5_bn.jpg" class="photo-user" alt="foto usuario">
                                </center>
                                <input type="file" id="img_perfil_alumno_2" name="imagen[]" accept="image/*" class="estilo-file" />
                                <center>
                                    <p class="fa fa-plus-circle boton-file"></p>
                                </center>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre completo" name="nombre[]" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apodo" name="apodo[]" id="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="form-group">
                            <div class="foto-box">
                                <center>
                                    <img src="/img/user6_bn.jpg" class="photo-user" alt="foto usuario">
                                </center>
                                <input type="file" id="img_perfil_alumno_3" name="imagen[]" accept="image/*" class="estilo-file" />
                                <center>
                                    <p class="fa fa-plus-circle boton-file"></p>
                                </center>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre completo" name="nombre[]" id="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apodo" name="apodo[]" id="">
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <p class="fa fa-plus-circle button-more"></p>
            </center>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 centrar">
                    <center>
                        <button type="submit" class="btn create-button">Guardar</button>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Link Google Fonts */
        
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,600');
        body {
            background-color: #D1E1EC;
        }
        /* Estilos cabecera */
        
        .box-heade {
            background-color: #DEDEDE;
            border-bottom: 3px solid #333;
            width: 100%;
            height: 328px;
            z-index: 999;
        }
        
        .button-box {
            background-color: #38a9ff;
            box-shadow: 2px 2px #C6C6C6;
            width: 200px;
            height: 50px;
            margin: 0 auto;
            transition: 300ms;
        }
        
        .button-box:hover {
            background-color: #888da8;
            transition: 300ms;
        }
        
        .button-box1 {
            background-color: #888da8;
            box-shadow: 2px 2px #C6C6C6;
            width: 200px;
            height: 50px;
            margin: 0 auto;
        }
        
        .number-box {
            position: absolute;
            display: inline-block;
            background-color: #fff;
            width: 50px;
            height: 50px;
        }
        
        .number-text {
            text-align: center;
            margin-top: 0px;
            font-size: 45px;
            font-family: 'Montserrat', sans-serif;
            color: #333;
            text-shadow: 1px 2px #C6C6C6;
        }
        
        .paragraph-box {
            background-color: transparent;
            position: absolute;
            display: inline-block;
            margin-left: 50px;
            width: 150px;
            height: 50px;
        }
        
        .paragraph {
            text-align: center;
            padding: 8px 5px 0px 5px;
            font-family: 'Montserrat', sans-serif;
            color: white;
            font-size: 12px;
        }
        
        .image-group {
            padding-top: 40px;
            z-index: 999;
        }
        /* Formulario paso 2 */
        
        .box-paso2 {
            border: 2px dashed #bbc0d5;
            background-color: white;
            border-radius: 4px;
            padding: 30px;
            margin-top: 40px;
            width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        
        .title-add {
            text-align: center;
            font-family: 'Montserrat', sans-serif;
        }
        
        .title-add h3 {
            font-size: 30px;
            color: #38a9ff;
            margin: 30px;
        }
        
        .button-more {
            font-size: 50px;
            color: #38a9ff;
            margin: 15px 30px;
        }
        
        .boton-file {
            position: absolute;
            font-size: 35px;
            color: rgb(56, 196, 255, .6);
            z-index: 0;
            margin-top: -45px;
            margin-left: 20px;
        }
        
        .boton-file:active {
            *border-radius: 1px solid rgb(0, 0, 0) !important;
        }
        
        .create-button {
            font-family: 'Montserrat', sans-serif;
            background-color: #38a9ff;
            border-radius: 0px;
            color: #fff;
            margin-top: 30px;
            border-radius: 4px;
        }
        
        .foto-box {
            width: 100%;
            background-color: transparent;
        }
        
        .photo-user {
            position: relative;
            width: 128px;
            height: 146px;
            border: 2px solid #444;
            transition: 200ms;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
        }
        
        .estilo-file {
            visibility: hidden;
            width: 128px;
            height: 146px;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            z-index: 1;
            top: 4px;
            left: 33px;
        }
        
        .estilo-file::before {
            content: ' ';
            display: inline-block;
            background: -webkit-linear-gradient(top, transparent);
            width: 128px;
            height: 146px;
            margin-top: -146px;
            outline: none;
            white-space: nowrap;
            user-select: none;
            cursor: pointer;
            visibility: visible;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            z-index: 1;
        }
        
        .estilo-file:active::before {
            background: -webkit-linear-gradient(top, transparent);
        }
        /* Media Queries */
        /*XS*/
        
        @media (max-width:370px) {
            .box-header {
                height: 486px;
            }
            .button-box {
                width: 280px;
                height: 50px;
                margin: 0 auto;
                margin-top: 40px;
            }
            .button-box1 {
                width: 280px;
                height: 50px;
                margin: 0 auto;
                margin-top: 40px;
                transition: 300ms;
            }
            .paragraph-box {
                background-color: transparent;
                width: 230px;
                height: 50px;
            }
            .paragraph {
                padding: 15px 0px 10px 0px;
                font-size: 11px;
            }
            #foto-a {
                display: none !important;
            }
            .box-paso1 {
                height: 550px;
            }
        }
        /* STYLES ADD BY ING. TORRES C */
        
        .file-preview {
            position: absolute;
            top: -1px;
            left: 146px;
            right: -79px;
            margin-bottom: 42px !important;
        }
        
        .file-preview img {
            width: 128px !important;
            height: 146px !important;
            border: 2px solid #444;
            transition: 200ms;
            margin-bottom: 20px;
        }
        
        .file-caption-info,
        .file-size-info,
        .file-thumbnail-footer,
        .close,
        .fileinput-remove .hidden-xs {
            display: none;
        }
        
        .file-caption,
        .kv-fileinput-caption,
        .icon-visible,
        .hidden-xs,
        .glyphicon,
        .glyphicon-folder-open {
            display: none !important;
        }
        
        .file-caption-main {
            position: absolute !important;
            display: table !important;
            border-collapse: separate !important;
            top: 108px !important;
            z-index: 0 !important;
            left: 102px !important;
        }
        
        .file-caption .form-control,
        .kv-fileinput-caption,
        .input-group-btn,
        .btn {
            /* display: none; */
            --background-color: #fff0;
            color: #000 !important;
            background-color: var(--background-color) !important;
            border-color: #fff0 !important;
            background-image: -webkit-linear-gradient(top, #06060600 0, #fff0 100%) !important;
            top: -3px;
            left: 50px;
            /* background-image: linear-gradient(to bottom, #337ab7 0, #265a88 100%) !important; */
            /* background-image: -webkit-gradient(linear, left top, left bottom, from(#337ab7), to(#265a88)) !important; */
        }
        /* END - STYLES ADD BY ING. TORRES C */
        /*SM*/
        
        @media (min-width:370px) and (max-width:820px) {
            .box-header {
                height: 511px;
            }
            .button-box {
                width: 330px;
                height: 50px;
                margin: 0 auto;
                margin-top: 40px;
            }
            .button-box1 {
                width: 330px;
                height: 50px;
                margin: 0 auto;
                margin-top: 40px;
                transition: 300ms;
            }
            .paragraph-box {
                background-color: transparent;
                width: 280px;
                height: 50px;
            }
            .paragraph {
                padding: 10px;
            }
            #foto-a {
                display: none;
            }
        }
        /*MD*/
        
        @media (min-width:821px) and (max-width:992px) {
            #foto-b {
                display: none;
            }
        }
        /*LG*/
        
        @media (min-width:993px) and (max-width:1200px) {
            #foto-b {
                display: none;
            }
        }
        /*XL*/
        
        @media (min-width:1201px) and (max-width:2000px) {
            #foto-b {
                display: none;
            }
        }
    </style>
    <!--JQUERY-->
    <script src="js/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- the main fileinput plugin file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/js/fileinput.min.js"></script>
    <!-- optionally uncomment line below for loading your theme assets for a theme like Font Awesome (`fa`) -->
    <!-- script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.5/themes/fa/theme.min.js"></script -->

    <!-- ESTILOS INPUTS -->
    <script src="js/inputs.js"></script>
</body>

</html>