<div class="container">
  <h3>Check Out Pembelian Anda</h3>
  <form method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Ringkasan Belanja Anda</h5>

          <p>Nama Produk : <?php echo $data[0]->nama_menu ?> </p>
         <p>Harga Produk : <?php echo $data[0]->harga ?></p>
        <button type="submit" class="btn btn-primary">TOTAL BELANJA : Rp <?php echo $data[0]->harga; ?> </button><br><br>
         <button type="submit" class="btn btn-success" onclick="myFunction()">BAYAR SEKARANG</button>
          
        </div>
      </div>
        </div>
        </div>

        <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>

    <?php echo form_close();?>
  </form>
</div>

<script>
function myFunction() {
  alert("Pembayaran Anda Segera diproses");
}
</script>