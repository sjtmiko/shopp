<!-- Begin Page Content  
<div class="container-fluid">
	 Page Heading -->
	<!-- <h1 class="h3 mb-4 text-gray-800">Manajemen User Hotspot</h1> -->
<!-- /.container-fluid -->

<div class="container-fluid">
<a class="btn btn-primary mb-2" href="<?= base_url('index.php/shopp/product_add') ?>">Tambah Produk</a>
<table class="table bg-white">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Barang</th>
				<th scope="col">Jenis Barang</th>
                <th scope="col">Foto Barang</th>
                <th scope="col">Ukuran Barang</th>
                <th scope="col">Deskripsi Barang</th>
                <th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i=1;
			foreach ($barang as $row): ?>
			<tr>
				<th scope="row"><?php echo $i++; ?></th>
				<td><?php echo $row->nama_barang; ?></td>
				<td><?php echo $row->jenis_barang; ?></td>
                <td><?php echo $row->foto_barang; ?></td>
                <td><?php echo $row->uk_barang; ?></td>
                <td><?php echo $row->desk_barang; ?></td>
				<td>
                    <a class="fa fa-info"></a> |    
					<a class="fa fa-pencil-square-o" href="<?= base_url('index.php/admin/user_edit/'.$row->id) ?>"></a> |
					<a class="fa fa-trash-o" href="<?= base_url('index.php/admin/user_delete/'.$row->id) ?>"></a> 
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>