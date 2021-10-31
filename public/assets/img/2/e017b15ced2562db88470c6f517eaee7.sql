-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 21 2021 г., 12:43
-- Версия сервера: 10.3.31-MariaDB-cll-lve
-- Версия PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vprokit_app`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `circle_id` int(11) NOT NULL,
  `name` text CHARACTER SET utf8mb4 NOT NULL,
  `color` text CHARACTER SET utf8mb4 NOT NULL,
  `descript` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `percent` int(11) NOT NULL DEFAULT 0,
  `important` int(11) NOT NULL DEFAULT 0 COMMENT 'как важно',
  `remind` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `dedline` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `urgently` int(11) NOT NULL DEFAULT 0 COMMENT 'как срочно',
  `note` text CHARACTER SET utf8mb4 DEFAULT NULL COMMENT 'заметки',
  `agree` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '0 - сектор; 1 - задача; 2 - цель',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `circle_id`, `name`, `color`, `descript`, `percent`, `important`, `remind`, `dedline`, `urgently`, `note`, `agree`, `type`, `created_at`, `updated_at`) VALUES
(55, 9, 'Доходы', '#0007B9', NULL, 40, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-20 09:31:10'),
(56, 9, 'Расходы', '#0007B9', NULL, 30, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-19 11:27:16'),
(57, 9, 'Имущество', '#0007B9', NULL, 60, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-19 11:27:16'),
(58, 9, 'Пассивный доход', '#0007B9', NULL, 20, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-19 11:27:16'),
(59, 9, '$ в обороте (на жизн..', '#0007B9', NULL, 20, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-19 11:10:37'),
(60, 9, '$ в накоплениях', '#0007B9', NULL, 40, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-19 11:27:16'),
(61, 9, 'Комфорт/условия жизни', '#0007B9', NULL, 60, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-19 11:27:16'),
(62, 9, '$ в инвестициях', '#0007B9', NULL, 20, 0, NULL, NULL, 0, NULL, 0, 0, '2021-06-06 18:32:06', '2021-10-19 11:27:16'),
(177, 1, 'Режим дня', '#00B912', NULL, 60, 0, NULL, NULL, 0, NULL, 0, 0, '2021-10-06 10:15:34', '2021-10-12 05:57:07'),
(178, 1, 'Эмоциональное здоровье', '#00B912', NULL, 70, 0, NULL, NULL, 0, NULL, 0, 0, '2021-10-06 10:15:38', '2021-10-12 05:57:38'),
(174, 1, 'Психологиеческое ..', '#00B912', NULL, 60, 0, NULL, NULL, 0, NULL, 0, 0, '2021-10-06 10:10:03', '2021-10-19 12:03:43'),
(173, 1, 'Питание', '#00B912', NULL, 60, 0, NULL, NULL, 0, NULL, 0, 0, '2021-10-06 10:10:03', '2021-10-12 05:56:46'),
(172, 1, 'Зарядка', '#00B912', NULL, 40, 0, NULL, NULL, 0, NULL, 0, 0, '2021-10-06 10:10:00', '2021-10-12 05:56:58'),
(186, 3, 'Дальние родственники', '#FF00D6', NULL, 40, 0, NULL, NULL, 0, NULL, 0, 0, '2021-10-08 14:54:05', '2021-10-14 11:38:38');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
