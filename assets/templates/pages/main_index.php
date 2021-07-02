<main>
    <section class="banner section pr-l-pink">
    <figure>
        <h1>Подключайтесь до конца месяца и получите оборудование всего за рубль!Покажи всем, кто тут <span>#БОСС</span> </h1>
        <div class="image">
            <img src="assets/img/big-boss.png" alt="Покажи всем, кто тут босс!">
        </div>
    </figure>
        
    </section>
    <form action="" method="post" class="row-form section fulscreen-bg pr-l-aq"> 
    <input type="hidden" name="form-type" value="check_av">
        <h2>Проверьте техническую возможность подключения</h2>
        <?php if((!empty($check_res)) && ($check_res_val) ): ?>
            <p class="ul-heading">Подключение доступно! Заполнить заявку на подключение можно 
                <a href="#send-req">здесь</a>
            </p>
        <?php elseif((!empty($check_res)) ): ?>
            <p class="ul-heading">К сожалению, подключение в Вашем доме пока не доступно. Получить подробную информацию 
                можно по телефону <a href="tel:8-495-873-92-92">8-495-873-92-92</a>
            </p>
        <?php else: ?>
        <fieldset class="section-insides">
            <figure>
                <label for="reg">Ваш город / регион</label>
                <input class="to-grey" required type="text" name="region" id="reg">
            </figure>
            <figure>
                <label for="str">Улица</label>
                <input class="to-grey" required type="text" name="street" id="str">
            </figure>
            <figure>
                <label for="h">Дом</label>
                <input class="to-grey" required type="text" name="house" id="h">
            </figure>
            <figure>
                <label for="bld">Корпус</label>
                <input class="to-grey" required type="text" name="building" id="bld">
            </figure>
            <button type="submit" class="pr-aq">Проверить</button>
        </fieldset>
        <?php endif; ?>
    </form>
    <section class="promo-slider section">
        <h2>С нами дешевле! Акции</h2>
        <section class="section-insides promo-grid">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M14 5.00006C14.2337 4.9996 14.4601 5.08098 14.64 5.23006C14.7413 5.31401 14.825 5.41711 14.8863 5.53346C14.9477 5.6498 14.9855 5.77711 14.9975 5.90809C15.0096 6.03906 14.9957 6.17114 14.9567 6.29674C14.9177 6.42234 14.8542 6.53901 14.77 6.64006L10.29 12.0001L14.61 17.3701C14.6931 17.4723 14.7551 17.59 14.7925 17.7164C14.83 17.8427 14.8421 17.9752 14.8281 18.1062C14.8142 18.2373 14.7745 18.3643 14.7113 18.4799C14.6481 18.5955 14.5627 18.6975 14.46 18.7801C14.3565 18.8711 14.2354 18.9398 14.1041 18.9818C13.9729 19.0237 13.8343 19.0381 13.6972 19.0241C13.5601 19.01 13.4274 18.9677 13.3075 18.8999C13.1875 18.8321 13.0828 18.7402 13 18.6301L8.17001 12.6301C8.02293 12.4511 7.94252 12.2267 7.94252 11.9951C7.94252 11.7634 8.02293 11.539 8.17001 11.3601L13.17 5.36006C13.2703 5.23904 13.3978 5.14338 13.542 5.08083C13.6862 5.01828 13.8431 4.99061 14 5.00006Z" fill="black"/>
        </svg>

        <ul class="promos">
            <?php foreach($promos["items"] as $row): ?>
                <li class="card pr-l-blue to-grey">
                    <figure><img src="<?= $row["Ссылка"] ?>" alt=""><span>-<?= $row["Процент скидки"] ?>%</span></figure>
                    <h4><?= $row["Заголовок"] ?></h4>
                    <p><?= $row["Описание"] ?></p>
                </li>
            <?php endforeach; ?>
        </ul>

        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M9.99999 18.9999C9.76634 19.0004 9.5399 18.919 9.35999 18.7699C9.25873 18.686 9.17503 18.5829 9.11368 18.4665C9.05233 18.3502 9.01453 18.2229 9.00245 18.0919C8.99038 17.9609 9.00426 17.8289 9.0433 17.7033C9.08235 17.5777 9.14579 17.461 9.22999 17.3599L13.71 11.9999L9.38999 6.62994C9.30692 6.52765 9.24489 6.40996 9.20746 6.28362C9.17003 6.15728 9.15794 6.02479 9.17187 5.89376C9.18581 5.76273 9.22551 5.63575 9.28868 5.52011C9.35186 5.40447 9.43726 5.30246 9.53999 5.21994C9.64346 5.1289 9.76462 5.06024 9.89588 5.01825C10.0271 4.97626 10.1657 4.96185 10.3028 4.97594C10.4399 4.99002 10.5726 5.03229 10.6925 5.1001C10.8125 5.1679 10.9172 5.25977 11 5.36994L15.83 11.3699C15.9771 11.5489 16.0575 11.7733 16.0575 12.0049C16.0575 12.2366 15.9771 12.461 15.83 12.6399L10.83 18.6399C10.7297 18.761 10.6022 18.8566 10.458 18.9192C10.3138 18.9817 10.1569 19.0094 9.99999 18.9999Z" fill="black"/>
        </svg>
        </section>
        
    </section>
    <section class="tariffs section"></section>
    <section class="adds section fulscreen-bg pr-l-pink">
        <h2>Соберите так, как нужно</h2>
        <figure>
            <p class="ul-heading">Настройте любой тариф или соберите свой без переплат.</p>
            <button class="pr-mag"><a href="tariffs.php">Попробовать</a></button>
        </figure>
        
    </section>
    <form action="" class="cta-form section fulscreen-bg" method="post">
        <input type="hidden" name="form-type" value="new_request">
        <h2><a name="send-req">Подключайтесь</a>   </h2>
        <?php if(!empty($req_res)): ?>
            <p class="ul-heading">Спасибо, мы получили Вашу заявку! Оператор свяжется с Вами в ближайшее время</p>
        <?php else: ?>
        <p class="ul-heading">Заполните заявку и оператор свяжется с Вами в ближайшее время</p>
        <fieldset class="frst-info-sec">
            <figure id="f1">
                <label for="breg">Ваш город / регион</label>
                <input required class="pr-l-blue" type="text" name="region" id="breg">
            </figure>
            <figure id="f2">
                <label for="bstr">Улица</label>
                <input required class="pr-l-blue" type="text" name="street" id="bstr"> 
            </figure>
            <figure id="f3">
                <label for="bh">Дом</label>
                <input required class="pr-l-blue" type="text" name="house" id="bh">
            </figure>
            <figure id="f4">
                <label for="bbld">Корпус</label>
                <input class="pr-l-blue" type="text" name="building" id="bbld">
            </figure>
            <figure id="f5">
                <label for="bfl">Квартира</label>
                <input class="pr-l-blue" type="text" name="flat" id="bfl">
            </figure>
        </fieldset>
        <fieldset class="sec-info-sec">
            <figure>
                <label for="bn">Ваше имя</label>
                <input required class="pr-l-blue" type="text" name="name" id="bn">
            </figure>
            <figure>
                <label for="bbld">Контактный телефон</label>
                <input required class="pr-l-blue" type="tel" name="phone" id="btel">
            </figure>
        </fieldset>
        <fieldset class="thrd-info-sec">
            <figure class="sel-tariff">
                <label for="bt">Тариф</label>
                <select required class="select pr-l-blue" name="tariff" id="bt">
                    <option selected disabled value="">Выберите тариф</option>
                    <?php foreach($tariffs["items"] as $item): ?>
                    <option data-cost="<?= $item["Стоимость"] ?>" value="<?= $item["ID тарифа"] ?>"><?= $item["Название"] ?> </option>
                    <?php endforeach; ?>
                </select>
            </figure>
            
            <span class="tar-cost hidden"> <output></output> </span>
            <button type="submit" class="pr-blue">Отправить</button>
        </fieldset>
        <figure class="policy">
            <input required type="checkbox" id="agr" name="agree">
            <label for="agr">Соглашаюсь на обработку персональных данных в соответствие с <a href="assets/documents/policy.txt" target="_blank">политикой конфиденциальности</a> </label>
        </figure>
        <?php endif; ?>
    </form>
</main>