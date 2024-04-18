<form action="/src/actions/login.php" method="post">
	<?php if (hasMessage('error')) :
		echo getMessage('error');
	endif; ?>
	<tr>
		<td class="iat">Ваш e-mail: <br />
			<input size="30" name="email">

			<?php if (hasVallidationError('email')) : ?>
				<small><?php getErrorMessage('email'); ?></small>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td class="iat">Ваш пароль: <br />
			<input type=password size="30" name="password">

			<?php if (hasVallidationError('password')) : ?>
				<small><?php getErrorMessage('password'); ?></small>
			<?php endif; ?>
		</td>
	</tr>
	<tr>
		<td><input type="submit" value="Войти" name="send" /></td>
	</tr>
</form>