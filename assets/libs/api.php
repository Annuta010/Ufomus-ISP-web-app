<?php
    require_once("database.php");
    //Объявление нового класса Api:
    class Api {
        //Объявление функции «Запрос» со входным параметром в виде объекта $data:
        public function request($data) {
            global $pdo;
            //Конструкция выбора действий в зависимости от заголовочного атрибута объекта $data:
            switch($data->header) {
                //Образец конструкции:
                case "all from clients":
                    //SQL-запрос для выборки значений из базы данных:
                    $sql = "SELECT * FROM client";
                    //Подготовка SQL-запроса перед выполнением:
                    $query = $pdo->prepare($sql);
                    //Выполнение SQL-запроса:
                    $query->execute();
                    //Преобразование таблицы в ассоциативный массив:
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    //Объявление массива для формирования ответа с наличием заголовочным атрибутом:
                    $response["header"] = "client";
                    //Цикл перебора массивов исходной таблицы из БД для формирования многомерного массива:
                    foreach($result as $table) {
                        //Формирование второго элемента items многомерного массива для хранения содержимого таблицы:
                        $response ["items"][] = array(
                            //Запись содержимого каждой строки таблицы в массив с назначением новых индексов:
                            "ID пользователя" => $table["client_id"],
                            "Фамилия" => $table["last_name"],
                            "Имя" => $table["first_name"],
                            "Отчество" => $table["middle_name"],
                            "Телефон" => $table["phone_number"],
                            "Квартира" => $table["flat_number"],
                            "ID дома" => $table["connected_house_id"]
                        );
                    }
                break;
                case "all from tariffs":
                    $sql = "SELECT * FROM tariff WHERE tariff.status = 'Действующий'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "tariffs";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "ID тарифа" => $table["tariff_id"],
                            "Название" => $table["tariff_name"],
                            "Категория" => $table["category"],
                            "Стоимость" => $table["cost_per_mounth"],
                            "Тип" => $table["tariff_type"]
                        );
                    }
                break;
                case "all from tariff services":
                    $sql = "SELECT * FROM tariff_service";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "tariff services";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "ID услуги" => $table["tariff_service_id"],
                            "Описание" => $table["service_description"],
                            "Категория" => $table["service_category"],
                            "ID тарифа" => $table["tariff_id"]
                        );
                    }
                break;
                case "new tariff":
                    $sql = "INSERT INTO tariff (tariff_name, category, cost_per_mounth, status, tariff_type) VALUES (:tariff_name, 'Пользовательский', :amount, 'Действующий', 'Частным лицам')";
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "tariff_name" => $data->par3,
                        "amount" => $data->par1
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response = $result;
                break;
                case "insert tariff services":
                    $sql = "INSERT INTO tariff_service (service_category, service_description, tariff_id) VALUES (:category, :description, :tariff_id)";
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "tariff_id" => $data->par3,
                        "category" => $data->par2,
                        "description" => $data->par1
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response = $result;
                break;
                case "get tariff_id":
                    $sql = "SELECT * FROM tariff WHERE tariff_name = :tariff_name AND category = 'Пользовательский' AND cost_per_mounth = :amount";
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "tariff_name" => $data->par3,
                        "amount" => $data->par1
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "ID тарифа" => $table["tariff_id"]
                        );
                    }
                break;
                case "user tariffs":
                    $user = $data->par1;
                    $sql = "SELECT * FROM client_tariffs WHERE client_tariffs.user_id = :user";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $user
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "tariffs";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "ID тарифа" => $table["tariff_id"],
                            "Название" => $table["tariff_name"],
                            "Категория" => $table["category"],
                            "Тип" => $table["tariff_type"], 
                            "Стоимость" => $table["cost_per_mounth"]
                        );
                    }
                break;
                case "user traffic":
                    $user = $data->par1;
                    if ($data->par2 == "month") {
                        $dat1 = getdate()["mon"] - 1;
                        $dat2 = getdate()["mon"] + 1;
                        $dyear = getdate()["year"];
                    } else if ($data->par2 == "year") {
                        $dat1 = 0;
                        $dat2 = 13;
                        $dyear = getdate()["year"];
                    }

                    $sql = "SELECT * FROM client_traffic_per_month WHERE `user_id` = :user AND `month` > :dat1 AND `month` < :dat2 AND `year` = :dyear";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $user,
                        "dat1" => $dat1,
                        "dat2" => $dat2,
                        "dyear" => $dyear
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "tariffs";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            // "IP" => $table["from_ip"],
                            "Услуга" => $table["service_description"],
                            "Тариф" => $table["tariff"],
                            "Количество трафика" => $table["traffic_volume_sum"],
                            "Количество платного трафика" => $table["paid_traffic"],
                            "Стоимость" => $table["overlimit_traffic_cost"], 
                            "Сумма" => $table["amount_to_pay"]
                        );
                    }
                break;
                case "tariff details":
                    $sql = "SELECT * FROM tariff_details WHERE tariff.status = 'Действующий'";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "tariffs";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "ID тарифа" => $table["tariff_id"],
                            "Название" => $table["tariff_name"],
                            "Категория" => $table["category"]
                        );
                    }
                break;
                case "all from promos":
                    $sql = "SELECT * FROM promotion WHERE expiration_date > now()";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "promos";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "Процент скидки" => $table["discount_percent"],
                            "Описание" => $table["description"],
                            "Ссылка" => $table["img_link"],
                            "Заголовок" => $table["title"]
                        );
                    }
                break;
                case "user treaty":
                    $user = $data->par1;
                    $sql = "SELECT * FROM client_treaty WHERE client_treaty.user_id = :user";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $user
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Договора";
                    $count = $query->rowCount();
                    if($count) {
                        foreach($result as $table) {
                            $response ["items"][] = array(
                                "Фамилия" => $table["last_name"],
                                "Имя" => $table["first_name"],
                                "Ник" => $table["nickname"],
                                "Отчество" => $table["middle_name"],
                                "Телефон" => $table["phone_number"],
                                "Логин" => $table["login"],
                                "Пароль" => $table["password"],
                                "Ссылка" => $table["link"],
                                "Номер" => $table["personal_account_id"],
                                "Баланс" => $table["balans"],
                                "Статус" => $table["status"]
                            );
                        }
                    } else {
                        $response["header"] = "0";
                    }
                break;
                case "checkauth token":
                    $token = $data->par1;
                    $session = $data->par2;

                    $sql = "SELECT * FROM user_token WHERE token = :token AND session_id = :session AND token_expiration > now()";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "token" => $token,
                        "session" => $session
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $count = $query->rowCount();
                    if($count) {
                        $response["header"] = "success";
                        $response["items"]["ID Пользователя"] = $result[0]["id_user"];
                        $response["items"]["Уровень администрации"] = $result[0]["user_group_id"];
                    }
                    else {
                        $response["header"] = "checkauth user";
                    }

                break; 
                case "checkauth user":  
                    $login = $data->par1;
                    $password = md5($data->par2, false);

                    $sql = "SELECT * FROM user WHERE (user.login = :login OR user.nickname = :login) AND user.password = :password";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "login" => $login,
                        "password" => $password
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $count = $query->rowCount();
                    if($count) {
                        $response["action"] = "create token";
                        $response["header"] = "success";
                        $response["items"]["ID пользователя"] = $result[0]["user_id"];
                        $response["items"]["Уровень администрации"] = $result[0]["user_group_id"];
                    } else {
                        $response["header"] = "error";
                    }
                break;
                case "user info":
                    $sql = "SELECT * FROM user WHERE user_id = :user";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $data->par1,
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Пользователи";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "ID пользователя" => $table["user_id"],
                            "Ник" => $table["nickname"],
                            "Логин" => $table["login"],
                            "Пароль" => $table["password"],
                            "ID группы пользователя" => $table["user_group_id"],
                            "ID клиента" => $table["client_id"]

                        );
                    }                  
                break;
                case "delete user":
                    $sql = "DELETE FROM user WHERE user_id = :user";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $data->par1,
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Удаление пользователя";                
                break;
                case "delete token":
                    $sql = "DELETE FROM tokens WHERE (token = :token AND id_user = :user) OR token_expiration < now()";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "token" => $data->par1,
                        "user" => $data->par2
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Удаление токена";                
                break;
                case "update user info":
                    $sql = "UPDATE user SET login = :login, password = :password, nickname = :name WHERE user.user_id = :user ";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "login" => $data->par2,
                        "user" => $data->par1,
                        "name" => $data->par3,
                        "password" => $data->par4
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Обновление данных пользователя";                 
                break;
                case "check availability":
                    $sql = "SELECT * FROM connected_house WHERE region = :region AND street = :street AND house_number = :house";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "region" => $data->par1,
                        "street" => $data->par2,
                        "house" => $data->par3
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Доступные дома";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "Регион" => $table["region"],
                            "Улица" => $table["street"],
                            "Номер дома" => $table["house_number"],
                            "Строение" => $table["building"]
                        );
                    }                    
                break;
                case "new user":
                    $sql = "INSERT INTO user (login, password, nickname) VALUES (:login, :password, :nick)";
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "login" => $data->par1,
                        "password" => $data->par2,
                        "nick" => $data->par3
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response = $result;
                break;
                case "new request":
                    $sql = "INSERT INTO request (`status`, `region`, `street`, `house`, `building`, `flat`, `sender_name`, `sender_phone_number`, `tariff_id`) 
                    VALUES ( 'не рассмотрена', :region, :street, :house, :building, :flat, :name, :phone, :tariff);";
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "region" => $data->par1,
                        "street" => $data->par2,
                        "house" => $data->par3,
                        "building" => $data->par4,
                        "flat" => $data->par5,
                        "name" => $data->par6,
                        "phone" => $data->par7,
                        "tariff" => $data->par8
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "request created";
                break;
                case "create token":
                    $user = $data->par1;
                    $token = $data->par2;
                    $session = session_id();

                    $sql = "INSERT INTO tokens (id_user, token, session_id, token_expiration) VALUES (:user, :token, :session, DATE_ADD(now(), INTERVAL 24 MINUTE))";
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "user" => $user,
                        "token" => $token,
                        "session" => $session
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response = $result;
                break;
                case "update token":
                    $session = $data->par1;

                    $sql = "UPDATE `tokens` SET `token_start` = now(),`token_expiration`= DATE_ADD(now(), INTERVAL 24 MINUTE) WHERE session_id = :session AND token_expiration > now()";
                    
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "session" => $session
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response = $result;
                break;
                case "create promo":
                    $discount = $data->par3;
                    $descr = $data->par2;
                    $sdate = $data->par5;
                    $exdate = $data->par6;
                    $img = $data->par4;
                    $title = $data->par1;
                    $sql = "INSERT INTO `promotion` (`discount_percent`, `description`, `start_date`, `expiration_date`, `img_link`, `title`) VALUES (:discount, :descr, :sdate, :exdate, :img, :title)";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "discount" => $discount,
                        "descr" => $descr,
                        "sdate" => $sdate,
                        "exdate" => $exdate,
                        "img" => $img,
                        "title" => $title
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response = $result;
                break;
                case "all from documents":
                    $sql = "SELECT document.*, document_category.document_category_name FROM document LEFT JOIN document_category ON document.category = document_category.document_category_id";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Документы";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "Заголовок" => $table["title"],
                            "Ссылка" => $table["link"],
                            "Категория" => $table["document_category_name"]
                        );
                    }         
                break;
                case "all from document cat":
                    $sql = "SELECT * FROM document_category";
                    $query = $pdo->prepare($sql);
                    $query->execute();
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response["header"] = "Категории документов";
                    foreach($result as $table) {
                        $response ["items"][] = array(
                            "Категория" => $table["document_category_name"]
                        );
                    }         
                break;
                case "create question":
                    $question = $data->par1;
                    $user = $data->par2;
                    $contacts = $data->par3;
                    $sql = "INSERT INTO question (`question_text`, `user_id`, `user_contact`) VALUES (:question, :user, :contacts)";
                    $query = $pdo->prepare($sql);
                    $query->execute(array(
                        "question" => $question,
                        "user" => $user,
                        "contacts" => $contacts
                    ));
                    $result = $query->fetchAll(PDO::FETCH_ASSOC);
                    $response = $result;
                break;
                case "search question":
                $sql = "SELECT * FROM question WHERE ";
                
                   
                for ($i = 0; $i < count($data->arr); $i++) {
                    if($i == 0) {
                        $sql .= "question.question_text LIKE '%" . htmlspecialchars($data->arr[$i])  . "%'";
                    }
                     else {
                         $sql .=" OR question.question_text LIKE '%" .htmlspecialchars($data->arr[$i]) . "%'";
                     }
                 }
                 $query = $pdo->prepare($sql);
                 $query->execute();
                 $result = $query->fetchAll(PDO::FETCH_ASSOC);
                 $response["header"] = "Часто задаваемые вопросы";
                 foreach($result as $table) {
                     $response ["items"][] = array(
                         "Вопрос" => $table["question_text"],
                         "Ответ" => $table["answer_text"]
                     );
                 }           
                break;
            }
            //Возвращение ответа от сервера:
            return $response;
        }
    }

?>




