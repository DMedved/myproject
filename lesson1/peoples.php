<div>
	<table>
		<tr><th>Name:</th><td><?=$tplName?></td></tr>
		<tr><th>Surname:</th><td><?=$tplSurname?></td></tr>
		<tr><th>Photo:</th><td><img src="<?=$tplPhoto?>"/></td></tr>
		<tr><th>Anketa:</th><td>
			<?php $tplBirthday = $tplAnketa['birthday'];
			$tplSex = $tplAnketa['sex'];
			$tplAdress = $tplAnketa['adress'];
			require('anketa.php');	
			?>
		</td></tr>
	</table>
</div>
