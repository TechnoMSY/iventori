<div class="container-fluid">
    <h2 class="mb-4 text-gray-800">Kategori Komputer</h2>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="" method="post">
                <?php
                if(isset($_POST['submit'])){

    $kategori  = $_POST['kategori'];
    $tipe      = $_POST['tipe'];
    $merk      = $_POST['merk'];
    $processor = $_POST['processor'];
    $ram       = $_POST['ram'];
    $storage   = $_POST['storage'];
    $vga       = $_POST['vga'];
    $kondisi   = $_POST['kondisi'];

    $query = mysqli_query($koneksi,
        "INSERT INTO kategori 
        (kategori, tipe, merk, processor, ram, storage, vga, kondisi)
        VALUES 
        ('$kategori','$tipe','$merk','$processor','$ram','$storage','$vga','$kondisi')"
    );

    if($query){
        echo "<script>alert('Data berhasil ditambahkan'); 
        window.location='?page=kategori';</script>";
    }else{
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>
<div class="form-group mb-3">
    <label>Tipe</label>
    <select name="tipe" class="form-control" required>
        <option value="">-- Pilih Tipe --</option>
        <option value="Laptop">Laptop</option>
        <option value="Komputer">Komputer</option>
    </select>
</div>
                <div class="form-group mb-3">
    <label>Merk</label>
    <input type="text" name="merk" class="form-control" required>
</div>

<div class="form-group mb-3">
    <label>Processor</label>
    <input type="text" name="processor" class="form-control" required>
</div>

<div class="form-group mb-3">
    <label>RAM (GB)</label>
    <input type="number" name="ram" class="form-control" required>
</div>

<div class="form-group mb-3">
    <label>Storage</label>
    <input type="text" name="storage" class="form-control" placeholder="Contoh: 512GB SSD" required>
</div>

<div class="form-group mb-3">
    <label>VGA</label>
    <input type="text" name="vga" class="form-control" required>
</div>

<div class="form-group mb-3">
    <label>Kondisi</label>
    <select name="kondisi" class="form-control" required>
        <option value="">-- Pilih Kondisi --</option>
        <option value="Masih Bagus">Masih Bagus</option>
        <option value="Sudah Rusak">Sudah Rusak</option>
    </select>
</div>
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="?page=kategori" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
