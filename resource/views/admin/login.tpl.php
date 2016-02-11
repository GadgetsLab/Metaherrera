<div class="container">
    <div class="row">
        <div class="col s8 offset-s2 teal z-depth-2">
            <h3 class="center-align ligh white-text">MetaHerrera</h3>
        </div>
        <div class="col s8 offset-s2 white z-depth-2">
            <h5 class="thin center-align">Ingreso al panel de administración</h5>
            <div class="center-align">
                <div class="row">
                    <form action="<?php echo BASE_PUBLIC ?>/admin/login" method="post" role="form">
                        <div class="input-field col s8 offset-s2">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="username" name="email" type="email" class="validate">
                            <label for="username">Usuario</label>
                        </div>
                        <div class="input-field col s8 offset-s2">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" name="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="input-filed col-s12 center-aling">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col s8 offset-s2 teal z-depth-2 center-align">
            <small class="bold white-text">MetaHerrera 2016 ©</small>
        </div>
    </div>
</div>

