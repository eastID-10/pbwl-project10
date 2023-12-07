<?php

namespace App\Models;

use App\Core\Model;

class Produks extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_produk";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $produk = $_POST['produk'];
          $stok =$_POST['stok'];

          $sql = "INSERT INTO tb_produk(nama_produk, stok) VALUES  (:nama_produk, :stok)";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama_produk", $produk);
          $stmt->bindParam(":stok", $stok);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_produk WHERE produk_id=:produk_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":produk_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $nama_produk = $_POST['nama_produk'];
          $id = $_POST['id'];
          $stok = $_POST['stok'];

          $sql = "UPDATE tb_produk
          SET nama_produk=:nama_produk, stok=:stok WHERE produk_id=:produk_id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama_produk", $nama_produk);
          $stmt->bindParam(":produk_id", $id);
          $stmt->bindParam(":stok", $stok);

          $stmt->execute();
     }
     public function delete($id)
     {
          $sql = "DELETE FROM tb_produk WHERE produk_id=:produk_id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":produk_id", $id);
          $stmt->execute();
     }
}
