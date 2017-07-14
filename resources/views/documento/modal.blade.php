<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-doc-{{$documento->id}}">
  	<div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span></button>
	            <h4 class="modal-title">Que quieres hacer ?</h4>
          	</div>
          	<div class="modal-body">
                <p>Descargar o ver el documento {{$documento->nombre}}</p>
          	</div>
          	<div class="modal-footer">
	            <a href='/stream/{{$documento->pdf}}' class="btn btn-primary" target="_blank">Ver</a>
                <a href='/download/{{$documento->pdf}}' class="btn btn-success" target="_blank">Descargar</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          	</div>
    	</div><!-- /.modal-content -->
  	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->