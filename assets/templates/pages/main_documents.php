<main  class="documents">
    <h1>Документация</h1>
    <ul class="filter-cards section-insides">
        <?php foreach($res2["items"] as $row):?>
            <li class="to-grey" data-cat="<?= $row["Категория"] ?>">
                 <input type="checkbox" name="" id="">
                <svg width="45" height="41" viewBox="0 0 45 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.10146 33.3957C5.21378 36.3177 12.3911 37.131 15.7085 35.9083C36.2441 48.6868 36.2762 28.3276 37.4979 24.4861C38.7196 20.6445 39.4533 22.6349 43.5033 16.2438C47.5533 9.85257 40.7763 -6.48978 30.5806 3.67377C20.3849 13.8373 20.6166 -0.198173 8.41128 2.50004C3.10155 3.67385 -3.78078 13.7009 2.64548 18.8684C9.07174 24.0359 -3.17055 24.7196 3.10146 33.3957Z" fill="#FD3381"/>
                </svg>
                <p><?= $row["Категория"] ?> </p>
            </li>
        <?php endforeach; ?>
        <li class="to-grey">
            <input type="checkbox" name="" id="">
            <svg width="45" height="41" viewBox="0 0 45 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.10146 33.3957C5.21378 36.3177 12.3911 37.131 15.7085 35.9083C36.2441 48.6868 36.2762 28.3276 37.4979 24.4861C38.7196 20.6445 39.4533 22.6349 43.5033 16.2438C47.5533 9.85257 40.7763 -6.48978 30.5806 3.67377C20.3849 13.8373 20.6166 -0.198173 8.41128 2.50004C3.10155 3.67385 -3.78078 13.7009 2.64548 18.8684C9.07174 24.0359 -3.17055 24.7196 3.10146 33.3957Z" fill="#FD3381"/>
            </svg>
            <p>Прочее</p>
         </li>
    </ul>
    <ul class="document-list section-insides">
        <?php foreach($res["items"] as $row):?>
            <li data-doccat="<?= $row["Категория"] ?>">
                <a href="<?= $row["Ссылка"] ?>" target="_blank">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.3733 1.625C10.5113 1.625 9.68469 1.96741 9.07519 2.5769C8.4657 3.1864 8.12329 4.01305 8.12329 4.875V17.875C8.12329 18.737 8.4657 19.5636 9.07519 20.1731C9.68469 20.7826 10.5113 21.125 11.3733 21.125H19.4999C20.3619 21.125 21.1885 20.7826 21.798 20.1731C22.4075 19.5636 22.7499 18.737 22.7499 17.875V8.9375H22.7467V7.17275C22.7465 6.52674 22.4899 5.9072 22.0333 5.45025L18.923 2.33838C18.4661 1.88172 17.8466 1.62514 17.2005 1.625H11.3717H11.3733ZM19.4999 19.5H11.3733C10.9423 19.5 10.529 19.3288 10.2242 19.024C9.9195 18.7193 9.74829 18.306 9.74829 17.875V4.875C9.74829 4.44402 9.9195 4.0307 10.2242 3.72595C10.529 3.4212 10.9423 3.25 11.3733 3.25H16.2483V5.6875C16.2483 6.33397 16.5051 6.95395 16.9622 7.41107C17.4193 7.86819 18.0393 8.125 18.6858 8.125H21.1233V9.84912H21.1249V17.875C21.1249 18.306 20.9537 18.7193 20.649 19.024C20.3442 19.3288 19.9309 19.5 19.4999 19.5ZM20.7853 6.5H18.6842C18.4687 6.5 18.262 6.4144 18.1096 6.26202C17.9573 6.10965 17.8717 5.90299 17.8717 5.6875V3.58637L20.7853 6.5Z" fill="#FD3381"/>
                    <path d="M4.875 6.5C4.875 6.06902 5.0462 5.6557 5.35095 5.35095C5.6557 5.0462 6.06902 4.875 6.5 4.875V17.875C6.5 19.1679 7.01361 20.4079 7.92785 21.3221C8.84209 22.2364 10.0821 22.75 11.375 22.75H19.5C19.5 23.181 19.3288 23.5943 19.024 23.899C18.7193 24.2038 18.306 24.375 17.875 24.375H11.0338C9.40035 24.375 7.83385 23.7261 6.67886 22.5711C5.52387 21.4162 4.875 19.8497 4.875 18.2163V6.5Z" fill="#FD3381"/>
                </svg>
                <span><?= $row["Заголовок"] ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
