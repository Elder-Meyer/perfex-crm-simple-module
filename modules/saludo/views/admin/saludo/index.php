<?php init_head(); ?>  <!-- Inicializa el head y el layout de Perfex -->
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <h3>¡Bienvenido al Módulo Saludo!</h3>
                        <p><?= $mensaje; ?></p>  <!-- Muestra el mensaje del controlador -->
                        <hr>
                        <p>Aquí puedes agregar más contenido, formularios, tablas, etc. Por ejemplo:</p>
                        <ul>
                            <li>Una lista de usuarios.</li>
                            <li>Un formulario para enviar saludos.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>  <!-- Cierra el layout de Perfex -->