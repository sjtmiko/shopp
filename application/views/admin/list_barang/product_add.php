<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Tambah Batu</h1>
	<!-- Page Heading -->
	<?php echo form_open_multipart('index.php/shopp/product_add_act'); ?>
		<div class="form-group">
			<label>Nama Barang</label>	
			<input type="text" class="form-control" name="nama_barang">
		</div>
		<div class="form-group">
			<label>Jenis Barang</label>
			<input type="text" class="form-control" name="jenis_barang">
		</div>
		<div class="form-group">
			<label>Foto Barang</label>
			<input type="file" class="form-control" name="foto_barang">
		</div>
        <div class="form-group">
			<label>Ukuran Barang</label>
			<input type="text" class="form-control" name="uk_barang">
		</div>
        <div class="form-group">
			<label>Deskripsi Barang</label>
			<input type="text" class="form-control" name="desk_barang">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a class="btn btn-warning" href="<?= base_url('index.php/shopp/list_barang') ?>">Batal</a>
	<? echo form_close(); ?>
</div>