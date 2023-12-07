<h2>Input Produk</h2>

<form action="<?php echo URL; ?>/produk/save" method="post">
    <table>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="produk" required></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>