-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 08 2023 г., 21:48
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `donate`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `command` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `name`, `cost`, `img_dir`, `command`) VALUES
(1, 'test', 1, 'img/groups/vip.png', 'say {username} donated');

-- --------------------------------------------------------

--
-- Структура таблицы `pay_log`
--

CREATE TABLE `pay_log` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `cost` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pay_log`
--

INSERT INTO `pay_log` (`id`, `username`, `product`, `cost`, `date`) VALUES
(1, 'EncryRose', 'test123', 1, '2023-04-08 21:41:05'),
(2, 'test', 'test123', 1, '2023-04-08 21:41:05'),
(3, 'test', 'test', 1, '2023-04-08 21:41:05'),
(4, 'test', 'test1', 1, '2023-04-08 21:41:05'),
(5, 'IchiMichi', 'test', 1, '2023-04-08 21:41:05'),
(6, 'EncryRose', 'test234', 1, '2023-04-08 21:41:05');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pay_log`
--
ALTER TABLE `pay_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pay_log`
--
ALTER TABLE `pay_log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
