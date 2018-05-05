<table border='1'>
<tr style="background:#D0D0D0">
<td>Nama</td><td>No HP</td><td>Email</td><td>Alamat</td>
</tr>
<?php
foreach($result as $value){
  ?>
  <tr>
  <td><?php echo $value['nama_kar']?></td>
  <td><?php echo $value['no_hp']?></td>
  <td><?php echo $value['email']?></td>
  <td><?php echo $value['alamat']?></td>
  </tr>
  <?php
}
?>
</table>