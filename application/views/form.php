<a href="<?php echo base_url(); ?>index.php/crud/"><button>Home</button></a>
<br>
<form method="post" action="<?php echo base_url(); ?>index.php/crud/insert">
<table>
<tr><td>Nama Karyawan</td><td><input type="text" name="nama"></td></tr>
<tr><td>No HP</td><td><input type="text" name="no_hp"></td></tr>
<tr><td>Email</td><td><input type="text" name="email"></td></tr>
<tr><td>Alamat</td><td><textarea name="alamat"></textarea></td></tr>
<tr><td></td><button type="submit">Simpan</button>&nbsp;<button type="reset">Clear</button></td></tr>
</table>
</form>