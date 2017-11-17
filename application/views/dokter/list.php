<?php $this->load->view('template/header'); ?>
<div class="container"> 
<div class="row">

  <table class="table">
    <thead>
      <tr class="success">
        <th>Kode</th>
        <th>Nama</th>
		<th>Aksi</th>
      </tr>
    </thead>
    <tbody>
<?php//untuk mendapatkan icon dari http://glyphicons.com/ ?>
<?php foreach ($all_dokter_array as $dokter) { ?>
	
      <tr>
        <td class="danger"><?php echo $dokter['kode_dokter'] ?></td>
        <td class="info"><?php echo $dokter['nama_dokter'] ?></td>
		<td>
		<a href="./edit_dokter/<?php echo $dokter['kode_dokter'];?>" class="btn btn-primary"><span class="glyphicons glyphicons-pencil"></span></button></a>
		<a href="./delete_dokter/<?php echo $dokter['kode_dokter'];?>" class="btn btn-primary"><span class="glyphicons glyphicons-trash"></span></button></a>
		
		</td>
      </tr>

<?php } ?>

    </tbody>
  </table>
</div>
</div>
<?php $this->load->view('template/footer'); ?>