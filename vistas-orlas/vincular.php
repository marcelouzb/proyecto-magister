<div class="row display-flex">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="landing-content">
            <h1>¡Enhorabuena! Te han invitado a unirte a la orla de <?= $orla->getNombre() ?></h1>
            <p>
                Regístrate o Inicia sesión para poder formar parte de esta orla.
            </p>
        </div>
    </div>

    <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <!-- Login-Registration Form  -->
        <div class="registration-login-form">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                        <svg class="olymp-login-icon"><use xlink:href="/svg-icons/sprites/icons.svg#olymp-login-icon"></use></svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                        <svg class="olymp-register-icon"><use xlink:href="/svg-icons/sprites/icons.svg#olymp-register-icon"></use></svg>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel" data-mh="log-tab">
                    <div class="title h6">Regístrate</div>
                    <form method="post" action="/registro" class="content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">DNI</label>
                                    <input required name="u[dni]" class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Teléfono</label>
                                    <input required name="u[movil]" class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Nombre</label>
                                    <input required name="u[nombre]" class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Apellidos</label>
                                    <input required name="u[apellidos]" class="form-control" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Email</label>
                                    <input required name="u[email]" class="form-control" placeholder="" type="email">
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Contraseña</label>
                                    <input required name="u[clave]" class="form-control" placeholder="" type="password">
                                    <input name="redirect" value="https://orlas.magister.com/orlas/vincular/<?= $code ?>" type="hidden">
                                </div>

                                <div class="form-group date-time-picker label-floating">
                                    <label class="control-label">Cumpleaños</label>
                                    <input required name="datetimepicker" value="10/24/1984" />
                                    <span class="input-group-addon">
                                        <svg class="olymp-calendar-icon"><use xlink:href="/svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
                                    </span>
                                </div>

                                <div class="form-group label-floating is-select">
                                    <label class="control-label">Género</label>
                                    <select required name="u[genero]" class="selectpicker form-control">
                                        <option value="1">Chico</option>
                                        <option value="2">Chica</option>
                                    </select>
                                </div>

                                <div class="remember">
                                    <div class="checkbox">
                                        <label>
                                            <input required name="optionsCheckboxes" type="checkbox">
                                            Acepto los <a href="#">Términos y Condiciones</a> del sitio web
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-purple btn-lg full-width">Completar registro!</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="tab-pane" id="profile" role="tabpanel" data-mh="log-tab">
                    <div class="title h6">Inicia sesión</div>
                    <form method="post" action="/login" class="content">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Email</label>
                                    <input name="u" class="form-control" placeholder="" type="email" value="">
                                </div>
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label">Contraseña</label>
                                    <input name="p" class="form-control" placeholder="" type="password">
                                    <input name="redirect" value="https://orlas.magister.com/orlas/vincular/<?= $code ?>" type="hidden">
                                </div>

                                <div class="remember">
                                    <div class="checkbox">
                                        <label>
                                            <input name="optionsCheckboxes" type="checkbox">
                                            Recuérdame
                                        </label>
                                    </div>
                                    <a href="/recuperar" class="forgot">Olvidé mi contraseña</a>
                                </div>

                                <button type="submit" class="btn btn-lg btn-primary full-width">Empezar</button>

                                <p>¿No tienes una cuenta? <a href="/registro">Regístrate!</a> es bastante simple y podrás empezar a crear tu orla!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ... end Login-Registration Form  -->
    </div>
</div>