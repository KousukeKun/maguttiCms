<div id="flash-overlay-modal" class="modal fade {{ $modalClass or '' }}">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">{{ $title }}</h4>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<p>{!! $body !!}</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
</div>
<!-- This is only necessary if you do Flash::overlay('...') -->
<script>
	$('#flash-overlay-modal').modal();
</script>
