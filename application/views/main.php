<h1>Data User
	<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-insert">Tambah</button>
</h1>
<hr>
<table class="table table-bordered table-striped table-hover table-condensed">
	<thead>
		<tr class="text-center">
			<td>ID</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Umur</td>
			<td width="10%">Opsi</td>
		</tr>
	</thead>
	<tbody>
	<? foreach ($user as $key => $value): ?>
		<tr>
			<td class="text-center"><?=$value['id']?></td>
			<td><?=$value['nama']?></td>
			<td><?=$value['alamat']?></td>
			<td class="text-center"><?=$value['umur']?></td>
			<td class="text-center">
				<!-- event click button update on master.php -->
				<a href="<?=base_url('user/update/'.$value['id'])?>" class="opsi-update"><i class="glyphicon glyphicon-pencil"></i></a> &nbsp|&nbsp 
				<a href="<?=base_url('user/delete/'.$value['id'])?>" onClick="javascript:return confirm('Are you sure?');"><i class="glyphicon glyphicon-trash"></i></a>
			</td>
		</tr>
	<? endforeach ?>
	</tbody>
</table>

<div class="modal fade" id="modal-insert" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form class="form-horizontal" method="POST" name="form_insert" action="<?=base_url('user/insert')?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Tambah User</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="nama" class="col-sm-2 col-sm-offset-1 control-label">Nama</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="nama" id="nama">
						</div>
					</div>
					<div class="form-group">
						<label for="alamat" class="col-sm-2 col-sm-offset-1 control-label">Alamat</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" name="alamat" id="alamat">
						</div>
					</div>
					<div class="form-group">
						<label for="umur" class="col-sm-2 col-sm-offset-1 control-label">Umur</label>
						<div class="col-sm-7">
							<input type="number" class="form-control" name="umur" id="umur">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" value="Tambah"></button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
