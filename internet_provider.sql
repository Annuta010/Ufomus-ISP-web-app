-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 07 2021 г., 09:35
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `internet_provider`
--

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(16) DEFAULT NULL,
  `flat_number` varchar(16) DEFAULT NULL,
  `connected_house_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`client_id`, `last_name`, `first_name`, `middle_name`, `phone_number`, `flat_number`, `connected_house_id`) VALUES
(1, 'Анохин', 'Владислав', 'Сергеевич', '6666', '112', 1),
(2, 'Суркина', 'Мария', 'Валерьевна', '8-903-765-11-28', '2', 1),
(3, 'Добролюбова', 'Анастасия', 'Денисовна', '8-999-611-08-35', '75', 2),
(4, 'Кормильцев', 'Алексей', NULL, '8-912-935-44-16', '452', NULL),
(5, 'Максимова', 'Алиса', 'Владимировна', '8-567-940-09-11', '1', 2);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `client_tariffs`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `client_tariffs` (
`user_id` int(11)
,`client_id` int(11)
,`last_name` varchar(255)
,`first_name` varchar(255)
,`middle_name` varchar(255)
,`phone_number` varchar(16)
,`tariff_id` int(11)
,`tariff_name` varchar(32)
,`category` varchar(20)
,`cost_per_mounth` decimal(19,4)
,`status` varchar(20)
,`promotion_id` int(11)
,`tariff_type` varchar(32)
,`treaty_id` int(11)
,`date` datetime
,`expiration_date` datetime
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `client_traffic_per_month`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `client_traffic_per_month` (
`traffic_volume_sum` decimal(32,0)
,`from_ip` varchar(32)
,`tariff` varchar(32)
,`service_description` varchar(255)
,`limit_GB` int(11)
,`overlimit_traffic_cost` decimal(19,4)
,`paid_traffic` decimal(33,0)
,`amount_to_pay` decimal(52,4)
,`month` int(2)
,`year` int(4)
,`client_id` int(11)
,`user_id` int(11)
,`personal_account_id` int(11)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `client_treaty`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `client_treaty` (
`user_id` int(11)
,`login` varchar(128)
,`nickname` varchar(64)
,`password` varchar(128)
,`client_id` int(11)
,`last_name` varchar(255)
,`first_name` varchar(255)
,`middle_name` varchar(255)
,`phone_number` varchar(16)
,`treaty_id` int(11)
,`ip` varchar(18)
,`date` datetime
,`expiration_date` datetime
,`link` varchar(255)
,`personal_account_id` int(11)
,`balans` decimal(19,4)
,`status` varchar(32)
);

-- --------------------------------------------------------

--
-- Структура таблицы `connected_house`
--

CREATE TABLE `connected_house` (
  `connected_house_id` int(11) NOT NULL,
  `region` varchar(128) DEFAULT NULL,
  `street` varchar(128) DEFAULT NULL,
  `house_number` varchar(16) DEFAULT NULL,
  `building` varchar(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `connected_house`
--

INSERT INTO `connected_house` (`connected_house_id`, `region`, `street`, `house_number`, `building`) VALUES
(1, 'Москва', 'Шарикоподшипническая', '13', '4'),
(2, 'Москва', 'Гомилева', '7', NULL),
(3, 'Ярославль', 'Шафронская', '21', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `document`
--

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `category` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `document`
--

INSERT INTO `document` (`document_id`, `title`, `link`, `category`) VALUES
(1, 'Лицензия', 'assets\\documents\\license.txt', '1'),
(2, 'Публичная оферта на оказание услуг связи на условиях акции', 'assets\\documents\\puplic_oferta_accii.txt', NULL),
(3, 'Заявление о заключении договора об оказании услуг связи', 'assets\\documents\\obrazec_zayavki_na_dogovor.txt', '2'),
(4, 'Оферта об изменении способа и/или адреса доставки счета', 'assets\\documents\\oferta.txt', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `document_category`
--

CREATE TABLE `document_category` (
  `document_category_id` int(11) NOT NULL,
  `document_category_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `document_category`
--

INSERT INTO `document_category` (`document_category_id`, `document_category_name`) VALUES
(1, 'Лицензии'),
(2, 'Образцы заявлений');

-- --------------------------------------------------------

--
-- Структура таблицы `equipment`
--

CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL,
  `mac` varchar(18) DEFAULT NULL,
  `serial_number` varchar(32) DEFAULT NULL,
  `equipment_model_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `mac`, `serial_number`, `equipment_model_id`) VALUES
(1, '00-50-B6-5B-CA-6B', 'J6XXXXXXXX62', 3),
(2, '00-50-B6-2A-5C-7AB', 'B5XXXXXXXX81', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `equipment_characteristics`
--

CREATE TABLE `equipment_characteristics` (
  `equipment_characteristics_id` int(11) NOT NULL,
  `characteristic` varchar(64) DEFAULT NULL,
  `value` varchar(32) DEFAULT NULL,
  `equipment_model_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `equipment_characteristics`
--

INSERT INTO `equipment_characteristics` (`equipment_characteristics_id`, `characteristic`, `value`, `equipment_model_id`) VALUES
(1, 'Скорость', '300 Мбит/с', 4),
(2, 'Частота', '2.4 ГГц', 4),
(3, 'Lan порты', '2', 4),
(4, 'Частота', '2.4 ГГц, 5 ГГц', 3),
(5, 'Скорость', '400 Мбит/сек', 3),
(6, 'Lan порты', '4', 3),
(7, 'Процессор', 'INTEL XEON E3-1240', 1),
(8, 'Ядра процессора', '4', 1),
(9, 'Оперативная память', '8 ГБ', 1),
(10, 'Диск', '2 HDD * 1 ТБ', 1),
(11, 'NVMe', '40 ГБ', 2),
(13, 'Скорость', '100 Мбит/с', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `equipment_model`
--

CREATE TABLE `equipment_model` (
  `equipment_model_id` int(11) NOT NULL,
  `equipment_category` varchar(64) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `cost` decimal(19,4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `equipment_model`
--

INSERT INTO `equipment_model` (`equipment_model_id`, `equipment_category`, `description`, `cost`) VALUES
(1, 'физический сервер', 'E3-1240/8/2*1', '3900.0000'),
(2, 'виртуальный сервер', 'сервер с безлимитным трафиком, 1 БД, 20 сайтов', '300.0000'),
(3, 'маршрутизатор', 'TP-LINK Archer AX73', '3200.0000'),
(4, 'роутер', 'Mercusys MW301R', '750.0000'),
(5, 'роутер', 'Tenda 100', '700.0000');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_account`
--

CREATE TABLE `personal_account` (
  `personal_account_id` int(11) NOT NULL,
  `balans` decimal(19,4) DEFAULT NULL,
  `status` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `personal_account`
--

INSERT INTO `personal_account` (`personal_account_id`, `balans`, `status`) VALUES
(1, '35.0000', 'активен'),
(2, '-800.0000', 'заблокирован'),
(3, '125.0000', 'активен');

-- --------------------------------------------------------

--
-- Структура таблицы `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `discount_percent` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `document_id` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `img_link` varchar(255) DEFAULT NULL,
  `title` varchar(64) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `discount_percent`, `description`, `document_id`, `start_date`, `expiration_date`, `img_link`, `title`) VALUES
(1, 10, 'Новым абонентам дарим скидку  на подключаемый тариф', 2, '2021-05-04 00:00:00', '2021-06-30 00:00:00', 'assets\\icons\\promotion-1.svg', 'Скажи “привет”'),
(2, 20, 'Экономьте, оплачивая тариф сразу на год', 2, '2021-05-19 00:00:00', '2021-08-12 00:00:00', 'assets\\icons\\promotion-2.svg', 'Заряжай на полную'),
(3, 15, 'Подключайте друзей и получайте скидку каждому на следующую оплату тарифа', NULL, '2021-05-29 00:00:00', '2021-07-30 00:00:00', 'assets\\icons\\promotion-3.svg', 'Время делиться'),
(13, 20, '200', NULL, '2021-07-02 00:00:00', '2021-06-06 00:00:00', 'assets/img/vtw061zo0Fk4vmHoSYsTBDWfbhMMHt7H.jpeg', 'avatar'),
(4, 15, 'При подключении пакетов интернета скидка на домашний интернет', 2, '2021-04-13 00:00:00', '2021-06-01 00:00:00', 'assets\\icons\\promotion-3.svg', 'Действуй!'),
(18, 20, '100', NULL, '2021-06-30 00:00:00', '2021-06-11 00:00:00', 'assets/img/Tbo9RfKCdewUXiyZ06dlIEupRdzyyLPQ.jpeg', 'avatar'),
(19, 20, '100', NULL, '2021-06-30 00:00:00', '2021-06-11 00:00:00', 'assets/img/tRxe6sDweGkqPLVcMbIVA12Bgrur1BUp.jpeg', 'avatar');

-- --------------------------------------------------------

--
-- Структура таблицы `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question_text` varchar(255) DEFAULT NULL,
  `answer_text` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_contact` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `question`
--

INSERT INTO `question` (`question_id`, `question_text`, `answer_text`, `user_id`, `user_contact`) VALUES
(1, 'Как отключить услугу?', 'Чтобы отключить услугу навсегда, нужно расторгнуть договор. Сделать это можно в одном из офисов. Обратите внимание, что вы можете временно приостановить пользование услугой без взятия платежей.', 5, ''),
(2, 'Как заблокировать услугу на время?', 'Заблокировать услугу можно в личном кабинете после регистрации на сайте. Ее действие можно приостановить на месяц, но не более 4 раз в году.', 4, ''),
(3, 'Как изменить тариф?', 'Тариф можно изменить в личном кабинете или позвонив оператору по номеру 8-495-823-64-22. Звонок по России бесплатный', 6, ''),
(4, 'Как узнать пароль от моего Wi-fi?', 'Если вы не меняли пароль, он указан в Вашем договоре. Также его можно узнать у оператора тех. поддержки. Позвоните по номеру 8-495-873-92-92. \r\nЕсли вы поменяли пароль и не можете его вспомнить, Вы можете сбросить пароль. Для этого также свяжитесь с тех.', 5, ''),
(5, 'Как переоформить договор?', 'Для переоформления договора необходимо подъехать в офис в рабочее время. Офисы продаж, адреса, телефоны и время работы указаны в разделе контакты.', 4, ''),
(6, 'Как сменить оборудование?', 'Смену оборудования можно заказать на сайте в разделе услуг или по телефону 8-495-823-64-22', 6, ''),
(7, 'Как перенести услуги на другой адрес?', 'Чтобы перенести услуги на другой адрес, необходимо подъехать в один из офисов в рабочее время. Адреса и телефоны офисов продаж указаны на сайте в разделе контактов.', 4, '');

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `status` varchar(64) DEFAULT NULL,
  `region` varchar(128) DEFAULT NULL,
  `street` varchar(128) DEFAULT NULL,
  `house` varchar(16) DEFAULT NULL,
  `building` varchar(16) DEFAULT NULL,
  `flat` varchar(16) DEFAULT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `sender_phone_number` varchar(16) DEFAULT NULL,
  `tariff_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`request_id`, `date`, `status`, `region`, `street`, `house`, `building`, `flat`, `sender_name`, `sender_phone_number`, `tariff_id`) VALUES
(1, '2021-06-01 00:00:00', 'рассмотрено', 'Москва', 'Маршала Совитского', '4', '1', '113', 'Аркадий', '8-903-862-98-90', 1),
(2, '2021-06-15 00:00:00', 'не рассмотрено', 'Москва', 'Адмирала Ушакова', '21', NULL, '5', 'Ольга', '8-962-973-11-54', 1),
(3, '2021-06-27 17:32:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2021-06-27 17:44:28', 'не рассмотрена', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tariff`
--

CREATE TABLE `tariff` (
  `tariff_id` int(11) NOT NULL,
  `tariff_name` varchar(32) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `cost_per_mounth` decimal(19,4) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `promotion_id` int(11) DEFAULT NULL,
  `tariff_type` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tariff`
--

INSERT INTO `tariff` (`tariff_id`, `tariff_name`, `category`, `cost_per_mounth`, `status`, `promotion_id`, `tariff_type`) VALUES
(1, 'Интернет 100', 'Интернет', '320.0000', 'Действующий', NULL, 'Частным лицам'),
(2, 'Домашний онлайн 100', 'Комбо', '460.0000', 'Действующий', NULL, 'Частным лицам'),
(3, 'Интернет + облако', 'Комбо', '460.0000', 'Действующий', NULL, 'Частным лицам'),
(4, 'Домашний онлайн 400', 'Комбо', '560.0000', 'Действующтй', NULL, 'Частным лицам'),
(5, 'Интернет 150', 'Интернет', '320.0000', 'Архивный', NULL, 'Частным лицам');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `tariff_details`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `tariff_details` (
`tariff_id` int(11)
,`tariff_name` varchar(32)
,`category` varchar(20)
,`cost_per_mounth` decimal(19,4)
,`status` varchar(20)
,`promotion_id` int(11)
,`tariff_type` varchar(32)
,`service_category` varchar(64)
,`service_description` varchar(255)
,`limit_GB` int(11)
,`equipment_model_id` int(11)
,`equipment_category` varchar(64)
,`description` varchar(255)
,`characteristic` varchar(64)
,`value` varchar(32)
);

-- --------------------------------------------------------

--
-- Структура таблицы `tariff_service`
--

CREATE TABLE `tariff_service` (
  `tariff_service_id` int(11) NOT NULL,
  `service_category` varchar(64) DEFAULT NULL,
  `service_description` varchar(255) DEFAULT NULL,
  `limit_GB` int(11) DEFAULT NULL,
  `equipment_model_id` int(11) DEFAULT NULL,
  `tariff_id` int(11) DEFAULT NULL,
  `overlimit_traffic_cost` decimal(19,4) DEFAULT 0.0000
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tariff_service`
--

INSERT INTO `tariff_service` (`tariff_service_id`, `service_category`, `service_description`, `limit_GB`, `equipment_model_id`, `tariff_id`, `overlimit_traffic_cost`) VALUES
(1, 'Интернет', 'Интернет до 100 Мбит/сек', 2, 5, 2, '1.0000'),
(2, 'Интернет', 'Интернет до 100 Мбит/ сек', 0, 5, 1, '0.0000'),
(3, 'Wi-Fi', 'Wi-Fi роутер до 300 Мбит / сек', 0, 3, 4, '0.0000'),
(4, 'Облако', '4 гб Яндекс диск', 4, NULL, 3, '1.0000'),
(5, 'Интернет', 'Интернет до 400 Мбит / сек', NULL, 4, 4, '3.0000'),
(6, 'Интернет', 'Интернет до 100 Мбит/сек', 0, 5, 3, '0.0000');

-- --------------------------------------------------------

--
-- Структура таблицы `tokens`
--

CREATE TABLE `tokens` (
  `id_token` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `session_id` varchar(64) NOT NULL,
  `token_start` datetime NOT NULL DEFAULT current_timestamp(),
  `token_expiration` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tokens`
--

INSERT INTO `tokens` (`id_token`, `id_user`, `token`, `session_id`, `token_start`, `token_expiration`) VALUES
(56, 8, 'wnTrD6dRw5fS50Yv6jAg5r9PjmphLaiu', 'de8cid6n9k8cpdhk4n88a7rass', '2021-06-28 03:58:13', '2021-06-28 01:22:13'),
(57, 16, 'gDl61Ud5T8tnkM2CGeVhGYiS3T5QntFl', 'de8cid6n9k8cpdhk4n88a7rass', '2021-06-28 03:58:13', '2021-06-28 01:22:13'),
(58, 16, 'GiG103wSGdqr5OFsHNJEFzCb8fplVLfb', 'de8cid6n9k8cpdhk4n88a7rass', '2021-06-28 03:58:13', '2021-06-28 01:22:13'),
(59, 17, 'wVikzwafIUzpsd0nIdWg7IueYtxInoPU', 'de8cid6n9k8cpdhk4n88a7rass', '2021-06-28 04:11:17', '2021-06-28 01:35:17'),
(64, 8, '0Eo5f9AGkTNak7YyG4yn58iMe1P62Ug4', 'r68cof42aesabo3n4pn94crb6i', '2021-06-28 16:29:31', '2021-06-28 13:53:31');

-- --------------------------------------------------------

--
-- Структура таблицы `traffic`
--

CREATE TABLE `traffic` (
  `traffic_id` int(11) NOT NULL,
  `date_time` datetime DEFAULT NULL,
  `from_port` varchar(16) DEFAULT NULL,
  `to_port` varchar(16) DEFAULT NULL,
  `from_ip` varchar(32) DEFAULT NULL,
  `to_ip` varchar(32) DEFAULT NULL,
  `volume_GB` int(11) DEFAULT NULL,
  `tariff_service_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `traffic`
--

INSERT INTO `traffic` (`traffic_id`, `date_time`, `from_port`, `to_port`, `from_ip`, `to_ip`, `volume_GB`, `tariff_service_id`) VALUES
(1, '2021-06-01 00:00:00', '1', '3', '192.125.44.3', '	142.250.185.78', 4, 1),
(2, '2021-06-03 00:00:00', '1', '2', '192.25.83.32', '	142.250.185.78', 1, 1),
(3, '2021-06-02 12:40:24', '2', '1', '192.125.44.3', '144.33.24.11', 2, 1),
(4, '2021-06-09 12:40:24', '1', '1', '192.125.44.3', '144.22.112.42', 3, 1),
(5, '2021-06-09 14:15:07', '1', '1', '192.125.44.3', '144.33.24.11', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL,
  `personal_account_id` int(11) DEFAULT NULL,
  `transaction_type_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `amount`, `date_time`, `personal_account_id`, `transaction_type_id`) VALUES
(1, 320, '2021-06-02 00:00:00', 1, 1),
(2, 460, '2021-06-01 00:00:00', 3, 2),
(5, 12, '2021-06-15 17:02:15', 1, 2);

--
-- Триггеры `transaction`
--
DELIMITER $$
CREATE TRIGGER `decreasebalans` AFTER INSERT ON `transaction` FOR EACH ROW UPDATE personal_account, transaction SET balans = (balans - NEW.amount) WHERE NEW.personal_account_id = personal_account.personal_account_id AND NEW.transaction_type_id = 1
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `increasebalans` AFTER INSERT ON `transaction` FOR EACH ROW UPDATE personal_account, transaction SET balans = (balans + NEW.amount) WHERE NEW.personal_account_id = personal_account.personal_account_id AND NEW.transaction_type_id = 2
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `transaction_type`
--

CREATE TABLE `transaction_type` (
  `transaction_type_id` int(11) NOT NULL,
  `type` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `transaction_type`
--

INSERT INTO `transaction_type` (`transaction_type_id`, `type`) VALUES
(1, 'Списание'),
(2, 'Пополнение');

-- --------------------------------------------------------

--
-- Структура таблицы `treaty`
--

CREATE TABLE `treaty` (
  `treaty_id` int(11) NOT NULL,
  `ip` varchar(18) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `expiration_date` datetime DEFAULT NULL,
  `equipment_id` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `tariff_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `personal_account_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `treaty`
--

INSERT INTO `treaty` (`treaty_id`, `ip`, `date`, `expiration_date`, `equipment_id`, `link`, `tariff_id`, `client_id`, `personal_account_id`) VALUES
(1, '192.25.83.32', '2021-05-05 00:00:00', '2021-10-15 00:00:00', NULL, 'assets\\treaty\\1.txt', 2, 2, 1),
(2, '192.125.44.31', '2021-05-18 00:00:00', '2022-01-29 00:00:00', NULL, 'assets\\treaty\\2.txt', 3, 3, 3),
(3, '192.134.94.11', '2021-03-23 00:00:00', '2022-02-26 00:00:00', NULL, 'assets\\treaty\\3.txt', 4, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `login` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `nickname` varchar(64) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_group_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `nickname`, `client_id`, `user_group_id`) VALUES
(7, 'jewrk1b34@gmail.com', '62608e08adc29a8d6dbc9754e659f125', 'qwerty', 2, 3),
(8, 'dlfkbu@mail.ru', '21232f297a57a5a743894a0e4a801fc3', 'lilPOP', 1, 1),
(9, 'fjdgl@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'som', 0, 2),
(10, '8-976-863-97-73', 'ee11cbb19052e40b07aac0ca060c23ee', 'ula.sovir', 0, 3),
(11, 'some@mail.ru', 'f188ddcf9278b29ae3ce0aa09fd727d5', 'roastfish', NULL, 3),
(15, 'ewt@mail.com', '202cb962ac59075b964b07152d234b70', 'treter', NULL, NULL);

--
-- Триггеры `user`
--
DELIMITER $$
CREATE TRIGGER `hash_pass_oninsert` BEFORE INSERT ON `user` FOR EACH ROW SET NEW.password = MD5(NEW.password)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `hash_pass_onupdate` BEFORE UPDATE ON `user` FOR EACH ROW SET NEW.password = MD5(NEW.password)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Структура таблицы `user_group`
--

CREATE TABLE `user_group` (
  `user_group_id` int(11) NOT NULL,
  `group_name` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_group`
--

INSERT INTO `user_group` (`user_group_id`, `group_name`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'client');

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `user_info`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `user_info` (
`user_id` int(11)
,`login` varchar(128)
,`password` varchar(128)
,`nickname` varchar(64)
,`client_id` int(11)
,`user_group_id` int(11)
,`phone_number` varchar(16)
);

-- --------------------------------------------------------

--
-- Дублирующая структура для представления `user_token`
-- (См. Ниже фактическое представление)
--
CREATE TABLE `user_token` (
`id_token` int(11)
,`id_user` int(11)
,`token` varchar(64)
,`session_id` varchar(64)
,`token_start` datetime
,`token_expiration` timestamp
,`user_group_id` int(11)
);

-- --------------------------------------------------------

--
-- Структура для представления `client_tariffs`
--
DROP TABLE IF EXISTS `client_tariffs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_tariffs`  AS  select `user`.`user_id` AS `user_id`,`client`.`client_id` AS `client_id`,`client`.`last_name` AS `last_name`,`client`.`first_name` AS `first_name`,`client`.`middle_name` AS `middle_name`,`client`.`phone_number` AS `phone_number`,`tariff`.`tariff_id` AS `tariff_id`,`tariff`.`tariff_name` AS `tariff_name`,`tariff`.`category` AS `category`,`tariff`.`cost_per_mounth` AS `cost_per_mounth`,`tariff`.`status` AS `status`,`tariff`.`promotion_id` AS `promotion_id`,`tariff`.`tariff_type` AS `tariff_type`,`treaty`.`treaty_id` AS `treaty_id`,`treaty`.`date` AS `date`,`treaty`.`expiration_date` AS `expiration_date` from (((`client` left join `user` on(`user`.`client_id` = `client`.`client_id`)) left join `treaty` on(`treaty`.`client_id` = `client`.`client_id`)) left join `tariff` on(`treaty`.`tariff_id` = `tariff`.`tariff_id`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `client_traffic_per_month`
--
DROP TABLE IF EXISTS `client_traffic_per_month`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_traffic_per_month`  AS  select sum(`traffic`.`volume_GB`) AS `traffic_volume_sum`,`traffic`.`from_ip` AS `from_ip`,`tariff`.`tariff_name` AS `tariff`,`tariff_service`.`service_description` AS `service_description`,`tariff_service`.`limit_GB` AS `limit_GB`,`tariff_service`.`overlimit_traffic_cost` AS `overlimit_traffic_cost`,(select sum(`traffic`.`volume_GB`) - `tariff_service`.`limit_GB` from DUAL  where `tariff_service`.`limit_GB` > 0 and sum(`traffic`.`volume_GB`) > `tariff_service`.`limit_GB`) AS `paid_traffic`,(select (sum(`traffic`.`volume_GB`) - `tariff_service`.`limit_GB`) * `tariff_service`.`overlimit_traffic_cost` from DUAL  where `tariff_service`.`limit_GB` > 0 and sum(`traffic`.`volume_GB`) > `tariff_service`.`limit_GB`) AS `amount_to_pay`,month(`traffic`.`date_time`) AS `month`,year(`traffic`.`date_time`) AS `year`,`client`.`client_id` AS `client_id`,`user`.`user_id` AS `user_id`,`treaty`.`personal_account_id` AS `personal_account_id` from (((((`traffic` left join `tariff_service` on(`traffic`.`tariff_service_id` = `tariff_service`.`tariff_service_id`)) left join `treaty` on(`traffic`.`from_ip` = `treaty`.`ip`)) left join `tariff` on(`tariff`.`tariff_id` = `treaty`.`tariff_id`)) left join `client` on(`treaty`.`client_id` = `client`.`client_id`)) left join `user` on(`user`.`client_id` = `client`.`client_id`)) group by month(`traffic`.`date_time`),year(`traffic`.`date_time`),`traffic`.`from_ip`,`tariff_service`.`service_description` ;

-- --------------------------------------------------------

--
-- Структура для представления `client_treaty`
--
DROP TABLE IF EXISTS `client_treaty`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_treaty`  AS  select `user`.`user_id` AS `user_id`,`user`.`login` AS `login`,`user`.`nickname` AS `nickname`,`user`.`password` AS `password`,`client`.`client_id` AS `client_id`,`client`.`last_name` AS `last_name`,`client`.`first_name` AS `first_name`,`client`.`middle_name` AS `middle_name`,`client`.`phone_number` AS `phone_number`,`treaty`.`treaty_id` AS `treaty_id`,`treaty`.`ip` AS `ip`,`treaty`.`date` AS `date`,`treaty`.`expiration_date` AS `expiration_date`,`treaty`.`link` AS `link`,`personal_account`.`personal_account_id` AS `personal_account_id`,`personal_account`.`balans` AS `balans`,`personal_account`.`status` AS `status` from (((`client` left join `user` on(`user`.`client_id` = `client`.`client_id`)) left join `treaty` on(`client`.`client_id` = `treaty`.`client_id`)) left join `personal_account` on(`treaty`.`personal_account_id` = `personal_account`.`personal_account_id`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `tariff_details`
--
DROP TABLE IF EXISTS `tariff_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tariff_details`  AS  select `tariff`.`tariff_id` AS `tariff_id`,`tariff`.`tariff_name` AS `tariff_name`,`tariff`.`category` AS `category`,`tariff`.`cost_per_mounth` AS `cost_per_mounth`,`tariff`.`status` AS `status`,`tariff`.`promotion_id` AS `promotion_id`,`tariff`.`tariff_type` AS `tariff_type`,`tariff_service`.`service_category` AS `service_category`,`tariff_service`.`service_description` AS `service_description`,`tariff_service`.`limit_GB` AS `limit_GB`,`tariff_service`.`equipment_model_id` AS `equipment_model_id`,`equipment_model`.`equipment_category` AS `equipment_category`,`equipment_model`.`description` AS `description`,`equipment_characteristics`.`characteristic` AS `characteristic`,`equipment_characteristics`.`value` AS `value` from (((`tariff_service` left join `tariff` on(`tariff_service`.`tariff_id` = `tariff`.`tariff_id`)) left join `equipment_model` on(`tariff_service`.`equipment_model_id` = `equipment_model`.`equipment_model_id`)) left join `equipment_characteristics` on(`equipment_characteristics`.`equipment_model_id` = `equipment_model`.`equipment_model_id`)) group by `tariff_service`.`service_description`,`tariff`.`tariff_id`,`equipment_characteristics`.`characteristic` order by `tariff`.`tariff_id` ;

-- --------------------------------------------------------

--
-- Структура для представления `user_info`
--
DROP TABLE IF EXISTS `user_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_info`  AS  select `user`.`user_id` AS `user_id`,`user`.`login` AS `login`,`user`.`password` AS `password`,`user`.`nickname` AS `nickname`,`user`.`client_id` AS `client_id`,`user`.`user_group_id` AS `user_group_id`,`client`.`phone_number` AS `phone_number` from (`user` left join `client` on(`user`.`client_id` = `client`.`client_id`)) ;

-- --------------------------------------------------------

--
-- Структура для представления `user_token`
--
DROP TABLE IF EXISTS `user_token`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_token`  AS  select `tokens`.`id_token` AS `id_token`,`tokens`.`id_user` AS `id_user`,`tokens`.`token` AS `token`,`tokens`.`session_id` AS `session_id`,`tokens`.`token_start` AS `token_start`,`tokens`.`token_expiration` AS `token_expiration`,`user`.`user_group_id` AS `user_group_id` from (`tokens` left join `user` on(`tokens`.`id_user` = `user`.`user_id`)) ;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Индексы таблицы `connected_house`
--
ALTER TABLE `connected_house`
  ADD PRIMARY KEY (`connected_house_id`);

--
-- Индексы таблицы `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Индексы таблицы `document_category`
--
ALTER TABLE `document_category`
  ADD PRIMARY KEY (`document_category_id`);

--
-- Индексы таблицы `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Индексы таблицы `equipment_characteristics`
--
ALTER TABLE `equipment_characteristics`
  ADD PRIMARY KEY (`equipment_characteristics_id`);

--
-- Индексы таблицы `equipment_model`
--
ALTER TABLE `equipment_model`
  ADD PRIMARY KEY (`equipment_model_id`);

--
-- Индексы таблицы `personal_account`
--
ALTER TABLE `personal_account`
  ADD PRIMARY KEY (`personal_account_id`);

--
-- Индексы таблицы `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Индексы таблицы `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Индексы таблицы `tariff`
--
ALTER TABLE `tariff`
  ADD PRIMARY KEY (`tariff_id`);

--
-- Индексы таблицы `tariff_service`
--
ALTER TABLE `tariff_service`
  ADD PRIMARY KEY (`tariff_service_id`);

--
-- Индексы таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id_token`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `traffic`
--
ALTER TABLE `traffic`
  ADD PRIMARY KEY (`traffic_id`);

--
-- Индексы таблицы `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Индексы таблицы `transaction_type`
--
ALTER TABLE `transaction_type`
  ADD PRIMARY KEY (`transaction_type_id`);

--
-- Индексы таблицы `treaty`
--
ALTER TABLE `treaty`
  ADD PRIMARY KEY (`treaty_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `connected_house`
--
ALTER TABLE `connected_house`
  MODIFY `connected_house_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `document_category`
--
ALTER TABLE `document_category`
  MODIFY `document_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `equipment_characteristics`
--
ALTER TABLE `equipment_characteristics`
  MODIFY `equipment_characteristics_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `equipment_model`
--
ALTER TABLE `equipment_model`
  MODIFY `equipment_model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_account`
--
ALTER TABLE `personal_account`
  MODIFY `personal_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `tariff`
--
ALTER TABLE `tariff`
  MODIFY `tariff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `tariff_service`
--
ALTER TABLE `tariff_service`
  MODIFY `tariff_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `traffic`
--
ALTER TABLE `traffic`
  MODIFY `traffic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `transaction_type`
--
ALTER TABLE `transaction_type`
  MODIFY `transaction_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `treaty`
--
ALTER TABLE `treaty`
  MODIFY `treaty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `user_group`
--
ALTER TABLE `user_group`
  MODIFY `user_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
