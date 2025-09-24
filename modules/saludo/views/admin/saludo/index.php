<?php init_head(); ?>
<div id="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <h3>¡Bienvenido al Módulo Saludo!</h3>
                        <?php echo form_open(admin_url('saludo')); ?>
                        <div class="form-group">
                            <label for="mensaje">Escribe un saludo</label>
                            <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar Saludo</button>
                        <?php echo form_close(); ?>
                        <hr>
                        <h4>Saludos Guardados</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Mensaje</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($saludos as $saludo): ?>
                                    <tr>
                                        <td><?= $saludo['id']; ?></td>
                                        <td><?= $saludo['mensaje']; ?></td>
                                        <td><?= $saludo['created_at']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php init_tail(); ?>