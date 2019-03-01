<div class="container">
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

  	<?php 

  	 $dataMenu = $this->session->all_data;
  	 $i = 1;
  	 foreach ($dataMenu as $data) { ?>

  	 	 <tr>
	      <th scope="row"><?php echo $i++ ?></th>
	      <td><?php echo $data->nama_menu ?></td>
	      <td><?php echo $data->harga ?></td>
	      <td>
	      	<a href="<?php echo base_url() ?>/pesanan/pesan?Kode_Menu=<?php echo $data->kode_menu ?>" class="btn btn-info">PESAN SEKARANG</a>
	      </td>
    	</tr>

  	 <?php } ?>
  </tbody>
</table>
</body>
</html>
</div>