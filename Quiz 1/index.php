<?php
require_once "app/users.php";
$user = new users();
$rows = $user->tampil();
?>
	<table border="1" width="800" align="center">
		<tr>
			<td>NO</td>
			<td>NAMA</td>
			<td>ALAMAT</td>
			<td>KODE POS</td>
			<td>EMAIL</td>
			<td>NOMOR HP</td>
		</tr>
		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['user_id']; ?></td>
				<td><?php echo $row['user_nama']; ?></td>
				<td><?php echo $row['user_alamat']; ?></td>
				<td><?php echo $row['user_pos']; ?></td>
				<td><?php echo $row['user_email']; ?></td>
				<td><?php echo $row['user_hp']; ?></td>
			</tr>
		<?php } ?>
	</table>