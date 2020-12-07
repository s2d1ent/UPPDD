-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 08 2020 г., 01:33
-- Версия сервера: 10.3.22-MariaDB-log
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `registerbd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `story`
--

CREATE TABLE `story` (
  `id` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `ufid` int(11) UNSIGNED NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 NOT NULL,
  `prich` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `story`
--

INSERT INTO `story` (`id`, `date`, `time`, `ufid`, `status`, `prich`) VALUES
(37, '2020-12-07', '12:23:00.000000', 1, 'Неоплачено', 'Превышение скорости на 20км/ч на участке с ограничением в 60км/ч'),
(37, '2020-12-07', '12:23:00.000000', 2, 'Неоплачено', 'Превышение скорости на 20км/ч на участке с ограничением в 60км/ч');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `passport` int(32) UNSIGNED NOT NULL,
  `snils` int(32) UNSIGNED NOT NULL,
  `save` int(32) UNSIGNED NOT NULL,
  `numberts` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `admin` int(1) NOT NULL,
  `pts` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `passport`, `snils`, `save`, `numberts`, `email`, `admin`, `pts`) VALUES
(44, 'ячсми', '0Y/Rh9GB0LzQuA==', 'ячсми', 0, 0, 0, '0', 'zxcvb@mail.ru', 0, '0'),
(36, 'admin', 'c2VjcmV0cGFzcw==', 'admin', 0, 0, 0, '0', 'tumenev33@mail.ru', 3, '0'),
(40, '123123', 'MTIzMTIz', 'Андрей Андрейка', 0, 0, 0, '0', 'andr.andreyka1337@mail.ru', 0, '0'),
(37, 'йцукен', 'MTIz', '123', 0, 0, 123, '', '', 0, ''),
(41, 'admin1', 'c2VjcmV0cGFzcw==', 'admin1', 0, 0, 0, '0', 'admin1@mail.ru', 1, '0'),
(45, 'йцукен', '0LnRhtGD0LrQtdC9', 'йцукен', 0, 0, 0, '0', 'wqeq@mail.ru', 0, '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `story`
--
ALTER TABLE `story`
  ADD UNIQUE KEY `ufid` (`ufid`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `story`
--
ALTER TABLE `story`
  MODIFY `ufid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
