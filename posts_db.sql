-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Сен 09 2022 г., 09:59
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `posts_db`
--
CREATE SCHEMA IF NOT EXISTS `posts_db` DEFAULT CHARACTER SET utf8 ;
USE `posts_db` ;
-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `Id` int UNSIGNED NOT NULL,
  `Title` varchar(45) NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`Id`, `Title`, `Content`) VALUES
(1, 'Тимофей кодит', 'Сегодня Господин Тимофей усердно работает над внешним видом сайта'),
(2, 'Максим и php', 'Сегодня максим долго мучился но в итоге смог написать простенький php скрипт'),
(3, 'Задержались на паре', 'Сегодня долго работали и пришлось остаться на 3ю пару'),
(4, 'hkghikghkkghkgk', 'ghkgkhgkhgkhgkghkghkgkhghk'),
(5, 'kghkgkghk', 'ghkgkhkgkhghk  hjgkghki hkghgkbhjkbkbkbjhk'),
(6, 'lhjiolhjioijho', 'klklkjljlijhohuo bhijkhujouho jolhnjohuohuohu'),
(7, 'kioljhojhio', 'ohjuioiuhn ijpoijponknpohipopij nipojipojipjipji jkj'),
(8, '., m;/l,;\';l,\\\'', 'jklhijolhijl kjljkljklmlmk;l'),
(9, 'kljklkjlk', 'lkjl lkjljkl lknljkl;jklnl l'),
(10, 'asdads', 'asdad'),
(11, 'dsds', 'sdas'),
(12, 'ddd', 'sss'),
(13, 'Test', 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd\r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd\r\ndddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd'),
(14, 'Пример текста', 'Короткие (до 1 000 знаков) приветственные тексты на главную страницу могут позволить себе далеко не все сайты. Например, почти все крупные интернет-магазины, сайты компаний, серьезные сервисы и прочие подобные ресурсы обходятся без громоздких «простыней» текста. Пара слов о компании, небольшое приветствие и все.\r\n\r\nКороткие тексты размещают с одной целью – поприветствовать читателя и немного рассказать о себе. Собственно, именно так в идеале и должна выглядеть основная страница ресурса. Если бы не стремление поисковых систем высоко ранжировать запросы с главной страницы, думаю, 80% сайтов с радостью бы ограничивались скромным приветственным форматом.\r\n\r\nРеалии же таковы, что короткие тексты обычно встречаются на трастовых и уважаемых сайтах, которые прекрасно чувствуют себя в выдаче. Наверное, в число «счастливчиков» можно добавить еще ресурсы, привлекающие трафик с рекламы – им тоже вполне комфортно без больших текстов на главных страницах.\r\n\r\nЕсли же ресурс молодой и не слишком известный, редко кто упускает возможность дополнительно оптимизировать главную. Следовательно, материалы небольшого объема не подходят.'),
(17, 'adsasd', 'fgdfgdg'),
(18, 'asdasd', 'asdad'),
(19, 'asdasd', 'asdad'),
(20, 'asdasd', 'asdad'),
(21, 'asdasd', 'asdad'),
(22, ';k;k;k;k', 'l;l;k;\r\n\r\n'),
(23, 'adsadad', 'asdadadsaasdadsa'),
(24, 'Test2', 'Короткие (до 1 000 знаков) приветственные тексты на главную страницу могут позволить себе далеко не все сайты. Например, почти все крупные интернет-магазины, сайты компаний, серьезные сервисы и прочие подобные ресурсы обходятся без громоздких «простыней» текста. Пара слов о компании, небольшое приветствие и все. Короткие тексты размещают с одной целью – поприветствовать читателя и немного рассказать о себе. Собственно, именно так в идеале и должна выглядеть основная страница ресурса. Если бы не стремление поисковых систем высоко ранжировать запросы с главной страницы, думаю, 80% сайтов с радостью бы ограничивались скромным приветственным форматом. Реалии же таковы, что короткие тексты обычно встречаются на трастовых и уважаемых сайтах, которые прекрасно чувствуют себя в выдаче. Наверное, в число «счастливчиков» можно добавить еще ресурсы, привлекающие трафик с рекламы – им тоже вполне комфортно без больших текстов на главных страницах. Если же ресурс молодой и не слишком известный, редко кто упускает возможность дополнительно оптимизировать главную. Следовательно, материалы небольшого объема не подходят.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `Id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
