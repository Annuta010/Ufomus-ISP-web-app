<header>
    <nav id="header-nav">
        <a href="index.php" class="logo">
            <img class="logo-dark" src="assets/icons/header/logo.svg" alt="ufomus">
            <img class="logo-light hidden" src="assets/icons/header/logo-light.svg" alt="ufomus">
        </a>
        <figure>
            <form action="" method="post" class="facetype no-color-changes">
                <ul class="buttons">
                    <input type="hidden" name="type">
                    <li <?php if($usertype == "Частным лицам"):?>class="active" <?php endif; ?>>Частным лицам</li>
                    <li <?php if($usertype == "Бизнесу"):?>class="active" <?php endif; ?>>Бизнесу</li>
                </ul>
            </form>
            <ul class="header-rigth-links">
                <li id="reg-parent">
                    <svg class="to-white-svg-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1" fill="white">
                    <path d="M8 1C9.5913 1 11.1174 1.63214 12.2426 2.75736C13.3679 3.88258 14 5.4087 14 7C14 9.867 12.065 12.506 8.268 14.922C8.18787 14.9729 8.09492 14.9999 8 14.9999C7.90508 14.9999 7.81213 14.9729 7.732 14.922C3.935 12.506 2 9.867 2 7C2 5.4087 2.63214 3.88258 3.75736 2.75736C4.88258 1.63214 6.4087 1 8 1V1ZM8 2C6.67392 2 5.40215 2.52678 4.46447 3.46447C3.52678 4.40215 3 5.67392 3 7C3 9.325 4.54 11.558 7.68 13.692L8 13.905L8.32 13.692C11.46 11.558 13 9.325 13 7C13 5.67392 12.4732 4.40215 11.5355 3.46447C10.5979 2.52678 9.32608 2 8 2V2ZM8 5.5C8.19698 5.5 8.39204 5.5388 8.57403 5.61418C8.75601 5.68956 8.92137 5.80005 9.06066 5.93934C9.19995 6.07863 9.31044 6.24399 9.38582 6.42597C9.4612 6.60796 9.5 6.80302 9.5 7C9.5 7.19698 9.4612 7.39204 9.38582 7.57403C9.31044 7.75601 9.19995 7.92137 9.06066 8.06066C8.92137 8.19995 8.75601 8.31044 8.57403 8.38582C8.39204 8.4612 8.19698 8.5 8 8.5C7.60218 8.5 7.22064 8.34196 6.93934 8.06066C6.65804 7.77936 6.5 7.39782 6.5 7C6.5 6.60218 6.65804 6.22064 6.93934 5.93934C7.22064 5.65804 7.60218 5.5 8 5.5V5.5Z"/>
                    </mask>
                    <path d="M8 1C9.5913 1 11.1174 1.63214 12.2426 2.75736C13.3679 3.88258 14 5.4087 14 7C14 9.867 12.065 12.506 8.268 14.922C8.18787 14.9729 8.09492 14.9999 8 14.9999C7.90508 14.9999 7.81213 14.9729 7.732 14.922C3.935 12.506 2 9.867 2 7C2 5.4087 2.63214 3.88258 3.75736 2.75736C4.88258 1.63214 6.4087 1 8 1V1ZM8 2C6.67392 2 5.40215 2.52678 4.46447 3.46447C3.52678 4.40215 3 5.67392 3 7C3 9.325 4.54 11.558 7.68 13.692L8 13.905L8.32 13.692C11.46 11.558 13 9.325 13 7C13 5.67392 12.4732 4.40215 11.5355 3.46447C10.5979 2.52678 9.32608 2 8 2V2ZM8 5.5C8.19698 5.5 8.39204 5.5388 8.57403 5.61418C8.75601 5.68956 8.92137 5.80005 9.06066 5.93934C9.19995 6.07863 9.31044 6.24399 9.38582 6.42597C9.4612 6.60796 9.5 6.80302 9.5 7C9.5 7.19698 9.4612 7.39204 9.38582 7.57403C9.31044 7.75601 9.19995 7.92137 9.06066 8.06066C8.92137 8.19995 8.75601 8.31044 8.57403 8.38582C8.39204 8.4612 8.19698 8.5 8 8.5C7.60218 8.5 7.22064 8.34196 6.93934 8.06066C6.65804 7.77936 6.5 7.39782 6.5 7C6.5 6.60218 6.65804 6.22064 6.93934 5.93934C7.22064 5.65804 7.60218 5.5 8 5.5V5.5Z" stroke="#373737" stroke-width="2" mask="url(#path-1-inside-1)"/>
                    </svg>
                    <span>Москва</span>
                    <ul id="our-regions">
                        <svg class="to-white-svg" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.18748 4.00932C5.03031 3.85752 4.81981 3.77352 4.60131 3.77542C4.38281 3.77732 4.1738 3.86496 4.0193 4.01947C3.86479 4.17398 3.77715 4.38299 3.77525 4.60148C3.77335 4.81998 3.85735 5.03048 4.00915 5.18765L8.82165 10.0002L4.00831 14.8127C3.92872 14.8895 3.86524 14.9815 3.82156 15.0831C3.77789 15.1848 3.7549 15.2942 3.75394 15.4048C3.75298 15.5155 3.77406 15.6252 3.81596 15.7276C3.85786 15.83 3.91974 15.9231 3.99798 16.0013C4.07623 16.0796 4.16927 16.1414 4.27168 16.1833C4.3741 16.2252 4.48383 16.2463 4.59448 16.2454C4.70513 16.2444 4.81448 16.2214 4.91615 16.1777C5.01782 16.1341 5.10977 16.0706 5.18665 15.991L9.99998 11.1785L14.8125 15.991C14.9696 16.1428 15.1801 16.2268 15.3986 16.2249C15.6171 16.223 15.8262 16.1353 15.9807 15.9808C16.1352 15.8263 16.2228 15.6173 16.2247 15.3988C16.2266 15.1803 16.1426 14.9698 15.9908 14.8127L11.1783 10.0002L15.9908 5.18765C16.1426 5.03048 16.2266 4.81998 16.2247 4.60148C16.2228 4.38299 16.1352 4.17398 15.9807 4.01947C15.8262 3.86496 15.6171 3.77732 15.3986 3.77542C15.1801 3.77352 14.9696 3.85752 14.8125 4.00932L9.99998 8.82182L5.18748 4.00848V4.00932Z" fill="#373737"/>
                        </svg>
                        <li>Москва</li>
                        <li>Московская область</li>
                        <li>Сергиев Посад</li>
                        <li>Видное</li>
                        <li>Домодедово</li>
                    </ul>
                    
                </li>
                <li>
                    <a href="auth.php">
                        <svg class="to-white-svg-stroke" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 6C13 6.79565 12.6839 7.55871 12.1213 8.12132C11.5587 8.68393 10.7956 9 9.99997 9C9.20432 9 8.44126 8.68393 7.87865 8.12132C7.31604 7.55871 6.99997 6.79565 6.99997 6C6.99997 5.20435 7.31604 4.44129 7.87865 3.87868C8.44126 3.31607 9.20432 3 9.99997 3C10.7956 3 11.5587 3.31607 12.1213 3.87868C12.6839 4.44129 13 5.20435 13 6V6Z" stroke="#373737" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.99999 9.1665C8.45289 9.1665 6.96916 9.78109 5.8752 10.875C4.78124 11.969 4.16666 13.4527 4.16666 14.9998H15.8333C15.8333 13.4527 15.2187 11.969 14.1248 10.875C13.0308 9.78109 11.5471 9.1665 9.99999 9.1665V9.1665Z" stroke="#373737" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Личный кабинет</span>
                    </a> 
                </li>
                <li class="menu">
                    <button>
                        <div id="burger"></div>
                    </button>
                    <ul class="burger-links">
                        <li><a href="help.php">Помощь</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                        <li><a href="documents.php">Документация</a></li>
                        <li>
                            <p>Тех поддержка</p>
                            <a href="tel:8-495-873-92-92">
                            <svg class="to-white-svg" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.96 1.32268L4.79 1.07268C5.16783 0.95869 5.57422 0.986094 5.93333 1.14977C6.29243 1.31346 6.57969 1.60223 6.7415 1.96218L7.258 3.11118C7.39717 3.42071 7.43594 3.76605 7.36887 4.09873C7.30179 4.43142 7.13224 4.73476 6.884 4.96618L5.9815 5.80768C5.97035 5.81809 5.96119 5.83047 5.9545 5.84418C5.86 6.03718 6.0035 6.55268 6.453 7.33168C6.96 8.20968 7.3515 8.55668 7.533 8.50318L8.7175 8.14068C9.04189 8.04162 9.38915 8.04655 9.7106 8.15477C10.032 8.263 10.3116 8.4691 10.51 8.74418L11.244 9.76068C11.4744 10.0798 11.5812 10.4718 11.5444 10.8638C11.5076 11.2557 11.3298 11.621 11.044 11.8917L10.4125 12.4892C10.1929 12.6972 9.92623 12.849 9.63526 12.9316C9.34429 13.0142 9.03764 13.0252 8.7415 12.9637C6.983 12.5977 5.4075 11.1817 4.0015 8.74668C2.595 6.31018 2.1565 4.23518 2.7215 2.52868C2.81608 2.24298 2.97803 1.98425 3.19369 1.77434C3.40934 1.56443 3.67235 1.40951 3.9605 1.32268H3.96ZM4.177 2.04068C4.0041 2.09275 3.84628 2.18568 3.71687 2.31161C3.58746 2.43754 3.49027 2.59277 3.4335 2.76418C2.9465 4.23468 3.341 6.10268 4.651 8.37168C5.96 10.6392 7.379 11.9142 8.894 12.2292C9.07177 12.2661 9.25585 12.2595 9.43051 12.2099C9.60517 12.1603 9.76522 12.0691 9.897 11.9442L10.528 11.3472C10.6819 11.2014 10.7778 11.0048 10.7976 10.7937C10.8175 10.5827 10.7601 10.3716 10.636 10.1997L9.902 9.18268C9.79517 9.03459 9.64469 8.92363 9.47164 8.86535C9.29859 8.80707 9.11165 8.80439 8.937 8.85768L7.7495 9.22118C7.0925 9.41668 6.4745 8.86918 5.8035 7.70618C5.235 6.72218 5.038 6.01118 5.281 5.51468C5.328 5.41868 5.392 5.33218 5.47 5.25918L6.3725 4.41768C6.50622 4.29307 6.59756 4.12971 6.6337 3.95054C6.66984 3.77137 6.64896 3.58538 6.574 3.41868L6.0575 2.27018C5.97038 2.07631 5.81567 1.92078 5.62226 1.83263C5.42885 1.74448 5.20997 1.72975 5.0065 1.79118L4.1765 2.04118L4.177 2.04068Z" fill="#373737"/>
                            </svg>
                                8-495-873-92-92
                            </a>
                        </li>
                        <li>
                            <p>Подключение услуг</p>
                            <a href="tel:8-495-823-64-22">
                            <svg class="to-white-svg" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.96 1.32268L4.79 1.07268C5.16783 0.95869 5.57422 0.986094 5.93333 1.14977C6.29243 1.31346 6.57969 1.60223 6.7415 1.96218L7.258 3.11118C7.39717 3.42071 7.43594 3.76605 7.36887 4.09873C7.30179 4.43142 7.13224 4.73476 6.884 4.96618L5.9815 5.80768C5.97035 5.81809 5.96119 5.83047 5.9545 5.84418C5.86 6.03718 6.0035 6.55268 6.453 7.33168C6.96 8.20968 7.3515 8.55668 7.533 8.50318L8.7175 8.14068C9.04189 8.04162 9.38915 8.04655 9.7106 8.15477C10.032 8.263 10.3116 8.4691 10.51 8.74418L11.244 9.76068C11.4744 10.0798 11.5812 10.4718 11.5444 10.8638C11.5076 11.2557 11.3298 11.621 11.044 11.8917L10.4125 12.4892C10.1929 12.6972 9.92623 12.849 9.63526 12.9316C9.34429 13.0142 9.03764 13.0252 8.7415 12.9637C6.983 12.5977 5.4075 11.1817 4.0015 8.74668C2.595 6.31018 2.1565 4.23518 2.7215 2.52868C2.81608 2.24298 2.97803 1.98425 3.19369 1.77434C3.40934 1.56443 3.67235 1.40951 3.9605 1.32268H3.96ZM4.177 2.04068C4.0041 2.09275 3.84628 2.18568 3.71687 2.31161C3.58746 2.43754 3.49027 2.59277 3.4335 2.76418C2.9465 4.23468 3.341 6.10268 4.651 8.37168C5.96 10.6392 7.379 11.9142 8.894 12.2292C9.07177 12.2661 9.25585 12.2595 9.43051 12.2099C9.60517 12.1603 9.76522 12.0691 9.897 11.9442L10.528 11.3472C10.6819 11.2014 10.7778 11.0048 10.7976 10.7937C10.8175 10.5827 10.7601 10.3716 10.636 10.1997L9.902 9.18268C9.79517 9.03459 9.64469 8.92363 9.47164 8.86535C9.29859 8.80707 9.11165 8.80439 8.937 8.85768L7.7495 9.22118C7.0925 9.41668 6.4745 8.86918 5.8035 7.70618C5.235 6.72218 5.038 6.01118 5.281 5.51468C5.328 5.41868 5.392 5.33218 5.47 5.25918L6.3725 4.41768C6.50622 4.29307 6.59756 4.12971 6.6337 3.95054C6.66984 3.77137 6.64896 3.58538 6.574 3.41868L6.0575 2.27018C5.97038 2.07631 5.81567 1.92078 5.62226 1.83263C5.42885 1.74448 5.20997 1.72975 5.0065 1.79118L4.1765 2.04118L4.177 2.04068Z" fill="#373737"/>
                            </svg>
                                8-495-823-64-22
                            </a>
                        </li>
                        <li ><p class="theme-btn">Темная тема</p></li>
                    </ul>
                </li>
                <li>
                    <p>Тех поддержка</p>
                    <a href="tel:8-495-873-92-92">
                    <svg class="to-white-svg" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.96 1.32268L4.79 1.07268C5.16783 0.95869 5.57422 0.986094 5.93333 1.14977C6.29243 1.31346 6.57969 1.60223 6.7415 1.96218L7.258 3.11118C7.39717 3.42071 7.43594 3.76605 7.36887 4.09873C7.30179 4.43142 7.13224 4.73476 6.884 4.96618L5.9815 5.80768C5.97035 5.81809 5.96119 5.83047 5.9545 5.84418C5.86 6.03718 6.0035 6.55268 6.453 7.33168C6.96 8.20968 7.3515 8.55668 7.533 8.50318L8.7175 8.14068C9.04189 8.04162 9.38915 8.04655 9.7106 8.15477C10.032 8.263 10.3116 8.4691 10.51 8.74418L11.244 9.76068C11.4744 10.0798 11.5812 10.4718 11.5444 10.8638C11.5076 11.2557 11.3298 11.621 11.044 11.8917L10.4125 12.4892C10.1929 12.6972 9.92623 12.849 9.63526 12.9316C9.34429 13.0142 9.03764 13.0252 8.7415 12.9637C6.983 12.5977 5.4075 11.1817 4.0015 8.74668C2.595 6.31018 2.1565 4.23518 2.7215 2.52868C2.81608 2.24298 2.97803 1.98425 3.19369 1.77434C3.40934 1.56443 3.67235 1.40951 3.9605 1.32268H3.96ZM4.177 2.04068C4.0041 2.09275 3.84628 2.18568 3.71687 2.31161C3.58746 2.43754 3.49027 2.59277 3.4335 2.76418C2.9465 4.23468 3.341 6.10268 4.651 8.37168C5.96 10.6392 7.379 11.9142 8.894 12.2292C9.07177 12.2661 9.25585 12.2595 9.43051 12.2099C9.60517 12.1603 9.76522 12.0691 9.897 11.9442L10.528 11.3472C10.6819 11.2014 10.7778 11.0048 10.7976 10.7937C10.8175 10.5827 10.7601 10.3716 10.636 10.1997L9.902 9.18268C9.79517 9.03459 9.64469 8.92363 9.47164 8.86535C9.29859 8.80707 9.11165 8.80439 8.937 8.85768L7.7495 9.22118C7.0925 9.41668 6.4745 8.86918 5.8035 7.70618C5.235 6.72218 5.038 6.01118 5.281 5.51468C5.328 5.41868 5.392 5.33218 5.47 5.25918L6.3725 4.41768C6.50622 4.29307 6.59756 4.12971 6.6337 3.95054C6.66984 3.77137 6.64896 3.58538 6.574 3.41868L6.0575 2.27018C5.97038 2.07631 5.81567 1.92078 5.62226 1.83263C5.42885 1.74448 5.20997 1.72975 5.0065 1.79118L4.1765 2.04118L4.177 2.04068Z" fill="#373737"/>
                    </svg>
                        8-495-873-92-92
                    </a>
                </li>
                <li>
                    <p>Подключение услуг</p>
                    <a href="tel:8-495-823-64-22">
                    <svg class="to-white-svg" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.96 1.32268L4.79 1.07268C5.16783 0.95869 5.57422 0.986094 5.93333 1.14977C6.29243 1.31346 6.57969 1.60223 6.7415 1.96218L7.258 3.11118C7.39717 3.42071 7.43594 3.76605 7.36887 4.09873C7.30179 4.43142 7.13224 4.73476 6.884 4.96618L5.9815 5.80768C5.97035 5.81809 5.96119 5.83047 5.9545 5.84418C5.86 6.03718 6.0035 6.55268 6.453 7.33168C6.96 8.20968 7.3515 8.55668 7.533 8.50318L8.7175 8.14068C9.04189 8.04162 9.38915 8.04655 9.7106 8.15477C10.032 8.263 10.3116 8.4691 10.51 8.74418L11.244 9.76068C11.4744 10.0798 11.5812 10.4718 11.5444 10.8638C11.5076 11.2557 11.3298 11.621 11.044 11.8917L10.4125 12.4892C10.1929 12.6972 9.92623 12.849 9.63526 12.9316C9.34429 13.0142 9.03764 13.0252 8.7415 12.9637C6.983 12.5977 5.4075 11.1817 4.0015 8.74668C2.595 6.31018 2.1565 4.23518 2.7215 2.52868C2.81608 2.24298 2.97803 1.98425 3.19369 1.77434C3.40934 1.56443 3.67235 1.40951 3.9605 1.32268H3.96ZM4.177 2.04068C4.0041 2.09275 3.84628 2.18568 3.71687 2.31161C3.58746 2.43754 3.49027 2.59277 3.4335 2.76418C2.9465 4.23468 3.341 6.10268 4.651 8.37168C5.96 10.6392 7.379 11.9142 8.894 12.2292C9.07177 12.2661 9.25585 12.2595 9.43051 12.2099C9.60517 12.1603 9.76522 12.0691 9.897 11.9442L10.528 11.3472C10.6819 11.2014 10.7778 11.0048 10.7976 10.7937C10.8175 10.5827 10.7601 10.3716 10.636 10.1997L9.902 9.18268C9.79517 9.03459 9.64469 8.92363 9.47164 8.86535C9.29859 8.80707 9.11165 8.80439 8.937 8.85768L7.7495 9.22118C7.0925 9.41668 6.4745 8.86918 5.8035 7.70618C5.235 6.72218 5.038 6.01118 5.281 5.51468C5.328 5.41868 5.392 5.33218 5.47 5.25918L6.3725 4.41768C6.50622 4.29307 6.59756 4.12971 6.6337 3.95054C6.66984 3.77137 6.64896 3.58538 6.574 3.41868L6.0575 2.27018C5.97038 2.07631 5.81567 1.92078 5.62226 1.83263C5.42885 1.74448 5.20997 1.72975 5.0065 1.79118L4.1765 2.04118L4.177 2.04068Z" fill="#373737"/>
                    </svg>

                        8-495-823-64-22
                    </a>
                </li>
            </ul>
        </figure>
    </nav>
    <nav id="secondary-nav">
            <form action="" method="post" class="facetype no-color-changes">
                <ul class="buttons">
                    <input type="hidden" name="type">
                    <li <?php if($usertype == "Частным лицам"):?>class="active" <?php endif; ?>>Частным лицам</li>
                    <li <?php if($usertype == "Бизнесу"):?>class="active" <?php endif; ?>>Бизнесу</li>
                </ul>
            </form>
    </nav>
</header>
