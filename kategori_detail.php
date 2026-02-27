<p><strong>Nama :</strong> <?= $data['kategori']; ?></p>
<p><strong>Tipe :</strong> <?= $data['tipe']; ?></p>
<p><strong>Merk :</strong> <?= $data['merk']; ?></p>
<p><strong>Processor :</strong> <?= $data['processor']; ?></p>
<p><strong>RAM :</strong> <?= $data['ram']; ?> GB</p>
<p><strong>Storage :</strong> <?= $data['storage']; ?></p>
<p><strong>VGA :</strong> <?= $data['vga']; ?></p>
<p><strong>Kondisi :</strong> 
    <?php if($data['kondisi']=="Masih Bagus"){ ?>
        <span class="badge badge-success">Masih Bagus</span>
    <?php } else { ?>
        <span class="badge badge-danger">Sudah Rusak</span>
    <?php } ?>
</p>