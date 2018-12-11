<form class="form-horizontal" method="POST" name="form_update" action="<?=base_url('user/update')?>">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Update User</h4>
	</div>
	<div class="modal-body">
		<div class="form-group">
			<label for="nama" class="col-sm-2 col-sm-offset-1 control-label">Nama</label>
			<div class="col-sm-7">
				<input type="hidden" class="form-control" name="id" value="<?=$id?>">
				<input type="text" class="form-control" name="nama" id="nama" value="<?=$nama?>">
			</div>
		</div>
		<div class="form-group">
			<label for="alamat" class="col-sm-2 col-sm-offset-1 control-label">Alamat</label>
			<div class="col-sm-7">
				<input type="text" class="form-control" name="alamat" id="alamat" value="<?=$alamat?>">
			</div>
		</div>
		<div class="form-group">
			<label for="umur" class="col-sm-2 col-sm-offset-1 control-label">Umur</label>
			<div class="col-sm-7">
				<input type="number" class="form-control" name="umur" id="umur" value="<?=$umur?>">
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<input type="submit" class="btn btn-primary" value="Simpan"></button>
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
</form>	