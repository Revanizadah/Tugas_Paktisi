$(function () {

    $('.tombolTambahData').on('click', function () {
        $('#formModalLabel').html('Tambah Data Pembelian');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#kode_barang').val('');
        $('#jenis_barang').val('');
        $('#jumlah').val('');
        $('#harga').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function () {

        $('#formModalLabel').html('Ubah Data Pembelian');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/Tugas_Praktisi/public/home/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/Tugas_Praktisi/public/home/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#kode_barang').val(data.nopart);
                $('#jenis_barang').val(data.tipe);
                $('#jumlah').val(data.jumlah);
                $('#harga').val(data.harga);
                $('#id').val(data.id);
            }
        });

    });

});

