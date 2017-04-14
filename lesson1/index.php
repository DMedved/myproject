<?php
	$arr = [
		'id1' => [
			'name' => 'Maria',
			'surname' => 'Ivanova',
			'photo' => 'https://s-media-cache-ak0.pinimg.com/736x/35/8c/57/358c57c204a2fec21fa50b917a0728aa.jpg',
			'anketa' => [
				'birthday' => '01.01.2001',
				'sex' => 'female',
				'adress' => 'Saransk, Lenina, 1'
			],
		],
		'id2' => [
			'name' => 'Daria',
			'surname' => 'Sergeeva',
			'photo' => 'https://pbs.twimg.com/profile_images/378800000532546226/dbe5f0727b69487016ffd67a6689e75a.jpeg',
			'anketa' => [
				'birthday' => '02.02.2001',
				'sex' => 'female',
				'adress' => 'Saransk, Lenina, 2'
			],
		],
		'id3' => [
			'name' => 'Tatyana',
			'surname' => 'Petrova',
			'photo' => 'http://www.cats.org.uk/uploads/images/featurebox_sidebar_kids/grief-and-loss.jpg',
			'anketa' => [
				'birthday' => '03.03.2001',
				'sex' => 'female',
				'adress' => 'Saransk, Lenina, 3'
			],
		],
		
	];
?>
<table border="1" cellspacing="0">
	
	<?php foreach($arr as $key => $value): ?>
		<tr><td>
			<?php
				$tplName = $value['name'];
				$tplSurname = $value['surname'];
				$tplPhoto = $value['photo'];
				$tplAnketa = $value['anketa'];
				require('peoples.php');							
			?>
		</td></tr>
	<?php endforeach; ?>
		
</table>
