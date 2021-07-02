<main>
    <section class="questions section">
        <h2>Часто задаваемые вопросы</h2>
        <figure class="section-insides">
            <section class="question">
                <form action="" method="get" class="no-color-changes">
                    <input class="pr-l-blue" type="text" name="search" id="" placeholder="Поиск">
                    <button type="submit">
                        <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.1 25.2C11.06 25.2 7 21.14 7 16.1C7 11.06 11.06 7 16.1 7C21.14 7 25.2 11.06 25.2 16.1C25.2 21.14 21.14 25.2 16.1 25.2ZM16.1 8.4C11.83 8.4 8.4 11.83 8.4 16.1C8.4 20.37 11.83 23.8 16.1 23.8C20.37 23.8 23.8 20.37 23.8 16.1C23.8 11.83 20.37 8.4 16.1 8.4Z" fill="#1FC9FD"/>
                            <path d="M22.8775 21.8869L29.1635 28.1729L28.1737 29.1627L21.8877 22.8767L22.8775 21.8869Z" fill="#1FC9FD"/>
                        </svg>
                    </button>
                </form>
                <ul class="results">
                    <?php if(isset($answer["items"])): ?>
                        <?php foreach ($answer["items"] as $row): ?>
                            <li>
                                <span><?= $row["Вопрос"] ?> </span>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                                </svg>
                                <p><?= $row["Ответ"] ?></p>
                            </li>
                        <?php endforeach; ?>
                        
                    <?php else: ?>
                        <li>Результаты не найдены</li>
                    <?php endif; ?>
                    
                </ul>
            </section>
            <aside class="FAQ">
                <h3>Часто спрашивают</h3>
                <ul>
                    <li>
                        <span>Как отключить услугу? </span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                        </svg>
                    </li>
                    <li>
                        <span>Как заблокировать услугу на время?  </span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                        </svg>
                    </li>
                    <li>
                        <span>Как изменить тариф? </span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                        </svg>
                    </li>
                    <li>
                        <span>Как узнать пароль от моего Wi-fi? </span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                        </svg>
                    </li>
                    <li>
                        <span>Как переоформить договор? </span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                        </svg>
                    </li>
                    <li>
                        <span>Как сменить оборудование? </span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                        </svg>
                    </li>
                    <li>
                        <span>Как перенести услуги на другой адрес? </span>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91662 5.83332C2.91635 5.69703 2.96382 5.56494 3.05079 5.45999C3.09976 5.40092 3.1599 5.3521 3.22777 5.31631C3.29564 5.28052 3.3699 5.25847 3.4463 5.25143C3.52271 5.24438 3.59975 5.25248 3.67302 5.27526C3.74629 5.29803 3.81434 5.33504 3.87329 5.38416L6.99995 7.99749L10.1325 5.47749C10.1921 5.42903 10.2608 5.39285 10.3345 5.37101C10.4082 5.34918 10.4855 5.34212 10.5619 5.35026C10.6383 5.35839 10.7124 5.38154 10.7799 5.41839C10.8473 5.45525 10.9068 5.50507 10.955 5.56499C11.0081 5.62534 11.0481 5.69602 11.0726 5.77259C11.0971 5.84916 11.1055 5.92997 11.0973 6.00994C11.0891 6.08991 11.0644 6.16732 11.0249 6.23731C10.9853 6.3073 10.9317 6.36836 10.8675 6.41666L7.36745 9.23416C7.26308 9.31995 7.13215 9.36686 6.99704 9.36686C6.86192 9.36686 6.731 9.31995 6.62662 9.23416L3.12662 6.31749C3.05603 6.25897 3.00022 6.18463 2.96374 6.10051C2.92725 6.01639 2.91111 5.92485 2.91662 5.83332Z" fill="black"/>
                        </svg>
                    </li>
                </ul>
            </aside>
        </figure>
    </section>
    <form action="assets/libs/FAQ-search.php"  method="post" class="feedback section fulscreen-bg pr-l-aq">
        <h2><a name="feedback">Не нашли ответ? Спросите онлайн!</a> </h2>
        <fieldset>
            <label for="qt">Текст вопроса</label>
            <textarea class="to-grey" required maxlength="255" name="question_text" id="qt" cols="30" rows="10"></textarea>
        </fieldset>
        <fieldset>
            <label for="cont">Ваш телефон / почта</label>
            <input class="to-grey" required maxlength="255" type="text" name="contact" id="cont">

            <button class="pr-aq" type="submit">Отправить</button>
        </fieldset>
    </form>
    <section class="tec-support section section fulscreen-bg pr-l-pink">
        <h2>Контакты тех-поддержки</h2>
        <section class="contact-sec section-insides">
            <figure class="card tels to-grey">
                    <a class="tel" href="tel:8-495-873-92-92">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.96 1.32268L4.79 1.07268C5.16783 0.95869 5.57422 0.986094 5.93333 1.14977C6.29243 1.31346 6.57969 1.60223 6.7415 1.96218L7.258 3.11118C7.39717 3.42071 7.43594 3.76605 7.36887 4.09873C7.30179 4.43142 7.13224 4.73476 6.884 4.96618L5.9815 5.80768C5.97035 5.81809 5.96119 5.83047 5.9545 5.84418C5.86 6.03718 6.0035 6.55268 6.453 7.33168C6.96 8.20968 7.3515 8.55668 7.533 8.50318L8.7175 8.14068C9.04189 8.04162 9.38915 8.04655 9.7106 8.15477C10.032 8.263 10.3116 8.4691 10.51 8.74418L11.244 9.76068C11.4744 10.0798 11.5812 10.4718 11.5444 10.8638C11.5076 11.2557 11.3298 11.621 11.044 11.8917L10.4125 12.4892C10.1929 12.6972 9.92623 12.849 9.63526 12.9316C9.34429 13.0142 9.03764 13.0252 8.7415 12.9637C6.983 12.5977 5.4075 11.1817 4.0015 8.74668C2.595 6.31018 2.1565 4.23518 2.7215 2.52868C2.81608 2.24298 2.97803 1.98425 3.19369 1.77434C3.40934 1.56443 3.67235 1.40951 3.9605 1.32268H3.96ZM4.177 2.04068C4.0041 2.09275 3.84628 2.18568 3.71687 2.31161C3.58746 2.43754 3.49027 2.59277 3.4335 2.76418C2.9465 4.23468 3.341 6.10268 4.651 8.37168C5.96 10.6392 7.379 11.9142 8.894 12.2292C9.07177 12.2661 9.25585 12.2595 9.43051 12.2099C9.60517 12.1603 9.76522 12.0691 9.897 11.9442L10.528 11.3472C10.6819 11.2014 10.7778 11.0048 10.7976 10.7937C10.8175 10.5827 10.7601 10.3716 10.636 10.1997L9.902 9.18268C9.79517 9.03459 9.64469 8.92363 9.47164 8.86535C9.29859 8.80707 9.11165 8.80439 8.937 8.85768L7.7495 9.22118C7.0925 9.41668 6.4745 8.86918 5.8035 7.70618C5.235 6.72218 5.038 6.01118 5.281 5.51468C5.328 5.41868 5.392 5.33218 5.47 5.25918L6.3725 4.41768C6.50622 4.29307 6.59756 4.12971 6.6337 3.95054C6.66984 3.77137 6.64896 3.58538 6.574 3.41868L6.0575 2.27018C5.97038 2.07631 5.81567 1.92078 5.62226 1.83263C5.42885 1.74448 5.20997 1.72975 5.0065 1.79118L4.1765 2.04118L4.177 2.04068Z" fill="#373737"/>
                        </svg>
                        8-495-873-92-92
                    </a>
                    <a class="tel" href="tel:8-495-823-55-22">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.96 1.32268L4.79 1.07268C5.16783 0.95869 5.57422 0.986094 5.93333 1.14977C6.29243 1.31346 6.57969 1.60223 6.7415 1.96218L7.258 3.11118C7.39717 3.42071 7.43594 3.76605 7.36887 4.09873C7.30179 4.43142 7.13224 4.73476 6.884 4.96618L5.9815 5.80768C5.97035 5.81809 5.96119 5.83047 5.9545 5.84418C5.86 6.03718 6.0035 6.55268 6.453 7.33168C6.96 8.20968 7.3515 8.55668 7.533 8.50318L8.7175 8.14068C9.04189 8.04162 9.38915 8.04655 9.7106 8.15477C10.032 8.263 10.3116 8.4691 10.51 8.74418L11.244 9.76068C11.4744 10.0798 11.5812 10.4718 11.5444 10.8638C11.5076 11.2557 11.3298 11.621 11.044 11.8917L10.4125 12.4892C10.1929 12.6972 9.92623 12.849 9.63526 12.9316C9.34429 13.0142 9.03764 13.0252 8.7415 12.9637C6.983 12.5977 5.4075 11.1817 4.0015 8.74668C2.595 6.31018 2.1565 4.23518 2.7215 2.52868C2.81608 2.24298 2.97803 1.98425 3.19369 1.77434C3.40934 1.56443 3.67235 1.40951 3.9605 1.32268H3.96ZM4.177 2.04068C4.0041 2.09275 3.84628 2.18568 3.71687 2.31161C3.58746 2.43754 3.49027 2.59277 3.4335 2.76418C2.9465 4.23468 3.341 6.10268 4.651 8.37168C5.96 10.6392 7.379 11.9142 8.894 12.2292C9.07177 12.2661 9.25585 12.2595 9.43051 12.2099C9.60517 12.1603 9.76522 12.0691 9.897 11.9442L10.528 11.3472C10.6819 11.2014 10.7778 11.0048 10.7976 10.7937C10.8175 10.5827 10.7601 10.3716 10.636 10.1997L9.902 9.18268C9.79517 9.03459 9.64469 8.92363 9.47164 8.86535C9.29859 8.80707 9.11165 8.80439 8.937 8.85768L7.7495 9.22118C7.0925 9.41668 6.4745 8.86918 5.8035 7.70618C5.235 6.72218 5.038 6.01118 5.281 5.51468C5.328 5.41868 5.392 5.33218 5.47 5.25918L6.3725 4.41768C6.50622 4.29307 6.59756 4.12971 6.6337 3.95054C6.66984 3.77137 6.64896 3.58538 6.574 3.41868L6.0575 2.27018C5.97038 2.07631 5.81567 1.92078 5.62226 1.83263C5.42885 1.74448 5.20997 1.72975 5.0065 1.79118L4.1765 2.04118L4.177 2.04068Z" fill="#373737"/>
                        </svg>
                        8-495-823-55-22
                    </a>
            </figure>
            <figure class="card to-grey">
                <a href="mailto:ufomus.help@gmail.com">ufomus.help@gmail.com</a>
            </figure>
            <figure class="card social to-grey">
                    <a href="https://vk.com/">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M31.2667 7.93075C31.488 7.20275 31.2667 6.66675 30.2067 6.66675H26.7067C25.816 6.66675 25.4053 7.12941 25.1827 7.64008C25.1827 7.64008 23.4027 11.9014 20.8813 14.6694C20.0653 15.4721 19.6947 15.7267 19.2493 15.7267C19.0267 15.7267 18.692 15.4721 18.692 14.7427V7.93075C18.692 7.05608 18.4467 6.66675 17.7053 6.66675H12.2013C11.6453 6.66675 11.3107 7.07208 11.3107 7.45741C11.3107 8.28541 12.572 8.47741 12.7013 10.8081V15.8721C12.7013 16.9827 12.4973 17.1841 12.052 17.1841C10.8653 17.1841 7.97867 12.9027 6.26533 8.00408C5.93333 7.05075 5.59733 6.66675 4.70267 6.66675H1.2C0.2 6.66675 0 7.12941 0 7.64008C0 8.54941 1.18667 13.0667 5.52667 19.0414C8.42 23.1214 12.4933 25.3334 16.204 25.3334C18.4293 25.3334 18.704 24.8427 18.704 23.9961V20.9121C18.704 19.9294 18.9147 19.7334 19.62 19.7334C20.14 19.7334 21.0293 19.9894 23.1067 21.9561C25.48 24.2881 25.8707 25.3334 27.2067 25.3334H30.7067C31.7067 25.3334 32.208 24.8427 31.92 23.8721C31.6027 22.9067 30.4693 21.5054 28.9667 19.8427C28.1507 18.8961 26.9267 17.8761 26.5547 17.3654C26.036 16.7107 26.184 16.4187 26.5547 15.8361C26.5547 15.8361 30.8213 9.93475 31.2653 7.93075H31.2667Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0">
                            <rect width="32" height="32" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </a> 
                    <a href="https://www.facebook.com/">
                    <svg width="16" height="32" viewBox="0 0 16 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M3.96773 32V16.9847H0V11.5784H3.96773V6.9608C3.96773 3.33222 6.31149 0 11.712 0C13.8986 0 15.5155 0.20976 15.5155 0.20976L15.388 5.25827C15.388 5.25827 13.7391 5.24221 11.9397 5.24221C9.99218 5.24221 9.68016 6.14029 9.68016 7.63088V11.5784H15.5429L15.2878 16.9847H9.68016V32H3.96773Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="15.5429" height="32" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>

                    </a>
                    <a href="https://twitter.com/">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.524 6.58269C30.4107 7.07602 29.2147 7.40935 27.9573 7.56002C29.2547 6.78374 30.2253 5.56198 30.688 4.12269C29.4691 4.84667 28.1351 5.35628 26.744 5.62935C25.8085 4.63051 24.5694 3.96846 23.2191 3.74599C21.8688 3.52352 20.4828 3.75308 19.2763 4.39902C18.0698 5.04497 17.1104 6.07117 16.5469 7.31829C15.9834 8.56542 15.8474 9.96369 16.16 11.296C13.6903 11.172 11.2742 10.5301 9.06857 9.41189C6.86296 8.2937 4.91712 6.72424 3.35734 4.80535C2.824 5.72535 2.51734 6.79202 2.51734 7.92802C2.51674 8.95068 2.76858 9.95768 3.25051 10.8597C3.73244 11.7617 4.42955 12.5307 5.28 13.0987C4.2937 13.0673 3.32917 12.8008 2.46667 12.3214V12.4014C2.46657 13.8357 2.96271 15.2259 3.87091 16.336C4.77911 17.4462 6.04343 18.2079 7.44934 18.492C6.53438 18.7396 5.57512 18.7761 4.644 18.5987C5.04067 19.8328 5.81333 20.9121 6.85383 21.6853C7.89432 22.4585 9.15056 22.8869 10.4467 22.9107C8.24645 24.6379 5.52919 25.5748 2.732 25.5707C2.23651 25.5708 1.74144 25.5419 1.24934 25.484C4.08864 27.3096 7.39379 28.2785 10.7693 28.2747C22.196 28.2747 28.4427 18.8107 28.4427 10.6027C28.4427 10.336 28.436 10.0667 28.424 9.80002C29.6391 8.92132 30.6879 7.83322 31.5213 6.58669L31.524 6.58269Z" fill="white"/>
                        </svg>
                    </a>
            </figure>
        </section>
    </section>
</main>