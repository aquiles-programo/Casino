<div class="modal fade" id="modal_mensaje" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="z-index: 3000;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_titulo">Aviso</h5>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 id="contenido_mensaje" align="center">{{ session('mensaje') }}</h4><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>