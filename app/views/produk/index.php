<h2>PRODUK</h2>

<a href="<?php echo URL; ?>/produk/input" class="btn">Input Produk</a>

<table>
      <tr>
            <th>NO</th>
            <th>Nama Produk</th>
            <th>Stok Produk</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_produk']; ?></td>
                  <td><?php echo $row['stok']; ?></td>
                  <td><a href="<?php echo URL; ?>/produk/edit/<?php echo $row['produk_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/produk/delete/<?php echo $row['produk_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>