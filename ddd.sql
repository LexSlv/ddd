-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 15 2021 г., 18:30
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ddd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `subtitle_ru` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `subtitle_en` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `forthcoming` tinyint(1) NOT NULL,
  `most_recent` tinyint(1) NOT NULL,
  `show_in_slider` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title_ru`, `subtitle_ru`, `title_en`, `subtitle_en`, `event_date`, `author`, `forthcoming`, `most_recent`, `show_in_slider`) VALUES
(1, 'Project proposal writing, Part 2', 'Webinar', 'Project proposal writing, Part 2', 'Webinar', 'February 26, 2021', 'Vasiliy Pupkin', 1, 0, 1),
(2, 'Basics of Academic Writing, Webinar', 'Talk for MA Students of the Ecosystems, Society and Economics of the Region of Aral (ESERA) Project', 'Basics of Academic Writing, Webinar', 'Talk for MA Students of the Ecosystems, Society and Economics of the Region of Aral (ESERA) Project', '30 July 2020', 'Sebastian Mayer', 0, 1, 0),
(3, 'Writing Policy Papers,, Webinar (in cooperation with the Friedrich Ebert Foundation Kazakhstan)', 'Webinar', 'Writing Policy Papers,, Webinar (in cooperation with the Friedrich Ebert Foundation Kazakhstan)', 'Webinar', '27 November and 05 December 2020', 'Edward Lemon', 0, 1, 1),
(4, 'Project proposal writing, Part 1 (russ «Написание проектной заявки»)', 'Webinar', 'Project proposal writing, Part 1 (russ «Написание проектной заявки»)', 'Webinar', '09 September 2020', 'Guljamal Issaeva', 0, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `fellows`
--

CREATE TABLE `fellows` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `whois` varchar(255) NOT NULL,
  `research_interests` varchar(500) NOT NULL,
  `fellowship_period` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `link_ru` varchar(255) NOT NULL,
  `link_en` varchar(255) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name_ru`, `name_en`, `link_ru`, `link_en`, `position`) VALUES
(1, 'Главная', 'Main', '/', '/', 1),
(2, 'Academic Improvement', 'Academic Improvement', '/ru/academic-improvement', '/en/academic-improvement', 2),
(3, 'Social Science Colloquium', 'Social Science Colloquium', '/', '/', 3),
(4, 'DKU Fellows', 'DKU Fellows', '/', '/', 4),
(5, 'Occasional Papers', 'Occasional Papers', '/', '/', 5),
(6, 'Contacts', 'Contacts', '/', '/', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `action_name` varchar(255) NOT NULL,
  `page_title_ru` varchar(255) NOT NULL,
  `page_title_en` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `meta`
--

INSERT INTO `meta` (`id`, `action_name`, `page_title_ru`, `page_title_en`) VALUES
(1, 'site', 'Главная', 'Main'),
(2, 'academic-improvement', 'Academic Improvement', 'Academic Improvement');

-- --------------------------------------------------------

--
-- Структура таблицы `text_blocks`
--

CREATE TABLE `text_blocks` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `text_block_ru` text NOT NULL,
  `text_block_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `text_blocks`
--

INSERT INTO `text_blocks` (`id`, `key`, `text_block_ru`, `text_block_en`) VALUES
(1, 'top_text', 'Centre for Research & Graduate Education', 'Centre for Research & Graduate Education'),
(2, 'main_text_block', 'Running since fall 2020, the DKU’s Centre for Research &amp; Graduate Education (CRGE) encompasses a range of activities. It develops and organizes events which help faculty, students and young scholars within and outside the DKU build and improve their academic writing and research skills - both online and face-to-face. Among other things, we offer methods courses. In tandem with the DAAD-Information Centre Kazakhstan, the CRGE also holds training workshops about “Doing a PhD in Germany”, usually every one to two years alternately in Almaty and Nursultan. It helps foster research particularly in the social sciences and contributes to the development and maintenance of research cooperation with other academic institutions in Central Asia and beyond. The CRGE also runs the Social Science Colloquium. In addition, it organizes the DKU Fellows Program, providing the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. The Centre moreover publishes the DKU Occasional Papers series. Check out the above links for further information and be sure to sign up for our updates below if you are interested in what we do!', 'Running since fall 2020, the DKU’s Centre for Research &amp; Graduate Education (CRGE) encompasses a range of activities. It develops and organizes events which help faculty, students and young scholars within and outside the DKU build and improve their academic writing and research skills - both online and face-to-face. Among other things, we offer methods courses. In tandem with the DAAD-Information Centre Kazakhstan, the CRGE also holds training workshops about “Doing a PhD in Germany”, usually every one to two years alternately in Almaty and Nursultan. It helps foster research particularly in the social sciences and contributes to the development and maintenance of research cooperation with other academic institutions in Central Asia and beyond. The CRGE also runs the Social Science Colloquium. In addition, it organizes the DKU Fellows Program, providing the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. The Centre moreover publishes the DKU Occasional Papers series. Check out the above links for further information and be sure to sign up for our updates below if you are interested in what we do!'),
(3, 'social_block_main', '                <span>We are in Social Networks:</span>\r\n                <div class=\"social-box\">\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/facebook.svg\" title=\"Facebook\" alt=\"Facebook\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/youtube.svg\" title=\"YouTube\" alt=\"YouTube\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/instagram.svg\" title=\"Instagram\" alt=\"Instagram\" />\r\n                    </a>\r\n                </div>', '                <span>We are in Social Networks:</span>\r\n                <div class=\"social-box\">\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/facebook.svg\" title=\"Facebook\" alt=\"Facebook\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/youtube.svg\" title=\"YouTube\" alt=\"YouTube\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/instagram.svg\" title=\"Instagram\" alt=\"Instagram\" />\r\n                    </a>\r\n                </div>'),
(4, 'SIGN_UP_FOR_OUR_UPDATES_MAIN', 'SIGN UP FOR OUR UPDATES', 'SIGN UP FOR OUR UPDATES'),
(5, 'sign_up_main', 'sign up', 'sign up'),
(6, 'footer_main', '    <div class=\"ribbon gray-ribbon\">\r\n        <section class=\"flex\">\r\n            <div class=\"gray-ribbon-title\">Contact:</div>\r\n            <div class=\"gray-ribbon-title\">Find us on the Map:</div>\r\n        </section>\r\n    </div>\r\n    <div class=\"map-block\">\r\n        <section class=\"contacts-grid\">\r\n            <div class=\"contacts\" @click=\"goToContacts\">\r\n                <span>A0M0E7, Almaty, Kazakhstan</span>\r\n                <span>Nazarbayev av., 173, room 302</span>\r\n                <span>Tel. +7 727 355 0551 (ex. 241)</span>\r\n                <span>crge-info@dku.kz</span>\r\n            </div>\r\n            <div class=\"map\">\r\n                <div id=\"map\" class=\"map-size\"></div>\r\n            </div>\r\n            <div class=\"partner\">\r\n                <img src=\"img/daad-min.png\" title=\"DAAD\" alt=\"DAAD\" />\r\n            </div>\r\n        </section>\r\n    </div>', '    <div class=\"ribbon gray-ribbon\">\r\n        <section class=\"flex\">\r\n            <div class=\"gray-ribbon-title\">Contact:</div>\r\n            <div class=\"gray-ribbon-title\">Find us on the Map:</div>\r\n        </section>\r\n    </div>\r\n    <div class=\"map-block\">\r\n        <section class=\"contacts-grid\">\r\n            <div class=\"contacts\" @click=\"goToContacts\">\r\n                <span>A0M0E7, Almaty, Kazakhstan</span>\r\n                <span>Nazarbayev av., 173, room 302</span>\r\n                <span>Tel. +7 727 355 0551 (ex. 241)</span>\r\n                <span>crge-info@dku.kz</span>\r\n            </div>\r\n            <div class=\"map\">\r\n                <div id=\"map\" class=\"map-size\"></div>\r\n            </div>\r\n            <div class=\"partner\">\r\n                <img src=\"img/daad-min.png\" title=\"DAAD\" alt=\"DAAD\" />\r\n            </div>\r\n        </section>\r\n    </div>'),
(7, 'footer', '    <div class=\"ribbon gray-ribbon\">\r\n        <section class=\"flex footer-block\">\r\n            <div style=\"text-transform: uppercase;\">© 2020 Centre for Research & Graduate Education </div>\r\n            <a class=\"hide-in-mobile\" style=\"text-decoration: none;\" href=\"https://lamplab.kz\" title=\"Создано в lampLAB\" target=\"_blank\">\r\n                <div class=\"lamplab\">\r\n                    <div class=\"create\">Создано в lampLAB </div>\r\n                    <img src=\"/img/ll.svg\" class=\"icon-style\" alt=\"Создано в lampLAB\" title=\"Создано в lampLAB\">\r\n                </div>\r\n            </a>\r\n        </section>\r\n    </div>', '    <div class=\"ribbon gray-ribbon\">\r\n        <section class=\"flex footer-block\">\r\n            <div style=\"text-transform: uppercase;\">© 2020 Centre for Research & Graduate Education </div>\r\n            <a class=\"hide-in-mobile\" style=\"text-decoration: none;\" href=\"https://lamplab.kz\" title=\"Создано в lampLAB\" target=\"_blank\">\r\n                <div class=\"lamplab\">\r\n                    <div class=\"create\">Создано в lampLAB </div>\r\n                    <img src=\"/img/ll.svg\" class=\"icon-style\" alt=\"Создано в lampLAB\" title=\"Создано в lampLAB\">\r\n                </div>\r\n            </a>\r\n        </section>\r\n    </div>'),
(8, 'forthcoming_and_most_recent_events', 'Forthcoming and most recent Events', 'Forthcoming and most recent Events'),
(9, 'information_block_main', '<h3>Information Block</h3>', '<h3>Information Block</h3>'),
(10, 'academic_improvement_block', '            <p>\r\n                The CRGE develops and organizes events which help faculty, students and young scholars within and outside the DKU to build and improve their academic writing and research skills - both online and face-to-face. Through providing independent expertise, we offer comprehensive programs aimed at supporting various target groups at different stages of their work. Among other things, we exhibit methods courses. Check out the right panel for forthcoming academic improvement events. Please connect with us at <a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a> if you have pressing needs for a course that you wish us to organize under this program.\r\n            </p>\r\n\r\n            <p>\r\n                If you are interested in a forthcoming course, check out if you are eligible in the course description and apply, using the application form that can be downloaded below. In tandem with the DAAD Information Centre Kazakhstan, the CRGE also holds training workshops about “Doing a PhD in Germany”, which is usually offered every one to two years in Almaty and Nur-Sultan alternately.\r\n            </p>', '            <p>\r\n                The CRGE develops and organizes events which help faculty, students and young scholars within and outside the DKU to build and improve their academic writing and research skills - both online and face-to-face. Through providing independent expertise, we offer comprehensive programs aimed at supporting various target groups at different stages of their work. Among other things, we exhibit methods courses. Check out the right panel for forthcoming academic improvement events. Please connect with us at <a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a> if you have pressing needs for a course that you wish us to organize under this program.\r\n            </p>\r\n\r\n            <p>\r\n                If you are interested in a forthcoming course, check out if you are eligible in the course description and apply, using the application form that can be downloaded below. In tandem with the DAAD Information Centre Kazakhstan, the CRGE also holds training workshops about “Doing a PhD in Germany”, which is usually offered every one to two years in Almaty and Nur-Sultan alternately.\r\n            </p>'),
(11, 'academic_improvement_title', 'Academic Improvement', 'Academic Improvement'),
(12, 'forthcoming_events', 'Forthcoming Events', 'Forthcoming Events'),
(13, 'most_recent_events', 'Most recent Events', 'Most recent Events'),
(14, 'academic_improvement_pdf', '<span class=\"download-form-text\"><strong>Download</strong> application form</span>', '<span class=\"download-form-text\"><strong>Download</strong> application form</span>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fellows`
--
ALTER TABLE `fellows`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `fellows`
--
ALTER TABLE `fellows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
