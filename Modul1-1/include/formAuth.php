<form action="/" method="post">
							<tr>
								<td class="iat">Ваш e-mail: <br /> <input id="login_id" size="30" name="login" value=<?= $_POST["login"]; ?>></td>
							</tr>
							<tr>
								<td class="iat">Ваш пароль: <br /> <input id="login_id" type=password size="30" name="pass"></td>
							</tr>
							<tr>
								<td><input type="submit" value="Войти" name="send"/></td>
							</tr>
						</form>