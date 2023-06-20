<?php $url = $_SERVER["REQUEST_URI"];?>
<ul>
<li><a href="/" <?php if ($url == "/") {echo 'class="active"';}?>>Главная</a></li>
<li><a href="/o-nas" <?php if ($url == "/o-nas") {echo 'class="active"';}?>>О нас</a></li>
<li><a href="/contacti" <?php if ($url == "/contacti") {echo 'class="active"';}?>>Контакты</a></li>
</ul>