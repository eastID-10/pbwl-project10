<h2>Edit Produk</h2>

<form action="<?php echo URL; ?>/produk/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['produk_id']; ?>">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="nama_produk" value="<?php echo $data['row']['nama_produk']; ?>" required></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok" value="<?php echo $data['row']['stok']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>