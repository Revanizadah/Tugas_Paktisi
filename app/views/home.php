<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Sembako Admin</title>
</head>
<body>

<div class="container">
  <h2 class="text-center mb-5 mt-5">Pendataan Pembelian Sembako</h2>

  
  <button type="button" class="btn btn-secondary mb-4 float-right" data-toggle="modal" data-target="#formModal">Create</button>
  <table class="table table-info">
  <thead>
    <tr>
      <th scope="col" class="text-center">#</th>
      <th scope="col" class="text-center">Nama</th>
      <th scope="col" class="text-center">Kode Barang</th>
      <th scope="col" class="text-center">Jenis Barang</th>
      <th scope="col" class="text-center">Jumlah</th>
      <th scope="col" class="text-center">Harga</th>
      <th scope="col" class="text-center">Action</th>

    </tr>
  </thead>
  <tbody>
  <?php foreach( $data['stf'] as $stf ) : ?>
    <tr>
      <th scope="row" class="text-center"><?= $stf['id']; ?></th>
      <td class="text-center"><?= $stf['nama']; ?></td>
      <td class="text-center"><?= $stf['kode_barang']; ?></td>
      <td class="text-center"><?= $stf['jenis_barang']; ?></td>
      <td class="text-center"><?= $stf['jumlah']; ?></td>
      <td class="text-center"><?= $stf['harga']; ?></td>
      <td class="text-center">
      <a href="<?= BASEURL; ?>/home/hapus/<?= $stf['id']; ?>" class="p-1 badge badge-secondary" onclick="return confirm('yakin?');">hapus</a>
                  <a href="<?= BASEURL; ?>/home/ubah/<?= $stf['id']; ?>" class="p-1 badge badge-primary tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $stf['id']; ?>">ubah</a>
      </td>
    </tr>
    <?php endforeach ?>
    
    
  </tbody>
</table>
  <div class="modal fade" id="formModal">
    <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Pembelian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
        <div class="modal-body">
        <form action="<?= BASEURL; ?>/home/tambah" method="POST">
        <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="kode_barang">Kode Barang</label>
              <input type="text" class="form-control" id="kode_barang" name="kode_barang">
            </div>
            <div class="form-group">
              <label for="jenis_barang">Jenis Barang</label>
              <input type="text" class="form-control" id="jenis_barang" name="jenis_barang">
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="text" class="form-control" id="harga" name="harga">
            </div>
            <button type="submit" class="btn btn-secondary">Buat</button>
          </form>
        </div>

      </div>
    </div>
  </div>
  

</div>

    <script src="<?= BASEURL; ?>/js/script.js"></script>
</body>
</html>
