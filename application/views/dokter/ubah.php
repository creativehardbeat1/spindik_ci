<?php $this->load->view('template/header'); ?>

<div class="container">
<div class="row">
<form method="post" action="../simpan_edit_dokter">
  <div class="form-group">
    <label for="txt_kode_dokter">Kode Dokter</label>
    <input type="text" class="form-control" id="txt_kode_dokter" name="kode_dokter" value="<?php echo $dokter->kode_dokter;?>" placeholder="Masukkan kode dokter" readonly>
  </div>
  <div class="form-group">
    <label for="txt_nama_dokter">Nama Dokter</label>
    <input type="text" class="form-control" id="txt_nama_dokter" name="nama_dokter" value="<?php echo $dokter->nama_dokter;?>" placeholder="Masukkan nama dokter">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

<?php $this->load->view('template/footer'); ?>