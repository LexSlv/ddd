-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 14 2021 г., 20:23
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
  `event_date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `forthcoming` tinyint(1) NOT NULL,
  `most_recent` tinyint(1) NOT NULL,
  `show_in_slider` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'Academic Improvement', 'Academic Improvement', '/', '/', 2),
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
(1, 'index', 'Главная', 'Main');

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
(3, 'social_block_main', '                <span>We are in Social Networks:</span>\r\n                <div class=\"social-box\">\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/facebook.svg\" title=\"Facebook\" alt=\"Facebook\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/youtube.svg\" title=\"YouTube\" alt=\"YouTube\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/instagram.svg\" title=\"Instagram\" alt=\"Instagram\" />\r\n                    </a>\r\n                </div>', '                <span>We are in Social Networks:</span>\r\n                <div class=\"social-box\">\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/facebook.svg\" title=\"Facebook\" alt=\"Facebook\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/youtube.svg\" title=\"YouTube\" alt=\"YouTube\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"img/instagram.svg\" title=\"Instagram\" alt=\"Instagram\" />\r\n                    </a>\r\n                </div>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
