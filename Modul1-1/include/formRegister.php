<form action="/src/actions/register.php" method="post">
    <tr>
        <td class="iat">Фамилмя: <br />
            <input size="30" name="surname" placeholder="Иванов" value="<?php echo old('surname'); ?>">

            <?php if (hasVallidationError('surname')) : ?>
                <small><?php getErrorMessage('surname'); ?></small>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="iat">Имя: <br />
            <input size="30" name="name" placeholder="Иван" value="<?php echo old('name'); ?>">

            <?php if (hasVallidationError('name')) : ?>
                <small><?php getErrorMessage('name'); ?></small>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="iat">Отчество: <br />
            <input size="30" name="patronymic" placeholder="Иванович" value="<?php echo old('patronymic'); ?>">
        </td>
    </tr>
    <tr>
        <td class="iat">Ваш e-mail: <br />
            <input size="30" name="email" placeholder="vano@gmail.com" value="<?php echo old('email'); ?>">

            <?php if (hasVallidationError('email')) : ?>
                <small><?php getErrorMessage('email'); ?></small>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="iat">Телефон (без +): <br />
            <input id="phone_id" size="30" name="phone" placeholder="79049040404" value="<?php echo old('phone'); ?>">

            <?php if (hasVallidationError('phone')) : ?>
                <small><?php getErrorMessage('phone'); ?></small>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="iat">Ваш пароль: <br />
            <input type=password size="30" name="password" placeholder="**********">

            <?php if (hasVallidationError('password')) : ?>
                <small><?php getErrorMessage('password'); ?></small>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="iat">Подтвердите пароль: <br />
            <input type=password size="30" name="password_confirmation" placeholder="**********">

            <?php if (hasVallidationError('password_confirmation')) : ?>
                <small><?php getErrorMessage('password_confirmation'); ?></small>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td>
            <fieldset>
                <input type="checkbox" name="agree"> Я принимаю все условия пользования
            </fieldset>
            <?php if (hasVallidationError('agree')) : ?>
                <small><?php getErrorMessage('agree'); ?></small>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <td class="iat"> </br><button type="submit" id="submit">Продолжить</button></td>
    </tr>
</form>
<p>У меня уже есть <a href="/?log=yes">аккаунт</a></p>
</form>