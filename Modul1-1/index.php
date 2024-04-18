<?php
//$login='WR';
//$password='Muerta';

include $_SERVER['DOCUMENT_ROOT'] . '/template/header.php';

?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="left-collum-index">

			<h1>Возможности проекта —</h1>
			<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>


		</td>
		<td class="right-collum-index">

			<div class="project-folders-menu">
				<ul class="project-folders-v">
					<li class="project-folders-v-active"><span>Авторизация</span></li>

					<?php

					if (isset($_GET['reg'])) {
						include $_SERVER['DOCUMENT_ROOT'] . '/template/pageRegister.php';
					} else {
						include $_SERVER['DOCUMENT_ROOT'] . '/template/pageAuth.php';
					}

					?>

			</div>

		</td>
	</tr>
</table>

<?php

include $_SERVER['DOCUMENT_ROOT'] . '/template/footer.php';
