<?php 

class Stuff_Model{
    private $db;
    private $table = 'tb_barang';
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllStuff()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getStuffById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPembelian($data)
    {
        $query = "INSERT INTO tb_barang
                    VALUES
                  ('', :nama, :kode_barang, :jenis_barang, :jumlah, :harga)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kode_barang', $data['kode_barang']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('harga', $data['harga']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPembelian($id)
    {
        $query = "DELETE FROM tb_barang WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataPembelian($data)
    {
        $query = "UPDATE tb_barang SET
                    nama = :nama,
                    kode_barang = :kode_barang,
                    jenis_barang = :jenis_barang,
                    jumlah = :jumlah,
                    harga = :harga
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kode_barang', $data['kode_barang']);
        $this->db->bind('jenis_barang', $data['jenis_barang']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    
}

?>