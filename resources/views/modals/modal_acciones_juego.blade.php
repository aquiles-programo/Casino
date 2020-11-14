<div class="modal fade" id="update_juego_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editJuegoLabel">Actualizar Juego</h5>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container col-md-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <form method="POST" id="update_juego_form">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="nombre">Nombre Juego</label>
                                    <input required type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion Juego</label>
                                    <input required type="text" class="form-control" id="descripcion" name="descripcion">
                                </div>
                                <div class="form-group">
                                    <label for="url_imagen">URL Imagen Juego</label>
                                    <input required type="text" class="form-control" id="url_imagen" name="url_imagen">
                                </div>
                                <div class="form-group">
                                    <label for="url_juego">URL Juego</label>
                                    <input required type="text" class="form-control" id="url_juego" name="url_juego">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm"
                                        data-dismiss="modal">Cerrar</button>
                                    <button class="btn btn-primary btn-sm">Actualizar Juego</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
