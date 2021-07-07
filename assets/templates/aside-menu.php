<aside id="aside-menu">
    <nav>
        <ul>
            <li> <a href="tariffs.php">Тарифы</a> </li>
            <li>
                <ul class="filter-for-tariffs">
                    <li><a data-filter="Интернет" href="tariffs.php#Выбор_тарифа">Интернет</a></li>
                    <li><a data-filter="Комбо" href="tariffs.php#Выбор_тарифа">Комбо</a></li>
                    <li><a data-filter="Хостинг" href="tariffs.php#Выбор_тарифа">Хостинг</a></li>
                    <li><a data-filter="Облако" href="tariffs.php#Выбор_тарифа">Облако</a></li>
                </ul>
            </li>
            <li class="hidable"><a href="help.php">Помощь</a></li>
            <li class="hidable"><a href="contacts.php">Контакты</a></li>
            <li class="hidable"><a href="documents.php">Документация</a></li>
            <?php if(!empty($_SESSION["user_group"]) && ($_SESSION["user_group"] == "1")): ?><li class="hidable"><a href="admin_panel.php">Администратору</a></li> <?php endif; ?>
            <li class="hidable"><button class="theme-btn">Темная тема</button></li>
        </ul>
    </nav>
</aside>
