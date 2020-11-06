-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 06 2020 г., 07:43
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `twitter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `channels`
--

CREATE TABLE `channels` (
  `name` varchar(20) NOT NULL,
  `img` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `channels`
--

INSERT INTO `channels` (`name`, `img`, `address`) VALUES
('YouTube', 'img/7.png', '@YouTube'),
('BTS', 'img/bts.jpg', '@BTSofficial'),
('STRAYKIDS', 'img/straykids.png', '@SKZofficial'),
('ося магич болгарка', 'img/olesya.jpg', '@cocyopexy'),
('Anzhelika', 'img/otaku.jpg', '@ichwillschafen');

-- --------------------------------------------------------

--
-- Структура таблицы `twits`
--

CREATE TABLE `twits` (
  `author` varchar(20) NOT NULL,
  `img` varchar(30) NOT NULL,
  `text` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `twits`
--

INSERT INTO `twits` (`author`, `img`, `text`) VALUES
('MaryJane', 'img/1.jpg', '8 лучших аудиоредакторов для музыки и голосовых дорожек'),
('Лайфхакер', 'img/3.jpg', 'В «Архиве интернета» появилось 2 500 классических DOS-игр. Их можно запустить в браузере'),
('STRAYKIDS', 'img/skz.png', 'Stray Kids(스트레이 키즈) \"Back Door\" M/V'),
('', '', ''),
('vovan', 'img/1.jpg', 'i need sausage');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
