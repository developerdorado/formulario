<div class="modal fade" id="nuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg ui-front" role="document">
        <div class="modal-content">
            <div class="card-header d-flex">
                <h3 class="mb-0">Datos de contacto</h3>
                <button type="button" class="close ml-auto" data-bs-dismiss="modal" aria-bs-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" id="registro_cliente" name="registro_cliente">
                    <div class="alert alert-warning alert-dismissible fade" role="alert">
                        
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input name="nombre_completo" id="nombre_completo" type="text" required="" class="form-control" placeholder="NOMBRE COMPLETO" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group input-group-merge">
                                    <select class="form-control" name="country" id="country" required>
                                        <option value="">-- SELECCIONE PAÍS --</option>
                                    </select>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input name="celular" id="celular" type="tel" required="" class="form-control" placeholder="CELULAR" autocomplete="off" pattern="[0-9]{10}" title="Numero de celular de 10 digitos">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input name="email" id="email" type="email" required="" class="form-control" placeholder="CORREO ELECTRÓNICO" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" id="guardar_datos">Enviar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>