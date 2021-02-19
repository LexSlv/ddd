-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2021 г., 19:33
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
-- Структура таблицы `archive`
--

CREATE TABLE `archive` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `sub_title` varchar(500) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_of_publication` date NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `archive`
--

INSERT INTO `archive` (`id`, `title`, `sub_title`, `author`, `date_of_publication`, `pdf`) VALUES
(2, 'dasdad', '32131', 'dsahjfgjghj', '2021-01-17', '/uploads/pdf/1613748623.pdf');

-- --------------------------------------------------------

--
-- Структура таблицы `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `docs`
--

INSERT INTO `docs` (`id`, `name`, `doc`) VALUES
(2, 'test', '/uploads/pdf/1613751884.pdf');

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

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `title_ru`, `subtitle_ru`, `title_en`, `subtitle_en`, `event_date`, `author`, `forthcoming`, `most_recent`, `show_in_slider`) VALUES
(5, 'Project proposal writing, Part 2', 'Webinar', 'Project proposal writing, Part 2', 'Webinar', '2021-01-02', 'Sebastian Mayer', 1, 0, 1),
(6, 'Basics of Academic Writing, Webinar', 'Webinar', 'Project proposal writing, Part 2', 'Webinar', '2021-03-05', 'Edward Lemon', 0, 1, 1),
(7, 'Writing Policy Papers,, Webinar (in cooperation with the Friedrich Ebert Foundation Kazakhstan)', 'Webinar', 'Project proposal writing, Part 2', 'Webinar', '2021-05-01', 'Vasiliy Pupkin', 0, 1, 1),
(8, 'Project proposal writing, Part 1 (russ «Написание проектной заявки»)', 'Webinar', 'Writing Policy Papers,, Webinar (in cooperation with the Friedrich Ebert Foundation Kazakhstan)', 'Webinar', '2021-01-03', 'Guljamal Issaeva', 0, 1, 1);

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
  `photo_url` varchar(255) NOT NULL,
  `senior` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fellows`
--

INSERT INTO `fellows` (`id`, `name`, `whois`, `research_interests`, `fellowship_period`, `email`, `photo_url`, `senior`) VALUES
(1, 'dsada', 'gfdfgd', 'jhgjg', 'dfsfd', 'gfdgd', '/uploads/images/jun1.png', 1),
(2, 'hgfdhdf', 'fdsdf', 'ghhfghf', 'fsdfdsf', 'rewrew', '/uploads/images/jun2.png', 0),
(3, 'hfgdhdgfh', 'tyrrytr', 'fdsfds', 'hgfdh', 'fgsfg', '/uploads/images/senior1.png', 1),
(4, 'fwedsfsd', 'asdfasd', 'gdfsgdfsg', 'dfsfsdf', 'gfdgfdgd', '/uploads/images/senior2.png', 0);

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
(2, 'Academic Improvement', 'Academic Improvement', '/academic-improvement', '/academic-improvement', 2),
(3, 'Social Science Colloquium', 'Social Science Colloquium', '/social-science-colloquium', '/social-science-colloquium', 3),
(4, 'DKU Fellows', 'DKU Fellows', '/fellows', '/fellows', 4),
(5, 'Occasional Papers', 'Occasional Papers', '/occasional-papers', '/occasional-papers', 5),
(6, 'Contacts', 'Contacts', '/ru/contacts', '/contacts', 6);

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
(2, 'academic-improvement', 'Academic Improvement', 'Academic Improvement'),
(3, 'social-science-colloquium', 'Social Science Colloquium', 'Social Science Colloquium'),
(4, 'fellows', 'DKU Fellows', 'DKU Fellows'),
(5, 'occasional-papers', 'Occasional Papers', 'Occasional Papers'),
(6, 'contacts', 'Contacts', 'Contacts');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `text_ru` text NOT NULL,
  `text_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `text_ru`, `text_en`) VALUES
(1, 'main', '<p>Running since fall 2020, the <strong>DKU&rsquo;s Centre for Research &amp; Graduate Education (CRGE)</strong> encompasses a range of activities. It develops and organizes events which help faculty, students and young scholars within and outside the DKU build and improve their academic writing and research skills - both online and face-to-face. Among other things, we offer methods courses. In tandem with the DAAD-Information Centre Kazakhstan, the CRGE also holds training workshops about &ldquo;Doing a PhD in Germany&rdquo;, usually every one to two years alternately in Almaty and Nursultan. It helps foster research particularly in the social sciences and contributes to the development and maintenance of research cooperation with other academic institutions in Central Asia and beyond. The CRGE also runs the Social Science Colloquium. In addition, it organizes the DKU Fellows Program, providing the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. The Centre moreover publishes the DKU Occasional Papers series. Check out the above links for further information and be sure to sign up for our updates below if you are interested in what we do!</p>', '<p>Running since fall 2020, the <strong>DKU&rsquo;s Centre for Research &amp; Graduate Education (CRGE)</strong> encompasses a range of activities. It develops and organizes events which help faculty, students and young scholars within and outside the DKU build and improve their academic writing and research skills - both online and face-to-face. Among other things, we offer methods courses. In tandem with the DAAD-Information Centre Kazakhstan, the CRGE also holds training workshops about &ldquo;Doing a PhD in Germany&rdquo;, usually every one to two years alternately in Almaty and Nursultan. It helps foster research particularly in the social sciences and contributes to the development and maintenance of research cooperation with other academic institutions in Central Asia and beyond. The CRGE also runs the Social Science Colloquium. In addition, it organizes the DKU Fellows Program, providing the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. The Centre moreover publishes the DKU Occasional Papers series. Check out the above links for further information and be sure to sign up for our updates below if you are interested in what we do!</p>'),
(2, 'academic_improvement', '            <p>\r\n                The CRGE develops and organizes events which help faculty, students and young scholars within and outside the DKU to build and improve their academic writing and research skills - both online and face-to-face. Through providing independent expertise, we offer comprehensive programs aimed at supporting various target groups at different stages of their work. Among other things, we exhibit methods courses. Check out the right panel for forthcoming academic improvement events. Please connect with us at <a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a> if you have pressing needs for a course that you wish us to organize under this program.\r\n            </p>\r\n\r\n            <p>\r\n                If you are interested in a forthcoming course, check out if you are eligible in the course description and apply, using the application form that can be downloaded below. In tandem with the DAAD Information Centre Kazakhstan, the CRGE also holds training workshops about “Doing a PhD in Germany”, which is usually offered every one to two years in Almaty and Nur-Sultan alternately.\r\n            </p>', '            <p>\r\n                The CRGE develops and organizes events which help faculty, students and young scholars within and outside the DKU to build and improve their academic writing and research skills - both online and face-to-face. Through providing independent expertise, we offer comprehensive programs aimed at supporting various target groups at different stages of their work. Among other things, we exhibit methods courses. Check out the right panel for forthcoming academic improvement events. Please connect with us at <a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a> if you have pressing needs for a course that you wish us to organize under this program.\r\n            </p>\r\n\r\n            <p>\r\n                If you are interested in a forthcoming course, check out if you are eligible in the course description and apply, using the application form that can be downloaded below. In tandem with the DAAD Information Centre Kazakhstan, the CRGE also holds training workshops about “Doing a PhD in Germany”, which is usually offered every one to two years in Almaty and Nur-Sultan alternately.\r\n            </p>'),
(3, 'social_science_colloquium', '            <p>\r\n                The CRGE Social Science Colloquium was established in fall 2020. Intended to be held approximately 4-6 times per semester, it is coordinated by the Center for Research & Graduate Education. It is a forum where DKU graduate students and faculty members from various social science backgrounds present their research ideas and/or ongoing research. The colloquium wishes to foster high-quality English language research that is relevant, original, innovative and based on methodologically sound research designs. Either predominantly empirical or theoretical, projects are meant to significantly contribute to international debates and research programs – or themselves open up novel perspectives. Each colloquium lasts approximately 90 minutes. The English language will be used exclusively including texts admitted for discussion, the colloquium gatherings and all correspondence. If there is a critical mass of interested participants, there is the possibility of gathering in an off-campus establishment to socialize, further discuss the topic and other projects more informally.\r\n            </p>\r\n\r\n            <p>\r\n                All DKU graduate (i.e. MA, plus fourth year BA) students, faculty members and alumni with a social science background are authorized to participate. Participation is mandatory for all current DKU Fellows with a social science background. If you are interested in a presenter or discussant role for a future colloquium event, please contact us at <a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a>. Occasionally, external speakers are invited to present. Please also inform us if you are interested in joining the Colloquium as a guest - or if you are generally eligible but currently not on the around mail list. If you sign up for our general updates (see main page), we will notify you about Colloquium events as well. Below on this page you can find an archive with Colloquia of past semesters.\r\n            </p>', '            <p>\r\n                The CRGE Social Science Colloquium was established in fall 2020. Intended to be held approximately 4-6 times per semester, it is coordinated by the Center for Research & Graduate Education. It is a forum where DKU graduate students and faculty members from various social science backgrounds present their research ideas and/or ongoing research. The colloquium wishes to foster high-quality English language research that is relevant, original, innovative and based on methodologically sound research designs. Either predominantly empirical or theoretical, projects are meant to significantly contribute to international debates and research programs – or themselves open up novel perspectives. Each colloquium lasts approximately 90 minutes. The English language will be used exclusively including texts admitted for discussion, the colloquium gatherings and all correspondence. If there is a critical mass of interested participants, there is the possibility of gathering in an off-campus establishment to socialize, further discuss the topic and other projects more informally.\r\n            </p>\r\n\r\n            <p>\r\n                All DKU graduate (i.e. MA, plus fourth year BA) students, faculty members and alumni with a social science background are authorized to participate. Participation is mandatory for all current DKU Fellows with a social science background. If you are interested in a presenter or discussant role for a future colloquium event, please contact us at <a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a>. Occasionally, external speakers are invited to present. Please also inform us if you are interested in joining the Colloquium as a guest - or if you are generally eligible but currently not on the around mail list. If you sign up for our general updates (see main page), we will notify you about Colloquium events as well. Below on this page you can find an archive with Colloquia of past semesters.\r\n            </p>'),
(4, 'fellows', '<p>\r\n	Under its DKU Fellows Program, the DKU provides the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. They may conduct own research and/or collaborate with DKU faculty in an area of common interest. To be eligible, you must have a research theme related to DKU expertise.\r\n</p>\r\n<p>\r\n	The DKU Fellows Program is divided into two categories: Junior Fellows at least enrolled in an MA program; and Senior Fellows having obtained a doctorate. The possible duration of researcher stays is between two weeks and six months. During their stay, DKU Fellows will be provided a dedicated working space with internet access and printer. One desktop computer with a large 26” monitor is also available in the Fellows room. Fellows are entitled to use DKU research facilities, including its library and on-line library resources (JSTOR, Web of Science, Science Direct, Scopus…).\r\n</p>\r\n<p>\r\n	DKU Fellowships are generally unpaid. Yet depending on funding availability, we may award Fellows subject-specific allowances. Note: Unless stated below on this page, there are currently no funds available for this purpose! You may generally apply for a DAAD short-term scholarship (“Kurzzeitdozentur”) to get funding for a stay as DKU Fellow, stretching from four weeks up to six months.\r\n</p>\r\n<p>\r\n	We expect Fellows hosted for four weeks or more to prepare an article for one of our research outlets (DKU Occasional Papers or CAJWR) during their stay - and to give one speech in the DKU Talks series, provided that the stay arises during the semester.\r\n</p>\r\n\r\n\r\n<p>\r\n	We encourage interested prospective DKU Fellows to commence the application process early in advance, in no case later than six months prior to the proposed visit. The following materials are to accompany the application:\r\n</p>\r\n<ul>\r\n	<li>cover letter indicating your applicable status (junior or senior), the proposed visit duration and dates and the DKU faculty to which the research is related: Economic Sciences, Engineering Economics or Social and Political Sciences. In case you plan to stay four weeks or more, please, also propose the title of your talk as well as the title of your paper and the DKU outlet for its further publication: DKU Occasional Papers or CAJWR;</li>\r\n	<li>curriculum vitae;</li>\r\n	<li>brief description and implementation plan for the proposed research project, including a statement explaining why DKU presents an appropriate setting for the work (all in English and altogether no more than three pages).</li>\r\n</ul>\r\n<span>Please, send your full application in one PDF file to <a>crge-fellows@dku.kz</a></span>', '<p>\r\n	Under its DKU Fellows Program, the DKU provides the opportunity for researchers from other universities to come to Almaty as visiting researchers to enrich the DKU community. They may conduct own research and/or collaborate with DKU faculty in an area of common interest. To be eligible, you must have a research theme related to DKU expertise.\r\n</p>\r\n<p>\r\n	The DKU Fellows Program is divided into two categories: Junior Fellows at least enrolled in an MA program; and Senior Fellows having obtained a doctorate. The possible duration of researcher stays is between two weeks and six months. During their stay, DKU Fellows will be provided a dedicated working space with internet access and printer. One desktop computer with a large 26” monitor is also available in the Fellows room. Fellows are entitled to use DKU research facilities, including its library and on-line library resources (JSTOR, Web of Science, Science Direct, Scopus…).\r\n</p>\r\n<p>\r\n	DKU Fellowships are generally unpaid. Yet depending on funding availability, we may award Fellows subject-specific allowances. Note: Unless stated below on this page, there are currently no funds available for this purpose! You may generally apply for a DAAD short-term scholarship (“Kurzzeitdozentur”) to get funding for a stay as DKU Fellow, stretching from four weeks up to six months.\r\n</p>\r\n<p>\r\n	We expect Fellows hosted for four weeks or more to prepare an article for one of our research outlets (DKU Occasional Papers or CAJWR) during their stay - and to give one speech in the DKU Talks series, provided that the stay arises during the semester.\r\n</p>\r\n\r\n\r\n<p>\r\n	We encourage interested prospective DKU Fellows to commence the application process early in advance, in no case later than six months prior to the proposed visit. The following materials are to accompany the application:\r\n</p>\r\n<ul>\r\n	<li>cover letter indicating your applicable status (junior or senior), the proposed visit duration and dates and the DKU faculty to which the research is related: Economic Sciences, Engineering Economics or Social and Political Sciences. In case you plan to stay four weeks or more, please, also propose the title of your talk as well as the title of your paper and the DKU outlet for its further publication: DKU Occasional Papers or CAJWR;</li>\r\n	<li>curriculum vitae;</li>\r\n	<li>brief description and implementation plan for the proposed research project, including a statement explaining why DKU presents an appropriate setting for the work (all in English and altogether no more than three pages).</li>\r\n</ul>\r\n<span>Please, send your full application in one PDF file to <a>crge-fellows@dku.kz</a></span>'),
(5, 'occasional_papers', '<p>Published on behalf of the Center for Research &amp; Graduate Education (CRGE), DKU Occasional Papers are one outlet of the Kazakh-German University (DKU) academic community. Launched in winter 2020, the series appears irregularly several times per year. Authors are DKU faculty or select graduate students, guest lecturers from Germany, DKU Visiting Fellows and academic partners with whom the DKU collaborates. This original series covers the wide field of themes offered at the DKU, with geographic attention being paid to Kazakhstan, other Central Asian countries and their relationships with Germany and the European Union. Themes include regional cooperation and security, the roles of external actors in Central Asia, the history and culture of ethnic Germans in Kazakhstan, water, climate change, sustainable development, renewable resources, and logistics and digitization. While principally targeted at scientific communities and practitioners, studies appearing in the series are written to be accessible to the non-academic community as well.</p>\r\n<p>Two types of Occasional Papers are featured. Occasional Papers (Research) are academic pieces that cover a given theme thoroughly with conceptual rigor, either empirically or explicitly theoretically. In contrast, Occasional Papers (Policy) are shorter studies which analyze a specific question and main argument, though with immediate real-world relevance and findings that are instantly applicable to practitioners. These latter papers are meant to launch or contribute to debates, not the least those regarding Kazakh-German relations. Usually peer reviewed blindly by at least one reviewer, the DKU Occasional Papers are exclusively published in the English language. Below you will soon find our first Occasional Paper. We will later set up an&nbsp;<a>archive</a>&nbsp;for previously published and distributed papers.</p>\r\n<p>The CRGE welcomes enquiries and suggestions for contributions to our series at&nbsp;<a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a>.</p>', '<p>Published on behalf of the Center for Research &amp; Graduate Education (CRGE), DKU Occasional Papers are one outlet of the Kazakh-German University (DKU) academic community. Launched in winter 2020, the series appears irregularly several times per year. Authors are DKU faculty or select graduate students, guest lecturers from Germany, DKU Visiting Fellows and academic partners with whom the DKU collaborates. This original series covers the wide field of themes offered at the DKU, with geographic attention being paid to Kazakhstan, other Central Asian countries and their relationships with Germany and the European Union. Themes include regional cooperation and security, the roles of external actors in Central Asia, the history and culture of ethnic Germans in Kazakhstan, water, climate change, sustainable development, renewable resources, and logistics and digitization. While principally targeted at scientific communities and practitioners, studies appearing in the series are written to be accessible to the non-academic community as well.</p>\r\n<p>Two types of Occasional Papers are featured. Occasional Papers (Research) are academic pieces that cover a given theme thoroughly with conceptual rigor, either empirically or explicitly theoretically. In contrast, Occasional Papers (Policy) are shorter studies which analyze a specific question and main argument, though with immediate real-world relevance and findings that are instantly applicable to practitioners. These latter papers are meant to launch or contribute to debates, not the least those regarding Kazakh-German relations. Usually peer reviewed blindly by at least one reviewer, the DKU Occasional Papers are exclusively published in the English language. Below you will soon find our first Occasional Paper. We will later set up an&nbsp;<a>archive</a>&nbsp;for previously published and distributed papers.</p>\r\n<p>The CRGE welcomes enquiries and suggestions for contributions to our series at&nbsp;<a title=\"crge-info@dku.kz\" href=\"mailto:crge-info@dku.kz\">crge-info@dku.kz</a>.</p>'),
(6, 'latest_occasional_paper', '<p><img src=\"../../../img/magazin.png\" align=\"left\" /> <span class=\"occasional-theme\">DKU Occasional Paper (Research)</span> <span class=\"occasional-date\"># 1, August 2020, Almaty</span> <span class=\"occasional-title\">Peace in Central Asia in the Early 21. Century</span> <span class=\"occasional-subtitle\">Conditions for Success in an Era of Change</span> <span class=\"occasional-author\">Peter Smith</span> <span class=\"occasional-text\">Published on behalf of the Center for Research &amp; Graduate Education (CRGE), DKU Occasional Papers are one outlet of the Kazakh-German University (DKU) academic community. Launched in winter 2020, the series appears irregularly several times per year. Authors are DKU faculty or select graduate students, guest lecturers from Germany, DKU Visiting Fellows and academic partners with whom the DKU collaborates. This original series covers the wide field of themes offered at the DKU, with geographic attention being paid to Kazakhstan, other Central Asian countries and their relationships with Germany and the European Union. Themes include regional cooperation and security, the roles of external actors in Central Asia, the history and culture of ethnic Germans in Kazakhstan, water, climate change, sustainable development, renewable resources, and logistics and digitization. While principally targeted at scientific communities and practitioners, studies appearing in the series are written to be accessible to the non-academic community as well.</span> <span class=\"occasional-text\">Two types of Occasional Papers are featured. Occasional Papers (Research) are academic pieces that cover a given theme thoroughly with conceptual rigor, either empirically or explicitly theoretically. In contrast, Occasional Papers (Policy) are shorter studies which analyze a specific question and main argument, though with immediate real-world relevance and findings that are instantly applicable to practitioners. These latter papers are meant to launch or contribute to debates, not the least those regarding Kazakh-German relations. Usually peer reviewed blindly by at least one reviewer, the DKU Occasional Papers are exclusively published in the English language. Below you will soon find our first Occasional Paper. We will later set up an archive for previously published and distributed papers.</span></p>', '<p><img src=\"../../../img/magazin.png\" align=\"left\" /> <span class=\"occasional-theme\">DKU Occasional Paper (Research)</span> <span class=\"occasional-date\"># 1, August 2020, Almaty</span> <span class=\"occasional-title\">Peace in Central Asia in the Early 21. Century</span> <span class=\"occasional-subtitle\">Conditions for Success in an Era of Change</span> <span class=\"occasional-author\">Peter Smith</span> <span class=\"occasional-text\">Published on behalf of the Center for Research &amp; Graduate Education (CRGE), DKU Occasional Papers are one outlet of the Kazakh-German University (DKU) academic community. Launched in winter 2020, the series appears irregularly several times per year. Authors are DKU faculty or select graduate students, guest lecturers from Germany, DKU Visiting Fellows and academic partners with whom the DKU collaborates. This original series covers the wide field of themes offered at the DKU, with geographic attention being paid to Kazakhstan, other Central Asian countries and their relationships with Germany and the European Union. Themes include regional cooperation and security, the roles of external actors in Central Asia, the history and culture of ethnic Germans in Kazakhstan, water, climate change, sustainable development, renewable resources, and logistics and digitization. While principally targeted at scientific communities and practitioners, studies appearing in the series are written to be accessible to the non-academic community as well.</span> <span class=\"occasional-text\">Two types of Occasional Papers are featured. Occasional Papers (Research) are academic pieces that cover a given theme thoroughly with conceptual rigor, either empirically or explicitly theoretically. In contrast, Occasional Papers (Policy) are shorter studies which analyze a specific question and main argument, though with immediate real-world relevance and findings that are instantly applicable to practitioners. These latter papers are meant to launch or contribute to debates, not the least those regarding Kazakh-German relations. Usually peer reviewed blindly by at least one reviewer, the DKU Occasional Papers are exclusively published in the English language. Below you will soon find our first Occasional Paper. We will later set up an archive for previously published and distributed papers.</span></p>');

-- --------------------------------------------------------

--
-- Структура таблицы `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `send_date` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sign_up`
--

INSERT INTO `sign_up` (`id`, `send_date`, `email`) VALUES
(1, '2021-02-19', 'dsada@dsad.kz'),
(2, '2021-02-19', 'tttt@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `slider1`
--

CREATE TABLE `slider1` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider1`
--

INSERT INTO `slider1` (`id`, `image_url`, `position`) VALUES
(1, '/uploads/images/slider/img2.png', 1),
(2, '/uploads/images/slider/img1.jpg', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `slider2`
--

CREATE TABLE `slider2` (
  `id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider2`
--

INSERT INTO `slider2` (`id`, `image_url`, `position`) VALUES
(1, '/uploads/images/slider/img2.png', 1),
(2, '/uploads/images/slider/img1.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `ssc`
--

CREATE TABLE `ssc` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `date_of_publication` date NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ssc`
--

INSERT INTO `ssc` (`id`, `year`, `semester`, `date_of_publication`, `pdf`) VALUES
(3, 2020, 'huesyor', '2020-10-01', '/uploads/pdf/1613748549.pdf');

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
(1, 'top_text', 'Centre for Research &amp; Graduate Education', 'Centre for Research &amp; Graduate Education'),
(3, 'social_block_main', '                <div class=\"social-box\">\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"/img/facebook.svg\" title=\"Facebook\" alt=\"Facebook\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"/img/youtube.svg\" title=\"YouTube\" alt=\"YouTube\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"/img/instagram.svg\" title=\"Instagram\" alt=\"Instagram\" />\r\n                    </a>\r\n                </div>', '                <div class=\"social-box\">\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"/img/facebook.svg\" title=\"Facebook\" alt=\"Facebook\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"/img/youtube.svg\" title=\"YouTube\" alt=\"YouTube\" />\r\n                    </a>\r\n                    <a>\r\n                        <img style=\"max-height: 34px;\" src=\"/img/instagram.svg\" title=\"Instagram\" alt=\"Instagram\" />\r\n                    </a>\r\n                </div>'),
(4, 'SIGN_UP_FOR_OUR_UPDATES_MAIN', 'SIGN UP FOR OUR UPDATES', 'SIGN UP FOR OUR UPDATES'),
(5, 'sign_up_main', 'sign up', 'sign up'),
(6, 'footer_main', '<div class=\"ribbon gray-ribbon\">\r\n<section class=\"flex\">\r\n<div class=\"gray-ribbon-title\">Contact:</div>\r\n<div class=\"gray-ribbon-title\">Find us on the Map:</div>\r\n</section>\r\n</div>\r\n<div class=\"map-block\">\r\n<section class=\"contacts-grid\">\r\n<div class=\"contacts\">A0M0E7, Almaty, KazakhstanNazarbayev av., 173, room 302Tel. +7 727 355 0551 (ex. 241)crge-info@dku.kz</div>\r\n<div class=\"map\">\r\n<div id=\"map\" class=\"map-size\"></div>\r\n</div>\r\n<div class=\"partner\"><img title=\"DAAD\" src=\"img/daad-min.png\" alt=\"DAAD\" /></div>\r\n</section>\r\n</div>', '<div class=\"ribbon gray-ribbon\">\r\n<section class=\"flex\">\r\n<div class=\"gray-ribbon-title\">Contact:</div>\r\n<div class=\"gray-ribbon-title\">Find us on the Map:</div>\r\n</section>\r\n</div>\r\n<div class=\"map-block\">\r\n<section class=\"contacts-grid\">\r\n<div class=\"contacts\">A0M0E7, Almaty, KazakhstanNazarbayev av., 173, room 302Tel. +7 727 355 0551 (ex. 241)crge-info@dku.kz</div>\r\n<div class=\"map\">\r\n<div id=\"map\" class=\"map-size\"></div>\r\n</div>\r\n<div class=\"partner\"><img title=\"DAAD\" src=\"img/daad-min.png\" alt=\"DAAD\" /></div>\r\n</section>\r\n</div>'),
(7, 'footer', '    <div class=\"ribbon gray-ribbon\">\r\n        <section class=\"flex footer-block\">\r\n            <div style=\"text-transform: uppercase;\">© 2020 Centre for Research & Graduate Education </div>\r\n            <a class=\"hide-in-mobile\" style=\"text-decoration: none;\" href=\"https://lamplab.kz\" title=\"Создано в lampLAB\" target=\"_blank\">\r\n                <div class=\"lamplab\">\r\n                    <div class=\"create\">Создано в lampLAB </div>\r\n                    <img src=\"/img/ll.svg\" class=\"icon-style\" alt=\"Создано в lampLAB\" title=\"Создано в lampLAB\">\r\n                </div>\r\n            </a>\r\n        </section>\r\n    </div>', '    <div class=\"ribbon gray-ribbon\">\r\n        <section class=\"flex footer-block\">\r\n            <div style=\"text-transform: uppercase;\">© 2020 Centre for Research & Graduate Education </div>\r\n            <a class=\"hide-in-mobile\" style=\"text-decoration: none;\" href=\"https://lamplab.kz\" title=\"Создано в lampLAB\" target=\"_blank\">\r\n                <div class=\"lamplab\">\r\n                    <div class=\"create\">Создано в lampLAB </div>\r\n                    <img src=\"/img/ll.svg\" class=\"icon-style\" alt=\"Создано в lampLAB\" title=\"Создано в lampLAB\">\r\n                </div>\r\n            </a>\r\n        </section>\r\n    </div>'),
(8, 'forthcoming_and_most_recent_events', 'Forthcoming and most recent Events', 'Forthcoming and most recent Events'),
(9, 'information_block_main', '<h3>Information Block</h3>', '<h3>Information Block</h3>'),
(11, 'academic_improvement_title', 'Academic Improvement', 'Academic Improvement'),
(12, 'forthcoming_events', 'Forthcoming Events', 'Forthcoming Events'),
(13, 'most_recent_events', 'Most recent Events', 'Most recent Events'),
(15, 'social_science_colloquium', 'Social Science Colloquium', 'Social Science Colloquium'),
(17, 'social_science_colloquium_inf_block', '<h3>Information Block</h3>', '<h3>Information Block</h3>'),
(18, 'DKU_fellows', 'DKU Fellows', 'DKU Fellows'),
(21, 'dku_senior_fellows', 'DKU Senior Fellows', 'DKU Senior Fellows'),
(22, 'dku_junior_fellows', 'DKU Junior Fellows', 'DKU Junior Fellows'),
(23, 'Year', 'Year', 'Year'),
(24, 'Semester', 'Semester', 'Semester'),
(25, 'Date_of_publication', 'Date of publication', 'Date of publication'),
(26, 'Action', 'Action', 'Action'),
(27, 'Title', 'Title', 'Title'),
(28, 'Author', 'Author', 'Author'),
(29, 'occasional_papers', 'Occasional Papers', 'Occasional Papers'),
(30, 'latest_occasional_paper', 'Latest Occasional Paper', 'Latest Occasional Paper'),
(31, 'Archive', 'Archive', 'Archive'),
(32, 'Contacts', 'Contacts', 'Contacts'),
(33, 'find_us_on_the_map', 'Find us on the Map', 'Find us on the Map'),
(34, 'address_info', '<span>A0M0E7, Almaty, Kazakhstan</span>\r\n<span>Nazarbayev av., 173, room 302</span>\r\n<span>Tel. +7 727 355 0551 (ex. 241)</span>\r\n<span>crge-info@dku.kz</span>', '<span>A0M0E7, Almaty, Kazakhstan</span>\r\n<span>Nazarbayev av., 173, room 302</span>\r\n<span>Tel. +7 727 355 0551 (ex. 241)</span>\r\n<span>crge-info@dku.kz</span>'),
(35, 'Address', 'Address', 'Address'),
(36, 'head_of_crge', 'Head of CRGE', 'Head of CRGE'),
(37, 'social_networks', 'Social Networks', 'Social Networks'),
(38, 'we_are_in_social_networks', 'We are in Social Networks', 'We are in Social Networks'),
(39, 'head_of_crge_info', '<span>Dr. Sebastian Mayer</span>\r\n<span>DAAD Associate Professor</span>\r\n<span>of International Relations &</span>\r\n<span>Associate Researcher, InIIS</span>\r\n<span>University of Bremen, Germany</span>', '<span>Dr. Sebastian Mayer</span>\r\n<span>DAAD Associate Professor</span>\r\n<span>of International Relations &</span>\r\n<span>Associate Researcher, InIIS</span>\r\n<span>University of Bremen, Germany</span>'),
(40, 'social_networks', 'Social Networks', 'Social Networks'),
(41, 'we_on_the_map', 'We\'re on the Map', 'We\'re on the Map'),
(42, 'thank_you_for_subscribe', 'SPASIBO ZA SUBSKRIBE!!!!!!!!!', 'SPASIBO ZA SUBSKRIBE!!!!!!!!!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slider2`
--
ALTER TABLE `slider2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ssc`
--
ALTER TABLE `ssc`
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
-- AUTO_INCREMENT для таблицы `archive`
--
ALTER TABLE `archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `fellows`
--
ALTER TABLE `fellows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `slider1`
--
ALTER TABLE `slider1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `slider2`
--
ALTER TABLE `slider2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `ssc`
--
ALTER TABLE `ssc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `text_blocks`
--
ALTER TABLE `text_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
