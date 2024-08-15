-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 15 2024 г., 19:12
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_crm_task_laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('1Room', 'a:3:{i:0;a:4:{s:9:\"room_name\";s:6:\"1-xona\";s:5:\"times\";a:9:{i:0;s:5:\"08:00\";i:1;s:5:\"09:30\";i:2;s:5:\"11:00\";i:3;s:5:\"12:30\";i:4;s:5:\"14:00\";i:5;s:5:\"15:30\";i:6;s:5:\"17:00\";i:7;s:5:\"18:30\";i:8;s:5:\"20:00\";}s:4:\"data\";a:30:{i:0;s:6:\"Aug-12\";i:1;s:6:\"Aug-13\";i:2;s:6:\"Aug-14\";i:3;s:6:\"Aug-15\";i:4;s:6:\"Aug-16\";i:5;s:6:\"Aug-17\";i:6;s:6:\"Aug-18\";i:7;s:6:\"Aug-19\";i:8;s:6:\"Aug-20\";i:9;s:6:\"Aug-21\";i:10;s:6:\"Aug-22\";i:11;s:6:\"Aug-23\";i:12;s:6:\"Aug-24\";i:13;s:6:\"Aug-25\";i:14;s:6:\"Aug-26\";i:15;s:6:\"Aug-27\";i:16;s:6:\"Aug-28\";i:17;s:6:\"Aug-29\";i:18;s:6:\"Aug-30\";i:19;s:6:\"Aug-31\";i:20;s:6:\"Sep-01\";i:21;s:6:\"Sep-02\";i:22;s:6:\"Sep-03\";i:23;s:6:\"Sep-04\";i:24;s:6:\"Sep-05\";i:25;s:6:\"Sep-06\";i:26;s:6:\"Sep-07\";i:27;s:6:\"Sep-08\";i:28;s:6:\"Sep-09\";i:29;s:6:\"Sep-10\";}s:5:\"about\";a:30:{i:0;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:1;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:2;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:3;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:4;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:5;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:6;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:7;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:8;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:9;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:10;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:11;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:12;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:13;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:14;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:15;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:16;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:17;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:18;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:19;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:20;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:21;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:22;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:23;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:24;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:25;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:1;s:10:\"guruh_name\";s:6:\"HANGIL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:26;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:27;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:28;a:9:{i:0;a:2:{s:8:\"guruh_id\";i:2;s:10:\"guruh_name\";s:8:\"HANGIL 2\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:29;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}}}i:1;a:4:{s:9:\"room_name\";s:6:\"2-xona\";s:5:\"times\";a:9:{i:0;s:5:\"08:00\";i:1;s:5:\"09:30\";i:2;s:5:\"11:00\";i:3;s:5:\"12:30\";i:4;s:5:\"14:00\";i:5;s:5:\"15:30\";i:6;s:5:\"17:00\";i:7;s:5:\"18:30\";i:8;s:5:\"20:00\";}s:4:\"data\";a:30:{i:0;s:6:\"Aug-12\";i:1;s:6:\"Aug-13\";i:2;s:6:\"Aug-14\";i:3;s:6:\"Aug-15\";i:4;s:6:\"Aug-16\";i:5;s:6:\"Aug-17\";i:6;s:6:\"Aug-18\";i:7;s:6:\"Aug-19\";i:8;s:6:\"Aug-20\";i:9;s:6:\"Aug-21\";i:10;s:6:\"Aug-22\";i:11;s:6:\"Aug-23\";i:12;s:6:\"Aug-24\";i:13;s:6:\"Aug-25\";i:14;s:6:\"Aug-26\";i:15;s:6:\"Aug-27\";i:16;s:6:\"Aug-28\";i:17;s:6:\"Aug-29\";i:18;s:6:\"Aug-30\";i:19;s:6:\"Aug-31\";i:20;s:6:\"Sep-01\";i:21;s:6:\"Sep-02\";i:22;s:6:\"Sep-03\";i:23;s:6:\"Sep-04\";i:24;s:6:\"Sep-05\";i:25;s:6:\"Sep-06\";i:26;s:6:\"Sep-07\";i:27;s:6:\"Sep-08\";i:28;s:6:\"Sep-09\";i:29;s:6:\"Sep-10\";}s:5:\"about\";a:30:{i:0;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:1;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:2;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:3;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:4;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:5;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:6;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:7;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:8;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:9;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:10;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:11;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:12;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:13;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:14;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:15;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:16;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:17;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:18;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:19;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:20;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:21;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:22;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:23;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:24;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:25;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:26;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:27;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:28;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:29;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}}}i:2;a:4:{s:9:\"room_name\";s:6:\"3-xona\";s:5:\"times\";a:9:{i:0;s:5:\"08:00\";i:1;s:5:\"09:30\";i:2;s:5:\"11:00\";i:3;s:5:\"12:30\";i:4;s:5:\"14:00\";i:5;s:5:\"15:30\";i:6;s:5:\"17:00\";i:7;s:5:\"18:30\";i:8;s:5:\"20:00\";}s:4:\"data\";a:30:{i:0;s:6:\"Aug-12\";i:1;s:6:\"Aug-13\";i:2;s:6:\"Aug-14\";i:3;s:6:\"Aug-15\";i:4;s:6:\"Aug-16\";i:5;s:6:\"Aug-17\";i:6;s:6:\"Aug-18\";i:7;s:6:\"Aug-19\";i:8;s:6:\"Aug-20\";i:9;s:6:\"Aug-21\";i:10;s:6:\"Aug-22\";i:11;s:6:\"Aug-23\";i:12;s:6:\"Aug-24\";i:13;s:6:\"Aug-25\";i:14;s:6:\"Aug-26\";i:15;s:6:\"Aug-27\";i:16;s:6:\"Aug-28\";i:17;s:6:\"Aug-29\";i:18;s:6:\"Aug-30\";i:19;s:6:\"Aug-31\";i:20;s:6:\"Sep-01\";i:21;s:6:\"Sep-02\";i:22;s:6:\"Sep-03\";i:23;s:6:\"Sep-04\";i:24;s:6:\"Sep-05\";i:25;s:6:\"Sep-06\";i:26;s:6:\"Sep-07\";i:27;s:6:\"Sep-08\";i:28;s:6:\"Sep-09\";i:29;s:6:\"Sep-10\";}s:5:\"about\";a:30:{i:0;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:1;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:2;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:3;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:4;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:5;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:6;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:7;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:8;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:9;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:10;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:11;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:12;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:13;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:14;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:15;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:16;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:17;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:18;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:19;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:20;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:21;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:22;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:23;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:24;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:25;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:26;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:27;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:28;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}i:29;a:9:{i:0;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:1;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:2;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:3;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:4;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:5;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:6;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:7;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}i:8;a:2:{s:8:\"guruh_id\";s:4:\"NULL\";s:10:\"guruh_name\";s:4:\"NULL\";}}}}}', 1723657972);
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('2Data', 'a:12:{i:1;a:2:{s:4:\"data\";s:10:\"2024-08-12\";s:3:\"kun\";s:8:\"Dushanba\";}i:2;a:2:{s:4:\"data\";s:10:\"2024-08-14\";s:3:\"kun\";s:10:\"Chorshanba\";}i:3;a:2:{s:4:\"data\";s:10:\"2024-08-16\";s:3:\"kun\";s:4:\"Juma\";}i:4;a:2:{s:4:\"data\";s:10:\"2024-08-19\";s:3:\"kun\";s:8:\"Dushanba\";}i:5;a:2:{s:4:\"data\";s:10:\"2024-08-21\";s:3:\"kun\";s:10:\"Chorshanba\";}i:6;a:2:{s:4:\"data\";s:10:\"2024-08-23\";s:3:\"kun\";s:4:\"Juma\";}i:7;a:2:{s:4:\"data\";s:10:\"2024-08-26\";s:3:\"kun\";s:8:\"Dushanba\";}i:8;a:2:{s:4:\"data\";s:10:\"2024-08-28\";s:3:\"kun\";s:10:\"Chorshanba\";}i:9;a:2:{s:4:\"data\";s:10:\"2024-08-30\";s:3:\"kun\";s:4:\"Juma\";}i:10;a:2:{s:4:\"data\";s:10:\"2024-09-02\";s:3:\"kun\";s:8:\"Dushanba\";}i:11;a:2:{s:4:\"data\";s:10:\"2024-09-04\";s:3:\"kun\";s:10:\"Chorshanba\";}i:12;a:2:{s:4:\"data\";s:10:\"2024-09-06\";s:3:\"kun\";s:4:\"Juma\";}}', 1723410938),
('2DataNext', 'a:12:{i:1;a:2:{s:4:\"data\";s:10:\"2024-09-09\";s:3:\"kun\";s:8:\"Dushanba\";}i:2;a:2:{s:4:\"data\";s:10:\"2024-09-11\";s:3:\"kun\";s:10:\"Chorshanba\";}i:3;a:2:{s:4:\"data\";s:10:\"2024-09-13\";s:3:\"kun\";s:4:\"Juma\";}i:4;a:2:{s:4:\"data\";s:10:\"2024-09-16\";s:3:\"kun\";s:8:\"Dushanba\";}i:5;a:2:{s:4:\"data\";s:10:\"2024-09-18\";s:3:\"kun\";s:10:\"Chorshanba\";}i:6;a:2:{s:4:\"data\";s:10:\"2024-09-20\";s:3:\"kun\";s:4:\"Juma\";}i:7;a:2:{s:4:\"data\";s:10:\"2024-09-23\";s:3:\"kun\";s:8:\"Dushanba\";}i:8;a:2:{s:4:\"data\";s:10:\"2024-09-25\";s:3:\"kun\";s:10:\"Chorshanba\";}i:9;a:2:{s:4:\"data\";s:10:\"2024-09-27\";s:3:\"kun\";s:4:\"Juma\";}i:10;a:2:{s:4:\"data\";s:10:\"2024-09-30\";s:3:\"kun\";s:8:\"Dushanba\";}i:11;a:2:{s:4:\"data\";s:10:\"2024-10-02\";s:3:\"kun\";s:10:\"Chorshanba\";}i:12;a:2:{s:4:\"data\";s:10:\"2024-10-04\";s:3:\"kun\";s:4:\"Juma\";}}', 1723416829),
('2NewGrop', 'a:18:{s:10:\"guruh_name\";s:6:\"Hangil\";s:8:\"tulov_id\";s:1:\"2\";s:5:\"summa\";i:600000;s:8:\"chegirma\";i:0;s:14:\"admin_chegirma\";i:300000;s:13:\"chegirma_time\";i:0;s:10:\"dars_count\";s:2:\"12\";s:11:\"guruh_start\";s:10:\"2024-08-11\";s:9:\"guruh_end\";s:10:\"2024-09-06\";s:10:\"hafta_kun2\";s:10:\"Toq kunlar\";s:9:\"hafta_kun\";s:7:\"toq_kun\";s:8:\"cours_id\";s:1:\"2\";s:10:\"cours_name\";s:6:\"Hangil\";s:9:\"techer_id\";s:2:\"30\";s:6:\"techer\";s:16:\"Tarix o\'qituvchi\";s:14:\"techer_paymart\";i:0;s:12:\"techer_bonus\";i:0;s:11:\"techer_foiz\";s:2:\"50\";}', 1723410938),
('2NewGropNext', 'a:21:{s:2:\"id\";s:1:\"1\";s:10:\"guruh_name\";s:8:\"Hangil 2\";s:11:\"guruh_start\";s:10:\"2024-09-07\";s:10:\"dars_count\";s:2:\"12\";s:8:\"cours_id\";s:1:\"2\";s:8:\"tulov_id\";s:1:\"2\";s:9:\"techer_id\";s:2:\"30\";s:11:\"techer_foiz\";s:2:\"50\";s:14:\"techer_paymart\";i:0;s:12:\"techer_bonus\";i:0;s:4:\"room\";s:6:\"1-xona\";s:7:\"room_id\";i:1;s:9:\"hafta_kun\";s:7:\"toq_kun\";s:10:\"cours_name\";s:6:\"Hangil\";s:9:\"dars_time\";s:5:\"08:00\";s:5:\"summa\";i:600000;s:8:\"chegirma\";i:0;s:14:\"admin_chegirma\";i:300000;s:13:\"chegirma_time\";i:0;s:6:\"techer\";s:16:\"Tarix o\'qituvchi\";s:9:\"guruh_end\";s:10:\"2024-10-04\";}', 1723416829);

-- --------------------------------------------------------

--
-- Структура таблицы `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `dam_olishes`
--

CREATE TABLE `dam_olishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dam_olishes`
--

INSERT INTO `dam_olishes` (`id`, `data`, `description`, `created_at`, `updated_at`) VALUES
(1, '2024-08-11', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(2, '2024-08-18', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(3, '2024-08-25', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(4, '2024-09-01', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(5, '2024-09-08', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(6, '2024-09-15', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(7, '2024-09-22', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(8, '2024-09-29', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(9, '2024-10-06', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(10, '2024-10-13', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(11, '2024-10-20', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(12, '2024-10-27', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(13, '2024-11-03', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(14, '2024-11-10', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(15, '2024-11-17', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(16, '2024-11-24', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(17, '2024-12-01', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(18, '2024-12-08', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(19, '2024-12-15', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(20, '2024-12-22', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08'),
(21, '2024-12-29', 'Yakshanba Dam olish kuni', '2024-08-10 14:04:08', '2024-08-10 14:04:08');

-- --------------------------------------------------------

--
-- Структура таблицы `davomats`
--

CREATE TABLE `davomats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `guruh_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, 'ea79be0f-0107-421a-b632-18ef0ca43f32', 'database', 'default', '{\"uuid\":\"ea79be0f-0107-421a-b632-18ef0ca43f32\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:136:\\\"Hurmatli Dilshod Xolmurodov siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'Exception: Неверный Email или пароль in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php:93\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(32): mrmuminov\\eskizuz\\Eskiz->requestAuthLogin()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#35 {main}', '2024-08-10 14:14:12'),
(2, '18375283-4205-4924-bb5d-bebd627b760c', 'database', 'default', '{\"uuid\":\"18375283-4205-4924-bb5d-bebd627b760c\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:134:\\\"Hurmatli MUROD XAMROEVICH siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'Exception: Неверный Email или пароль in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php:93\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(32): mrmuminov\\eskizuz\\Eskiz->requestAuthLogin()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#35 {main}', '2024-08-10 14:17:18'),
(3, 'f3fa2189-61be-489d-9767-15b5cd6ae755', 'database', 'default', '{\"uuid\":\"f3fa2189-61be-489d-9767-15b5cd6ae755\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:134:\\\"Hurmatli Rustamov alesher siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'Exception: Неверный Email или пароль in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php:93\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(32): mrmuminov\\eskizuz\\Eskiz->requestAuthLogin()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#35 {main}', '2024-08-10 14:20:22'),
(4, '13b5fc5f-da40-4717-9b81-4572a2f6a3fd', 'database', 'default', '{\"uuid\":\"13b5fc5f-da40-4717-9b81-4572a2f6a3fd\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:131:\\\"Hurmatli Qayimov bobur siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'Exception: Неверный Email или пароль in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php:93\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(32): mrmuminov\\eskizuz\\Eskiz->requestAuthLogin()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#35 {main}', '2024-08-10 14:24:32'),
(5, '72cb8b16-d659-4307-a42a-b2c734adda22', 'database', 'default', '{\"uuid\":\"72cb8b16-d659-4307-a42a-b2c734adda22\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:132:\\\"Hurmatli Karimov muzrob siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'Exception: Неверный Email или пароль in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php:93\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(32): mrmuminov\\eskizuz\\Eskiz->requestAuthLogin()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#35 {main}', '2024-08-10 14:26:30');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(6, 'da6c401d-8ac9-4806-9074-4caffc32ddb7', 'database', 'default', '{\"uuid\":\"da6c401d-8ac9-4806-9074-4caffc32ddb7\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:108:\\\"Hurmatli Boboyorov ozod siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:30:07'),
(7, '45ab050a-2a5d-43dc-8a30-95fc8f43c0bb', 'database', 'default', '{\"uuid\":\"45ab050a-2a5d-43dc-8a30-95fc8f43c0bb\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:108:\\\"Hurmatli Ermatov Farruh siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:31:47'),
(8, 'e3722070-7576-4ed1-82b4-24c1e13f0ddb', 'database', 'default', '{\"uuid\":\"e3722070-7576-4ed1-82b4-24c1e13f0ddb\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:107:\\\"Hurmatli Qosimov Toxir siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:34:16'),
(9, '5ac922da-f234-48a3-84d2-ee1cc7d3e108', 'database', 'default', '{\"uuid\":\"5ac922da-f234-48a3-84d2-ee1cc7d3e108\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:109:\\\"Hurmatli Allayorov sobir siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:36:08'),
(10, 'ca57825a-2beb-4da9-8791-0b173f4b7195', 'database', 'default', '{\"uuid\":\"ca57825a-2beb-4da9-8791-0b173f4b7195\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:110:\\\"Hurmatli Pulatov nuriddin siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login:  parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:39:34');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(11, 'b6bd09c2-89bb-4ca6-acfb-7fcad26ec810', 'database', 'default', '{\"uuid\":\"b6bd09c2-89bb-4ca6-acfb-7fcad26ec810\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:120:\\\"Hurmatli ALIMOVA MAFTUNA siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login: S1723318959 parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:42:41'),
(12, '84fe7eb3-6a3f-45e9-ac81-6daf15381972', 'database', 'default', '{\"uuid\":\"84fe7eb3-6a3f-45e9-ac81-6daf15381972\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:121:\\\"Hurmatli SALIMOVA MAFTUNA siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login: S1723319051 parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:44:13'),
(13, 'b66bdc8e-713c-4aa0-9566-cdbfc2419400', 'database', 'default', '{\"uuid\":\"b66bdc8e-713c-4aa0-9566-cdbfc2419400\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:121:\\\"Hurmatli ESHMATOV TOSHMAT siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login: S1723319133 parol: 12345678 \\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 14:45:35'),
(14, 'f172fe26-9def-4c73-9cb0-3a94c379592d', 'database', 'default', '{\"uuid\":\"f172fe26-9def-4c73-9cb0-3a94c379592d\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:13:\\\"+998908830450\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:121:\\\"Hurmatli MUTABAR SALIMOVA siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login: S1723319842 parol: 12345678 \\\";}\"}}', 'Error: Object of class mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse could not be converted to string in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php:266\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(185): Illuminate\\Log\\Logger->formatMessage(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(133): Illuminate\\Log\\Logger->writeLog(\'info\', Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\LogManager.php(734): Illuminate\\Log\\Logger->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(357): Illuminate\\Log\\LogManager->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(61): Illuminate\\Support\\Facades\\Facade::__callStatic(\'info\', Array)\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#39 {main}', '2024-08-10 14:57:25'),
(15, '52edd616-a4ef-416b-8933-34a3de5aaa4e', 'database', 'default', '{\"uuid\":\"52edd616-a4ef-416b-8933-34a3de5aaa4e\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:13:\\\"+998908830450\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:119:\\\"Hurmatli ALESHER NAVOIY siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login: S1723320106 parol: 12345678 \\\";}\"}}', 'Error: Object of class mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse could not be converted to string in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php:266\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(185): Illuminate\\Log\\Logger->formatMessage(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(133): Illuminate\\Log\\Logger->writeLog(\'info\', Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\LogManager.php(734): Illuminate\\Log\\Logger->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(357): Illuminate\\Log\\LogManager->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(62): Illuminate\\Support\\Facades\\Facade::__callStatic(\'info\', Array)\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#39 {main}', '2024-08-10 15:01:50');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(16, 'a113e515-6f46-4674-a795-10c17c89748c', 'database', 'default', '{\"uuid\":\"a113e515-6f46-4674-a795-10c17c89748c\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:13:\\\"+998908830450\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:122:\\\"Hurmatli MUHAMMADOV MAXMUD siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login: S1723320381 parol: 12345678 \\\";}\"}}', 'Error: Object of class mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse could not be converted to string in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php:266\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(185): Illuminate\\Log\\Logger->formatMessage(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(133): Illuminate\\Log\\Logger->writeLog(\'info\', Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\LogManager.php(734): Illuminate\\Log\\Logger->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(357): Illuminate\\Log\\LogManager->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(62): Illuminate\\Support\\Facades\\Facade::__callStatic(\'info\', Array)\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#39 {main}', '2024-08-10 15:06:24'),
(17, '293a2ab4-6572-4cda-b410-24d6824fe812', 'database', 'default', '{\"uuid\":\"293a2ab4-6572-4cda-b410-24d6824fe812\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:13:\\\"+998908830450\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:123:\\\"Hurmatli PALONCHAYEV OISTON siz ATKO o\'quv markaziga tashrifingizdan mamnunmiz. Sizning login: S1723320725 parol: 12345678 \\\";}\"}}', 'Error: Object of class mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse could not be converted to string in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php:266\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(185): Illuminate\\Log\\Logger->formatMessage(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\Logger.php(133): Illuminate\\Log\\Logger->writeLog(\'info\', Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Log\\LogManager.php(734): Illuminate\\Log\\Logger->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse), Array)\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Facades\\Facade.php(357): Illuminate\\Log\\LogManager->info(Object(mrmuminov\\eskizuz\\response\\sms\\SmsSendResponse))\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(62): Illuminate\\Support\\Facades\\Facade::__callStatic(\'info\', Array)\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#37 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#38 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#39 {main}', '2024-08-10 15:12:08'),
(18, '089860ed-875d-4267-b7c3-6d24ea7ab7a1', 'database', 'default', '{\"uuid\":\"089860ed-875d-4267-b7c3-6d24ea7ab7a1\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:90:\\\"NEMATOV TOXIR Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 15:25:29'),
(19, '4aa0f004-764c-4fdb-ae42-414be62b75f6', 'database', 'default', '{\"uuid\":\"4aa0f004-764c-4fdb-ae42-414be62b75f6\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:87:\\\"matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 16:05:47'),
(20, 'eeb8a382-2207-4a91-ab80-d4764a25eb5f', 'database', 'default', '{\"uuid\":\"eeb8a382-2207-4a91-ab80-d4764a25eb5f\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:87:\\\"matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 16:06:18');
INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(21, '9038e454-613a-4e50-b1f9-88fa39d8bf94', 'database', 'default', '{\"uuid\":\"9038e454-613a-4e50-b1f9-88fa39d8bf94\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:87:\\\"matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 16:06:34'),
(22, 'ea301e7d-b13a-497b-a11c-e9eb8f3c957f', 'database', 'default', '{\"uuid\":\"ea301e7d-b13a-497b-a11c-e9eb8f3c957f\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:87:\\\"matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 16:07:11'),
(23, '2d2defa2-dc18-4429-baca-072849c244a8', 'database', 'default', '{\"uuid\":\"2d2defa2-dc18-4429-baca-072849c244a8\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:87:\\\"matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 16:07:39'),
(24, 'f82b196b-cdce-4783-b8a6-07038bd13525', 'database', 'default', '{\"uuid\":\"f82b196b-cdce-4783-b8a6-07038bd13525\",\"displayName\":\"App\\\\Jobs\\\\SendMessage\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMessage\",\"command\":\"O:20:\\\"App\\\\Jobs\\\\SendMessage\\\":3:{s:12:\\\"\\u0000*\\u0000markaz_id\\\";i:1;s:8:\\\"\\u0000*\\u0000phone\\\";s:0:\\\"\\\";s:7:\\\"\\u0000*\\u0000text\\\";s:87:\\\"matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https:\\/\\/atko.uz\\\";}\"}}', 'InvalidArgumentException: `mobile_phone` is empty in C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php:57\nStack trace:\n#0 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\types\\sms\\SmsSingleSmsType.php(29): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->validateArguments()\n#1 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\mrmuminov\\php-eskiz-uz\\src\\Eskiz.php(143): mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType->toArray()\n#2 C:\\xampp\\htdocs\\my_crm_task_laravel\\app\\Jobs\\SendMessage.php(48): mrmuminov\\eskizuz\\Eskiz->requestSmsSend(Object(mrmuminov\\eskizuz\\types\\sms\\SmsSingleSmsType))\n#3 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): App\\Jobs\\SendMessage->handle()\n#4 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#5 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#6 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#7 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#8 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(128): Illuminate\\Container\\Container->call(Array)\n#9 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Bus\\Dispatcher->Illuminate\\Bus\\{closure}(Object(App\\Jobs\\SendMessage))\n#10 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#11 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#12 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(124): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(App\\Jobs\\SendMessage), false)\n#13 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(144): Illuminate\\Queue\\CallQueuedHandler->Illuminate\\Queue\\{closure}(Object(App\\Jobs\\SendMessage))\n#14 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(119): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(App\\Jobs\\SendMessage))\n#15 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(123): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#16 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(71): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(App\\Jobs\\SendMessage))\n#17 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#18 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(439): Illuminate\\Queue\\Jobs\\Job->fire()\n#19 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#20 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#21 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(139): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#22 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(122): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#23 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#24 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#25 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#26 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#27 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(690): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#28 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(213): Illuminate\\Container\\Container->call(Array)\n#29 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Command\\Command.php(279): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#30 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#31 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(1047): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#32 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(316): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#33 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\symfony\\console\\Application.php(167): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#34 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(196): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#35 C:\\xampp\\htdocs\\my_crm_task_laravel\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1203): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#36 C:\\xampp\\htdocs\\my_crm_task_laravel\\artisan(13): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#37 {main}', '2024-08-10 16:08:13');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `succes` int(11) NOT NULL,
  `error` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `markaz_id`, `file_name`, `count`, `succes`, `error`, `status`, `meneger`, `created_at`, `updated_at`) VALUES
(1, 1, '1723347430.xlsx', 0, 0, 0, 'false', 'admin@gmail.com', '2024-08-10 22:37:10', '2024-08-10 22:37:10');

-- --------------------------------------------------------

--
-- Структура таблицы `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `smm` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tkun` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `user_id` varchar(255) DEFAULT NULL,
  `meneger` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `grops`
--

CREATE TABLE `grops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `tulov_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `techer_id` int(11) NOT NULL,
  `guruh_name` varchar(255) NOT NULL,
  `guruh_start` varchar(255) NOT NULL,
  `guruh_end` varchar(255) NOT NULL,
  `hafta_kun` varchar(255) NOT NULL,
  `dars_count` varchar(255) NOT NULL,
  `techer_foiz` varchar(255) NOT NULL,
  `techer_paymart` varchar(255) NOT NULL,
  `techer_bonus` varchar(255) NOT NULL,
  `dars_time` varchar(255) NOT NULL,
  `next_id` varchar(255) NOT NULL DEFAULT 'Null',
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `grops`
--

INSERT INTO `grops` (`id`, `markaz_id`, `tulov_id`, `room_id`, `cours_id`, `techer_id`, `guruh_name`, `guruh_start`, `guruh_end`, `hafta_kun`, `dars_count`, `techer_foiz`, `techer_paymart`, `techer_bonus`, `dars_time`, `next_id`, `meneger`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 2, 30, 'HANGIL', '2024-08-11', '2024-09-06', 'toq_kun', '12', '50', '0', '0', '08:00', '2', 'admin@gmail.com', '2024-08-10 16:15:44', '2024-08-10 17:54:12'),
(2, 1, 2, 1, 2, 30, 'HANGIL 2', '2024-09-07', '2024-10-04', 'toq_kun', '12', '50', '0', '0', '08:00', 'false', 'admin@gmail.com', '2024-08-10 17:54:12', '2024-08-10 17:54:12');

-- --------------------------------------------------------

--
-- Структура таблицы `grops_times`
--

CREATE TABLE `grops_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `grops_id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `grops_times`
--

INSERT INTO `grops_times` (`id`, `markaz_id`, `room_id`, `grops_id`, `data`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2024-08-10', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(2, 1, 1, 1, '2024-08-14', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(3, 1, 1, 1, '2024-08-16', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(4, 1, 1, 1, '2024-08-19', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(5, 1, 1, 1, '2024-08-21', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(6, 1, 1, 1, '2024-08-23', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(7, 1, 1, 1, '2024-08-26', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(8, 1, 1, 1, '2024-08-28', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(9, 1, 1, 1, '2024-08-30', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(10, 1, 1, 1, '2024-09-02', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(11, 1, 1, 1, '2024-09-04', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(12, 1, 1, 1, '2024-09-06', '08:00', '2024-08-10 16:15:44', '2024-08-10 16:15:44'),
(13, 1, 1, 2, '2024-09-09', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(14, 1, 1, 2, '2024-09-11', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(15, 1, 1, 2, '2024-09-13', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(16, 1, 1, 2, '2024-09-16', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(17, 1, 1, 2, '2024-09-18', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(18, 1, 1, 2, '2024-09-20', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(19, 1, 1, 2, '2024-09-23', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(20, 1, 1, 2, '2024-09-25', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(21, 1, 1, 2, '2024-09-27', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(22, 1, 1, 2, '2024-09-30', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(23, 1, 1, 2, '2024-10-02', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(24, 1, 1, 2, '2024-10-04', '08:00', '2024-08-10 17:54:12', '2024-08-10 17:54:12');

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `kassas`
--

CREATE TABLE `kassas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL DEFAULT 1,
  `kassa_naqt` int(11) NOT NULL DEFAULT 0,
  `kassa_naqt_chiqim_pedding` int(11) NOT NULL DEFAULT 0,
  `kassa_naqt_xarajat_pedding` int(11) NOT NULL DEFAULT 0,
  `kassa_naqt_ish_haqi_pedding` int(11) NOT NULL DEFAULT 0,
  `kassa_plastik` int(11) NOT NULL DEFAULT 0,
  `kassa_plastik_chiqim_pedding` int(11) NOT NULL DEFAULT 0,
  `kassa_plastik_xarajat_pedding` int(11) NOT NULL DEFAULT 0,
  `kassa_plastik_ish_haqi_pedding` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kassas`
--

INSERT INTO `kassas` (`id`, `markaz_id`, `kassa_naqt`, `kassa_naqt_chiqim_pedding`, `kassa_naqt_xarajat_pedding`, `kassa_naqt_ish_haqi_pedding`, `kassa_plastik`, `kassa_plastik_chiqim_pedding`, `kassa_plastik_xarajat_pedding`, `kassa_plastik_ish_haqi_pedding`, `created_at`, `updated_at`) VALUES
(1, 1, 1375000, 0, 0, 10000, 1500000, 0, 0, 0, '2024-08-10 13:36:35', '2024-08-15 12:01:23'),
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, '2024-08-14 12:39:07', '2024-08-14 12:39:07');

-- --------------------------------------------------------

--
-- Структура таблицы `kassa_kirim_chiqims`
--

CREATE TABLE `kassa_kirim_chiqims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `hodisa` varchar(255) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `administrator` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `kassa_kirim_chiqims`
--

INSERT INTO `kassa_kirim_chiqims` (`id`, `markaz_id`, `hodisa`, `summa`, `type`, `status`, `comment`, `meneger`, `administrator`, `created_at`, `updated_at`) VALUES
(1, 1, 'Kassadan Chiqim', '15000', 'Naqt', 'true', 'test', 'admin@gmail.com', 'admin@gmail.com', '2024-08-10 15:55:26', '2024-08-10 15:58:07'),
(2, 1, 'Kassadan Chiqim', '25000', 'Plastik', 'true', 'fsffdrs', 'admin@gmail.com', 'admin@gmail.com', '2024-08-10 15:57:10', '2024-08-10 15:58:06'),
(3, 1, 'Kassadan Xarajat', '10000', 'Naqt', 'true', 'sdf', 'admin@gmail.com', 'admin@gmail.com', '2024-08-10 15:57:20', '2024-08-10 15:58:05'),
(5, 1, 'Kassadan Xarajat', '15000', 'Naqt', 'true', 'jhfh', 'admin@gmail.com', 'admin@gmail.com', '2024-08-10 17:52:44', '2024-08-10 17:52:45'),
(6, 1, 'Balansdan Chiqim.', '50000', 'Payme', 'true', 'tets', 'meneger@gmail.com', 'meneger@gmail.com', '2024-08-14 11:41:49', '2024-08-14 11:41:49'),
(7, 1, 'Balandan ish haqi kassaga qaytarildi.', '25000', 'Plastik', 'true', 'eee', 'admin@gmail.com', 'admin@gmail.com', '2024-08-15 12:00:32', '2024-08-15 12:00:32'),
(8, 1, 'Balandan ish haqi kassaga qaytarildi.', '15000', 'Naqt', 'true', 'sdfsdf', 'admin@gmail.com', 'admin@gmail.com', '2024-08-15 12:00:40', '2024-08-15 12:00:40');

-- --------------------------------------------------------

--
-- Структура таблицы `markazs`
--

CREATE TABLE `markazs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `drektor` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `payme_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `image` varchar(255) NOT NULL,
  `count_sms` int(11) NOT NULL DEFAULT 0,
  `mavjud_sms` int(11) NOT NULL DEFAULT 0,
  `lessen_time` int(11) NOT NULL DEFAULT 90,
  `paymart` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markazs`
--

INSERT INTO `markazs` (`id`, `name`, `drektor`, `phone`, `addres`, `payme_id`, `status`, `image`, `count_sms`, `mavjud_sms`, `lessen_time`, `paymart`, `created_at`, `updated_at`) VALUES
(1, 'ATKO', 'Elshod Musurmonov', '90 883 0450', 'Qarshi shaxar', 'NULL', 'true', 'images/1723332154.jpg', 5, 95, 90, 1, '2024-08-10 13:36:35', '2024-08-10 18:22:34'),
(2, 'Test', 'test', '908830505546', 'TEST', 'NULL', 'true', 'mycrm.jpg', 0, 0, 120, 2, '2024-08-14 12:39:07', '2024-08-14 12:39:07');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_addres`
--

CREATE TABLE `markaz_addres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_addres`
--

INSERT INTO `markaz_addres` (`id`, `markaz_id`, `addres`, `created_at`, `updated_at`) VALUES
(1, 1, 'Qarshi shahar', '2024-08-10 14:04:51', '2024-08-10 14:04:51'),
(2, 1, 'Qarshi tuman', '2024-08-10 14:04:58', '2024-08-10 14:04:58'),
(3, 1, 'Nishon tumani', '2024-08-10 14:05:06', '2024-08-10 14:05:06'),
(4, 1, 'Muborak tumani', '2024-08-10 14:05:15', '2024-08-10 14:05:15'),
(5, 1, 'G\'uzor tumani', '2024-08-10 14:05:25', '2024-08-10 14:05:25');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_balans`
--

CREATE TABLE `markaz_balans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL DEFAULT 1,
  `balans_naqt` int(11) NOT NULL DEFAULT 0,
  `balans_naqt_chiqim` int(11) NOT NULL DEFAULT 0,
  `kassa_naqt_xarajat` int(11) NOT NULL DEFAULT 0,
  `balans_plastik` int(11) NOT NULL DEFAULT 0,
  `balans_plastik_chiqim` int(11) NOT NULL DEFAULT 0,
  `kassa_plastik_xarajat` int(11) NOT NULL DEFAULT 0,
  `balans_payme` int(11) NOT NULL DEFAULT 0,
  `balans_payme_chiqim` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_balans`
--

INSERT INTO `markaz_balans` (`id`, `markaz_id`, `balans_naqt`, `balans_naqt_chiqim`, `kassa_naqt_xarajat`, `balans_plastik`, `balans_plastik_chiqim`, `kassa_plastik_xarajat`, `balans_payme`, `balans_payme_chiqim`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 0, 25000, 0, 0, 0, 300000, 0, '2024-08-10 13:36:37', '2024-08-15 12:00:40'),
(2, 2, 0, 0, 0, 0, 0, 0, 0, 0, '2024-08-14 12:39:07', '2024-08-14 12:39:07');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_cours`
--

CREATE TABLE `markaz_cours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `cours_name` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_cours`
--

INSERT INTO `markaz_cours` (`id`, `markaz_id`, `cours_name`, `meneger`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hangil', 'admin@gmail.com', 'false', '2024-08-10 13:46:35', '2024-08-10 13:47:07'),
(2, 1, 'Hangil', 'admin@gmail.com', 'true', '2024-08-10 13:47:17', '2024-08-10 13:47:17'),
(3, 1, 'Topik', 'admin@gmail.com', 'true', '2024-08-10 13:47:23', '2024-08-10 13:47:23');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_cours_tests`
--

CREATE TABLE `markaz_cours_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `test_savol` varchar(255) NOT NULL,
  `test_javob_true` varchar(255) NOT NULL,
  `test_javon_false1` varchar(255) NOT NULL,
  `test_javon_false2` varchar(255) NOT NULL,
  `test_javon_false3` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_cours_tests`
--

INSERT INTO `markaz_cours_tests` (`id`, `markaz_id`, `cours_id`, `test_savol`, `test_javob_true`, `test_javon_false1`, `test_javon_false2`, `test_javon_false3`, `meneger`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '1-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:47:40', '2024-08-10 13:47:40'),
(2, 1, 2, '2-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:47:47', '2024-08-10 13:47:47'),
(3, 1, 2, '3-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:47:54', '2024-08-10 13:47:54'),
(4, 1, 2, '4-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:48:02', '2024-08-10 13:48:02'),
(5, 1, 2, '5-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:48:07', '2024-08-10 13:48:07'),
(6, 1, 2, '6-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:48:15', '2024-08-10 13:48:15'),
(8, 1, 2, '8-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:48:32', '2024-08-10 13:48:32'),
(9, 1, 2, '7-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:48:45', '2024-08-10 13:48:45'),
(10, 1, 2, '8-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:48:52', '2024-08-10 13:48:52'),
(11, 1, 2, '9-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:48:57', '2024-08-10 13:48:57'),
(12, 1, 2, '10-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:49:02', '2024-08-10 13:49:02'),
(13, 1, 2, '11-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:49:11', '2024-08-10 13:49:11'),
(14, 1, 2, '12-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:49:16', '2024-08-10 13:49:16'),
(15, 1, 2, '13-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:49:22', '2024-08-10 13:49:22'),
(16, 1, 2, '14-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:49:28', '2024-08-10 13:49:28'),
(17, 1, 2, '15-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:49:34', '2024-08-10 13:49:34'),
(18, 1, 3, '1-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:57:58', '2024-08-10 13:57:58'),
(19, 1, 3, '2-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:06', '2024-08-10 13:58:06'),
(20, 1, 3, '3-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:11', '2024-08-10 13:58:11'),
(21, 1, 3, '4-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:17', '2024-08-10 13:58:17'),
(22, 1, 3, '5-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:22', '2024-08-10 13:58:22'),
(23, 1, 3, '6-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:29', '2024-08-10 13:58:29'),
(24, 1, 3, '7-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:37', '2024-08-10 13:58:37'),
(25, 1, 3, '8-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:48', '2024-08-10 13:58:48'),
(26, 1, 3, '9-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:58:54', '2024-08-10 13:58:54'),
(27, 1, 3, '10-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:00', '2024-08-10 13:59:00'),
(28, 1, 3, '11-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:05', '2024-08-10 13:59:05'),
(29, 1, 3, '12-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:12', '2024-08-10 13:59:12'),
(30, 1, 3, '13-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:19', '2024-08-10 13:59:19'),
(31, 1, 3, '14-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:24', '2024-08-10 13:59:24'),
(32, 1, 3, '15-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:30', '2024-08-10 13:59:30'),
(33, 1, 3, '16-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:35', '2024-08-10 13:59:35'),
(34, 1, 3, '17-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:41', '2024-08-10 13:59:41'),
(35, 1, 3, '18-savol', '1', '0', '0', '0', 'admin@gmail.com', '2024-08-10 13:59:47', '2024-08-10 13:59:47');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_cours_videos`
--

CREATE TABLE `markaz_cours_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `cours_title` varchar(255) NOT NULL,
  `cours_url_token` varchar(255) NOT NULL,
  `cours_number` int(11) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_hodim_statistkas`
--

CREATE TABLE `markaz_hodim_statistkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `naqt` int(11) NOT NULL,
  `plastik` int(11) NOT NULL,
  `chegirma` int(11) NOT NULL,
  `qaytarildi` int(11) NOT NULL,
  `tashrif` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_hodim_statistkas`
--

INSERT INTO `markaz_hodim_statistkas` (`id`, `markaz_id`, `user_id`, `naqt`, `plastik`, `chegirma`, `qaytarildi`, `tashrif`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 0, 0, 0, 0, '2024-08-10 13:36:37', '2024-08-10 13:36:37'),
(2, 1, 2, 1415000, 1525000, 365000, 0, 23, '2024-08-10 13:36:37', '2024-08-10 17:44:49'),
(3, 1, 3, 0, 0, 0, 0, 0, '2024-08-10 13:36:37', '2024-08-10 13:36:37'),
(4, 1, 4, 0, 0, 0, 0, 0, '2024-08-10 13:36:37', '2024-08-10 13:36:37'),
(5, 1, 32, 0, 0, 0, 0, 0, '2024-08-10 16:14:04', '2024-08-10 16:14:04');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_ish_haqis`
--

CREATE TABLE `markaz_ish_haqis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `typing` varchar(255) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `guruh` varchar(255) NOT NULL,
  `guruh_name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_ish_haqis`
--

INSERT INTO `markaz_ish_haqis` (`id`, `markaz_id`, `user_id`, `typing`, `summa`, `type`, `guruh`, `guruh_name`, `comment`, `meneger`, `created_at`, `updated_at`) VALUES
(1, 1, 30, 'Techer', '5000', 'Naqt', '1', 'HANGIL', 'dfsdf', 'admin@gmail.com', '2024-08-15 12:00:59', '2024-08-15 12:00:59'),
(2, 1, 30, 'Techer', '10000', 'Plastik', '1', 'HANGIL', 'sdfsdf', 'admin@gmail.com', '2024-08-15 12:01:11', '2024-08-15 12:01:11'),
(3, 1, 30, 'Techer', '15000', 'Plastik', '1', 'HANGIL', 'sdfsdfsd', 'admin@gmail.com', '2024-08-15 12:01:23', '2024-08-15 12:01:23');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_lessen_times`
--

CREATE TABLE `markaz_lessen_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL DEFAULT 1,
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_lessen_times`
--

INSERT INTO `markaz_lessen_times` (`id`, `markaz_id`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, '08:00', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(2, 1, '09:30', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(3, 1, '11:00', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(4, 1, '12:30', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(5, 1, '14:00', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(6, 1, '15:30', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(7, 1, '17:00', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(8, 1, '18:30', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(9, 1, '20:00', '2024-08-10 14:04:27', '2024-08-10 14:04:27'),
(10, 2, '08:00', '2024-08-14 12:39:29', '2024-08-14 12:39:29'),
(11, 2, '10:00', '2024-08-14 12:39:29', '2024-08-14 12:39:29'),
(12, 2, '12:00', '2024-08-14 12:39:29', '2024-08-14 12:39:29'),
(13, 2, '14:00', '2024-08-14 12:39:29', '2024-08-14 12:39:29'),
(14, 2, '16:00', '2024-08-14 12:39:29', '2024-08-14 12:39:29'),
(15, 2, '18:00', '2024-08-14 12:39:29', '2024-08-14 12:39:29'),
(16, 2, '20:00', '2024-08-14 12:39:29', '2024-08-14 12:39:29');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_ogohliks`
--

CREATE TABLE `markaz_ogohliks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL DEFAULT 1,
  `data` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_ogohliks`
--

INSERT INTO `markaz_ogohliks` (`id`, `markaz_id`, `data`, `description`, `meneger`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-08-11', 'Test', 'elshodatc1116@gmail.com', 'true', '2024-08-10 14:06:49', '2024-08-10 14:06:49');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_paymarts`
--

CREATE TABLE `markaz_paymarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `summa` int(11) NOT NULL,
  `chegirma` int(11) NOT NULL DEFAULT 0,
  `admin_chegirma` int(11) NOT NULL DEFAULT 0,
  `chegirma_time` int(11) NOT NULL DEFAULT 0,
  `meneger` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_paymarts`
--

INSERT INTO `markaz_paymarts` (`id`, `markaz_id`, `summa`, `chegirma`, `admin_chegirma`, `chegirma_time`, `meneger`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 500000, 0, 250000, 0, 'admin@gmail.com', 'false', '2024-08-10 13:45:34', '2024-08-10 13:46:18'),
(2, 1, 600000, 0, 300000, 0, 'admin@gmail.com', 'true', '2024-08-10 13:45:50', '2024-08-10 13:45:50'),
(3, 1, 500000, 0, 250000, 0, 'admin@gmail.com', 'true', '2024-08-10 15:59:21', '2024-08-10 15:59:21');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_rooms`
--

CREATE TABLE `markaz_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_rooms`
--

INSERT INTO `markaz_rooms` (`id`, `markaz_id`, `room_name`, `status`, `meneger`, `created_at`, `updated_at`) VALUES
(1, '1', '1-xona', 'true', 'admin@gmail.com', '2024-08-10 13:37:01', '2024-08-10 14:00:17'),
(2, '1', '2-xona', 'true', 'admin@gmail.com', '2024-08-10 13:37:06', '2024-08-10 13:37:06'),
(3, '1', '3-xona', 'true', 'admin@gmail.com', '2024-08-10 13:37:11', '2024-08-10 13:37:11');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_send_messages`
--

CREATE TABLE `markaz_send_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_send_messages`
--

INSERT INTO `markaz_send_messages` (`id`, `markaz_id`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '+998908830450', 'NEMATOV TOXIR Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https://atko.uz', '2024-08-10 15:29:51', '2024-08-10 15:29:51'),
(2, 1, '+998945204004', 'Hurmatli matematika siz ATKO o\'quv markaziga o\'qituvchi lovozimiga ishga olindingiz. Sizning login: matematika parol: 12345678 websayt: https://atko.uz', '2024-08-10 16:04:34', '2024-08-10 16:04:34'),
(3, 1, '+998945204004', 'matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https://atko.uz', '2024-08-10 16:08:59', '2024-08-10 16:08:59'),
(4, 1, '+998945204004', 'matematika Sizning parolingiz yangilandi. Yangi parol 12345678 websayt: https://atko.uz', '2024-08-10 16:09:39', '2024-08-10 16:09:39'),
(5, 1, '+998908830450', 'Hurmatli Meneger siz ATKO o\'quv markaziga ishga olindingiz. Sizning login: dsfsdfsdfsdsd parol: 12345678 websayt: https://atko.uz', '2024-08-10 16:14:08', '2024-08-10 16:14:08');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_smms`
--

CREATE TABLE `markaz_smms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `smm` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_smms`
--

INSERT INTO `markaz_smms` (`id`, `markaz_id`, `smm`, `created_at`, `updated_at`) VALUES
(1, 1, 'Telegram', '2024-08-10 14:05:31', '2024-08-10 14:05:31'),
(2, 1, 'Instagram', '2024-08-10 14:05:34', '2024-08-10 14:05:34'),
(3, 1, 'Facebook', '2024-08-10 14:05:37', '2024-08-10 14:05:37'),
(4, 1, 'Youtube', '2024-08-10 14:05:46', '2024-08-10 14:05:46'),
(5, 2, 'Telegram', '2024-08-14 12:39:40', '2024-08-14 12:39:40');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_sms_pakets`
--

CREATE TABLE `markaz_sms_pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL DEFAULT 1,
  `paket_soni` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `tulov` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_sms_pakets`
--

INSERT INTO `markaz_sms_pakets` (`id`, `markaz_id`, `paket_soni`, `description`, `meneger`, `tulov`, `created_at`, `updated_at`) VALUES
(1, 1, 100, 'Bonus uchun', 'elshodatc1116@gmail.com', '0', '2024-08-10 14:06:28', '2024-08-10 14:06:28');

-- --------------------------------------------------------

--
-- Структура таблицы `markaz_sms_settings`
--

CREATE TABLE `markaz_sms_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `new_user` varchar(255) NOT NULL DEFAULT 'false',
  `tkun` varchar(255) NOT NULL DEFAULT 'false',
  `new_pay` varchar(255) NOT NULL DEFAULT 'false',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `markaz_sms_settings`
--

INSERT INTO `markaz_sms_settings` (`id`, `markaz_id`, `new_user`, `tkun`, `new_pay`, `created_at`, `updated_at`) VALUES
(1, 1, 'true', 'true', 'true', '2024-08-10 13:36:37', '2024-08-10 14:13:37'),
(2, 2, 'false', 'false', 'false', '2024-08-14 12:39:08', '2024-08-14 12:39:08');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_07_13_094834_create_roles_table', 1),
(4, '2024_07_13_095034_create_markazs_table', 1),
(5, '2024_07_13_095330_create_kassas_table', 1),
(6, '2024_07_14_000000_create_users_table', 1),
(7, '2024_07_15_051357_create_markaz_balans_table', 1),
(8, '2024_07_15_052241_create_markaz_ogohliks_table', 1),
(9, '2024_07_15_053145_create_markaz_sms_pakets_table', 1),
(10, '2024_07_15_183201_create_markaz_lessen_times_table', 1),
(11, '2024_07_16_102901_create_dam_olishes_table', 1),
(12, '2024_07_16_140948_create_markaz_rooms_table', 1),
(13, '2024_07_16_163355_create_markaz_paymarts_table', 1),
(14, '2024_07_16_180757_create_markaz_sms_settings_table', 1),
(15, '2024_07_17_064115_create_markaz_cours_table', 1),
(16, '2024_07_17_070833_create_markaz_cours_videos_table', 1),
(17, '2024_07_17_071213_create_markaz_cours_tests_table', 1),
(18, '2024_07_17_103431_create_markaz_addres_table', 1),
(19, '2024_07_17_103634_create_markaz_smms_table', 1),
(20, '2024_07_17_171837_create_markaz_send_messages_table', 1),
(21, '2024_07_18_062048_create_markaz_hodim_statistkas_table', 1),
(22, '2024_07_18_131235_create_user_histories_table', 1),
(23, '2024_07_18_132255_create_user_balans_table', 1),
(24, '2024_07_18_132650_create_user_eslatmas_table', 1),
(25, '2024_07_20_145651_create_grops_table', 1),
(26, '2024_07_20_150817_create_grops_times_table', 1),
(27, '2024_07_21_085004_create_user_groups_table', 1),
(28, '2024_07_23_155019_create_user_paymarts_table', 1),
(29, '2024_07_24_163402_create_kassa_kirim_chiqims_table', 1),
(30, '2024_07_27_080910_create_markaz_ish_haqis_table', 1),
(31, '2024_07_27_123447_create_forms_table', 1),
(32, '2024_07_30_170607_create_personal_access_tokens_table', 1),
(33, '2024_08_01_150632_create_user_tests_table', 1),
(34, '2024_08_01_172944_create_davomats_table', 1),
(35, '2024_08_11_033053_create_files_table', 2),
(36, '2024_08_14_110633_create_transactions_table', 3),
(37, '2024_08_14_110927_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Kutulmoqda',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '2024-08-10 13:36:35', '2024-08-10 13:36:35'),
(2, 'Admin', '2024-08-10 13:36:35', '2024-08-10 13:36:35'),
(3, 'MenegerAdmin', '2024-08-10 13:36:35', '2024-08-10 13:36:35'),
(4, 'Meneger', '2024-08-10 13:36:35', '2024-08-10 13:36:35'),
(5, 'Techer', '2024-08-10 13:36:35', '2024-08-10 13:36:35'),
(6, 'User', '2024-08-10 13:36:35', '2024-08-10 13:36:35');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NZvrWD5M5DDHjC9f8qkVW4OJ3QhkQZvc4fCLXikk', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 YaBrowser/24.7.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUllYbDlFbG9uaHZHaGFTQ0tvMXNuOW16UHpxUkJiUHZGRjRuR3hUcyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbWVuZWdlci90ZWNoZXIvc2hvdy8zMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1723741284),
('XpS0XhxQRc2kPysJok9H2inCtgoNkFlS9YU7oe7s', 30, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUE5IVE4yZGdTcUJlbjR5SXVySHhjOHFidWVXUFRTcEJjYXBQVThPUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZWNoZXIvZ3VydWgvMSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjMwO30=', 1723741877);

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paycom_transaction_id` varchar(25) DEFAULT NULL,
  `paycom_time` varchar(13) DEFAULT NULL,
  `paycom_time_datetime` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `perform_time` datetime DEFAULT NULL,
  `cancel_time` varchar(13) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `state` tinyint(4) DEFAULT NULL,
  `reason` tinyint(4) DEFAULT NULL,
  `receivers` text DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `perform_time_unix` varchar(13) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL DEFAULT 1,
  `role_id` int(11) NOT NULL DEFAULT 6,
  `name` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `addres` varchar(255) DEFAULT NULL,
  `tkun` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `smm` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `balans` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `markaz_id`, `role_id`, `name`, `phone1`, `phone2`, `addres`, `tkun`, `about`, `smm`, `status`, `balans`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Elshod Musurmonov', '90 883 0450', '90 883 0450', 'Qarshi shaxar', '2024-01-01', NULL, NULL, 'true', 0, 'elshodatc1116@gmail.com', NULL, '$2y$12$7YW7Cg3mHtkF84ZobHdWfeLC0m7qAARlXn6/JSTSmrP6GVpB4ZwBK', NULL, '2024-08-10 13:36:36', '2024-08-10 23:36:34'),
(2, 1, 2, 'Elshod Musurmonov', '90 883 0450', '90 883 0450', 'Qarshi shaxar', '2024-01-01', NULL, NULL, 'true', 0, 'admin@gmail.com', NULL, '$2y$12$X9.ye5RpT9ToIEiQipOeFupsXmkDwRsXC9/vBXphFGTZRvBoKi4TG', NULL, '2024-08-10 13:36:36', '2024-08-10 13:36:36'),
(3, 1, 3, 'Elshod Musurmonov', '90 883 0450', '90 883 0450', 'Qarshi shaxar', '2024-01-01', NULL, NULL, 'true', 0, 'adminmeneger@gmail.com', NULL, '$2y$12$bHe0Gskhp/JMgHBtpTSXbOzyAO6aCSSed663NuqNWDcIUv2L7fmgO', NULL, '2024-08-10 13:36:36', '2024-08-10 13:36:36'),
(4, 1, 2, 'Elshod Musurmonov', '90 883 0450', '90 883 0450', 'Qarshi shaxar', '2024-01-01', NULL, NULL, 'true', 0, 'meneger@gmail.com', NULL, '$2y$12$3Nb3cafSQ2UhWCsHeQbrYOe81jT2HoDe5OwoVi4BFohRRJn5j78SS', NULL, '2024-08-10 13:36:37', '2024-08-10 13:36:37'),
(7, 1, 6, 'DILSHOD XOLMURODOV', '+998 90 884 0450', '+998 90 884 0450', 'Qarshi shahar', '1999-12-15', 'Test uchun create user', 'Telegram', 'true', 0, 'S1723317248', NULL, '$2y$12$6xOC3skY6XppSBvAiEa19..v68JvK.OGosyucOCfexZR25sbmqCUG', NULL, '2024-08-10 14:14:08', '2024-08-10 14:14:08'),
(8, 1, 6, 'MUROD XAMROEVICH', '+998 94 521 4004', '+998 94 520 4005', 'Qarshi shahar', '1999-08-11', 'Test', 'Telegram', 'true', 0, 'S1723317437', NULL, '$2y$12$Unb96f7WsxmDnovdlEVmke9RDxgPRTTqDQn/G484HfE8likMoYQW2', NULL, '2024-08-10 14:17:17', '2024-08-10 14:17:17'),
(9, 1, 6, 'RUSTAMOV ALESHER', '+998 90 883 0452', '+998 90 883 0450', 'Qarshi shahar', '1997-02-15', 'ssss', 'Telegram', 'true', 0, 'S1723317620', NULL, '$2y$12$CMj6Fy8MN4RDQrmOoG.fY.DviPFKSLgr8qqoZHCXjhwDuQ6ybW65u', NULL, '2024-08-10 14:20:20', '2024-08-10 14:24:01'),
(10, 1, 6, 'QAYIMOV BOBUR', '+998 90 883 0454', '+998 90 883 0450', 'Qarshi shahar', '1999-12-31', 'test', 'Telegram', 'true', 0, 'S1723317870', NULL, '$2y$12$14xM8A4/1m/Mz5CaJaI2gOOzlkN3DYwX4caE1gRIRq8qOOL.SoBTu', NULL, '2024-08-10 14:24:31', '2024-08-10 14:26:02'),
(11, 1, 6, 'KARIMOV MUZROB', '+998 90 883 0456', '+998 90 883 0450', 'Qarshi shahar', '1998-12-31', 'sdf', 'Telegram', 'true', 0, 'S1723317987', NULL, '$2y$12$/LHuYCZBAlqN61GvsGQ4vO4kzI2NoFK4w02d05EJnMPLG1EM/ysTO', NULL, '2024-08-10 14:26:27', '2024-08-10 14:29:35'),
(12, 1, 6, 'BOBOYOROV OZOD', '+998 90 883 0459', '+998 90 883 0450', 'Qarshi shahar', '1998-12-31', '15', 'Instagram', 'true', 0, 'S1723318204', NULL, '$2y$12$5CG3qS036.H21WIm/BTd2OqYnRQkyCGDZStpRUaoitGezZ0mDEiEa', NULL, '2024-08-10 14:30:04', '2024-08-10 14:31:24'),
(13, 1, 6, 'ERMATOV FARRUH', '+998 90 883 0449', '+998 90 883 0450', 'Qarshi shahar', '1987-12-15', 'sdfsd', 'Telegram', 'true', 0, 'S1723318306', NULL, '$2y$12$dHO7p7YLMkCfPtk9ysZXEeIqNzyS1tdhMvFe5Mw5Ym3FU0r/uRNh.', NULL, '2024-08-10 14:31:46', '2024-08-10 14:33:53'),
(14, 1, 6, 'QOSIMOV TOXIR', '+998 90 883 0448', '+998 90 883 0450', 'Qarshi shahar', '1994-12-15', 'asdfs', 'Telegram', 'true', 0, 'S1723318453', NULL, '$2y$12$.HPMxdcJ2atZym/vc98dCuour.HJfxlIxeGA90OAtOMcuEnmgotUm', NULL, '2024-08-10 14:34:13', '2024-08-10 14:35:45'),
(15, 1, 6, 'ALLAYOROV SOBIR', '+998 90 883 0444', '+998 90 883 0450', 'Qarshi shahar', '1997-12-31', 'test', 'Telegram', 'true', 0, 'S1723318566', NULL, '$2y$12$EVB/3HTQ5I4LR70hFLeEgeV8rPoIwHi9o92yGwSiO6rxwwY7QSGR.', NULL, '2024-08-10 14:36:07', '2024-08-10 14:39:06'),
(16, 1, 6, 'PULATOV NURIDDIN', '+998 90 883 5555', '+998 90 883 0450', 'Qarshi shahar', '1998-12-31', 'dsfs', 'Telegram', 'true', 0, 'S1723318770', NULL, '$2y$12$YQFkQkSM7NMA/uWbBqPsXe/BajxkroSPECSb.qCdwPfU0AkqlkGgG', NULL, '2024-08-10 14:39:31', '2024-08-10 14:42:16'),
(17, 1, 6, 'ALIMOVA MAFTUNA', '+998 90 883 0666', '+998 90 883 0450', 'Qarshi shahar', '1995-12-31', 'sdf', 'Telegram', 'true', 0, 'S1723318959', NULL, '$2y$12$woUH8imGuxcCmjBNPETu1uq4313AKUq7Bm2ye0i31EgD0qYWmWG0S', NULL, '2024-08-10 14:42:39', '2024-08-10 14:43:33'),
(18, 1, 6, 'SALIMOVA MAFTUNA', '+998 90 883 3333', '+998 90 883 0450', 'Qarshi shahar', '1991-12-31', 'sdfsdf', 'Telegram', 'true', 0, 'S1723319051', NULL, '$2y$12$jNV1uX1Sr6PDnJdmWEXZh.L/TPUPDt4MSvfT0zUVclUwo.TSt3WwW', NULL, '2024-08-10 14:44:11', '2024-08-10 14:45:03'),
(19, 1, 6, 'ESHMATOV TOSHMAT', '+998 90 883 0411', '+998 90 883 0450', 'Qarshi shahar', '1998-12-31', '19975545', 'Instagram', 'true', 0, 'S1723319133', NULL, '$2y$12$Y/CM7iICESUumnz1y3mnaOF6fkoi.sz3MsSvkOnpG4CcmShzPL7GG', NULL, '2024-08-10 14:45:33', '2024-08-10 14:47:21'),
(20, 1, 6, 'KARIMOV JONIBEK', '+998 90 883 0430', '+998 90 883 0450', 'Qarshi shahar', '1997-12-31', 'dsd', 'Telegram', 'true', 0, 'S1723319266', NULL, '$2y$12$rRos9LQx8EOPp64Gk4xsdOeOFGuJ5KgxShBh.tUGrCiLLPn4o3yc2', NULL, '2024-08-10 14:47:46', '2024-08-10 14:50:06'),
(21, 1, 6, 'MUZAPOV ANVAR', '+998 90 883 0466', '+998 90 883 0422', 'Qarshi shahar', '1985-12-31', 'ds', 'Telegram', 'true', 0, 'S1723319435', NULL, '$2y$12$N3dpvWfdXfiE4yKdLb9.g.yC7X3GoDxJS83T1AWqJXaFsTF7pcYB.', NULL, '2024-08-10 14:50:35', '2024-08-10 14:54:25'),
(22, 1, 6, 'QALANDAROV QALANDAR', '+998 90 883 0789', '+998 90 883 0450', 'Qarshi shahar', '1998-12-31', 'sd', 'Telegram', 'true', 0, 'S1723319684', NULL, '$2y$12$VdKXYKB5nZzdraeH6EPKRuJdSwSuF4k/OJSRtnEwm52zKW5E.8Zc.', NULL, '2024-08-10 14:54:44', '2024-08-10 14:55:47'),
(23, 1, 6, 'FOZILOV SARVAR', '+998 90 882 2222', '+998 90 883 0450', 'Qarshi shahar', '1985-12-31', 'sdfvs', 'Telegram', 'true', 0, 'S1723319782', NULL, '$2y$12$ZvR9K29TY3zq4KQDRLiNHO6WdxQeJh/1fG/lSijNs9/G5Y4ZKOEN6', NULL, '2024-08-10 14:56:22', '2024-08-10 14:56:49'),
(24, 1, 6, 'MUTABAR SALIMOVA', '+998 90 883 1212', '+998 90 883 0450', 'Qarshi tuman', '1998-12-31', 'sdfs', 'Telegram', 'true', 0, 'S1723319842', NULL, '$2y$12$ewqiM6q/lJCmMVLZWR42WO5W5r5./1y98OIbxtyFQS2GEgGZHFdra', NULL, '2024-08-10 14:57:23', '2024-08-10 15:01:21'),
(25, 1, 6, 'ALESHER NAVOIY', '+998 90 884 4444', '+998 90 883 0450', 'Qarshi shahar', '1988-12-31', 'df', 'Telegram', 'true', 0, 'S1723320106', NULL, '$2y$12$2JulzhHXn045WuVTXWLUOufpMJgRoi8jKvwHljuDbr1wvih01TEHa', NULL, '2024-08-10 15:01:46', '2024-08-10 15:05:59'),
(26, 1, 6, 'MUHAMMADOV MAXMUD', '+998 90 883 0987', '+998 90 883 0450', 'Qarshi shahar', '1988-12-31', 'sdf', 'Telegram', 'true', -550000, 'S1723320381', NULL, '$2y$12$1NDIfCY9syza8IK73Uni/./tOdu/6UplIYyl2HMT/jBYciJ2QFtne', NULL, '2024-08-10 15:06:21', '2024-08-10 17:54:12'),
(27, 1, 6, 'PALONCHAYEV OISTON', '+998 90 883 0450', '+998 90 883 0450', 'Qarshi shahar', '1985-01-01', 'd', 'Telegram', 'true', -400000, 'S1723320725', NULL, '$2y$12$0ey2KzNxVBjz88g3pHenpecpAiLPwqRQ33O1B6GHcd/GEvQHBJV2q', NULL, '2024-08-10 15:12:06', '2024-08-14 12:00:06'),
(28, 1, 6, 'XALIMOVA XALIMA', '+998 90 883 0450', '+998 90 886 3546', 'Qarshi shahar', '1988-12-31', 'd', 'Telegram', 'true', 0, 'S1723321055', NULL, '$2y$12$trmeYcs74tNk13BSkoujJ.Rutvl3Kg/jPJYxyq3PUiY2rYmE7IQgq', NULL, '2024-08-10 15:17:35', '2024-08-10 17:39:08'),
(29, 1, 6, 'NEMATOV TOXIR', '+998 90 883 0450', '+998 90 883 0450', 'Qarshi shahar', '1995-12-31', 'sd', 'Telegram', 'true', 1005000, 'S1723321365', NULL, '$2y$12$tB9deJyMNHhgeTnnqa2xsuBAixiGWPRCSV/HsNyj.1o5eXEWNHhpi', 'tAAemOYEwz9E3GXg8smtlt9rRPnpXII2lT2nCeYKweuPCbxbvs2mwV3Mq43y', '2024-08-10 15:22:46', '2024-08-14 11:40:45'),
(30, 1, 5, 'Tarix o\'qituvchi', '+998 90 883 0450', '+998 90 883 0450', 'Qarshi shahar', '2000-08-11', 'dfg', NULL, 'true', 0, 'tarix01', NULL, '$2y$12$QIp/YALQYz8epsX3YBejUO4fwRqFQ3k37oEDbwTqvHyE.O1h7OCsG', NULL, '2024-08-10 16:01:23', '2024-08-10 16:01:23'),
(31, 1, 5, 'matematika', '+998 94 520 4004', '+998 94 520 4004', 'Qarshi shahar', '2000-08-15', 'sdf', NULL, 'true', 0, 'matematika', NULL, '$2y$12$Kvz.3c8GGcUb31hf5efxQOy6ncspPgnL2xsXfsO2RasJ1298no5Ue', NULL, '2024-08-10 16:04:32', '2024-08-10 16:09:37'),
(32, 1, 2, 'Meneger', '+998 90 883 0450', '+998 90 883 0450', 'Qarshi shahar', '1999-12-15', 'dsd', NULL, 'true', 0, 'dsfsdfsdfsdsd', NULL, '$2y$12$f0h55rNj.ufsNWqYyXTk6utT4rnrScTkx3v7JlMdeczs7S48CMxbC', NULL, '2024-08-10 16:14:04', '2024-08-10 16:14:04');

-- --------------------------------------------------------

--
-- Структура таблицы `user_balans`
--

CREATE TABLE `user_balans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `naqt` int(11) NOT NULL,
  `plastik` int(11) NOT NULL,
  `payme` int(11) NOT NULL,
  `qaytarildi` int(11) NOT NULL,
  `chegirma` int(11) NOT NULL,
  `jarima` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_balans`
--

INSERT INTO `user_balans` (`id`, `markaz_id`, `user_id`, `naqt`, `plastik`, `payme`, `qaytarildi`, `chegirma`, `jarima`, `created_at`, `updated_at`) VALUES
(2, 1, 7, 0, 0, 0, 0, 0, 0, '2024-08-10 14:14:08', '2024-08-10 14:14:08'),
(3, 1, 8, 0, 0, 0, 0, 0, 0, '2024-08-10 14:17:17', '2024-08-10 14:17:17'),
(4, 1, 9, 0, 0, 0, 0, 0, 0, '2024-08-10 14:20:20', '2024-08-10 14:20:20'),
(5, 1, 10, 0, 0, 0, 0, 0, 0, '2024-08-10 14:24:31', '2024-08-10 14:24:31'),
(6, 1, 11, 0, 0, 0, 0, 0, 0, '2024-08-10 14:26:27', '2024-08-10 14:26:27'),
(7, 1, 12, 0, 0, 0, 0, 0, 0, '2024-08-10 14:30:04', '2024-08-10 14:30:04'),
(8, 1, 13, 0, 0, 0, 0, 0, 0, '2024-08-10 14:31:46', '2024-08-10 14:31:46'),
(9, 1, 14, 0, 0, 0, 0, 0, 0, '2024-08-10 14:34:13', '2024-08-10 14:34:13'),
(10, 1, 15, 0, 0, 0, 0, 0, 0, '2024-08-10 14:36:07', '2024-08-10 14:36:07'),
(11, 1, 16, 0, 0, 0, 0, 0, 0, '2024-08-10 14:39:31', '2024-08-10 14:39:31'),
(12, 1, 17, 0, 0, 0, 0, 0, 0, '2024-08-10 14:42:39', '2024-08-10 14:42:39'),
(13, 1, 18, 0, 0, 0, 0, 0, 0, '2024-08-10 14:44:11', '2024-08-10 14:44:11'),
(14, 1, 19, 0, 0, 0, 0, 0, 0, '2024-08-10 14:45:33', '2024-08-10 14:45:33'),
(15, 1, 20, 0, 0, 0, 0, 0, 0, '2024-08-10 14:47:46', '2024-08-10 14:47:46'),
(16, 1, 21, 0, 0, 0, 0, 0, 0, '2024-08-10 14:50:35', '2024-08-10 14:50:35'),
(17, 1, 22, 0, 0, 0, 0, 0, 0, '2024-08-10 14:54:44', '2024-08-10 14:54:44'),
(18, 1, 23, 0, 0, 0, 0, 0, 0, '2024-08-10 14:56:22', '2024-08-10 14:56:22'),
(19, 1, 24, 0, 0, 0, 0, 0, 0, '2024-08-10 14:57:23', '2024-08-10 14:57:23'),
(20, 1, 25, 0, 0, 0, 0, 0, 0, '2024-08-10 15:01:46', '2024-08-10 15:01:46'),
(21, 1, 26, 350000, 250000, 0, 0, 50000, 0, '2024-08-10 15:06:21', '2024-08-10 16:58:09'),
(22, 1, 27, 150000, 50000, 300000, 0, 300000, 0, '2024-08-10 15:12:06', '2024-08-14 12:00:06'),
(23, 1, 28, 0, 0, 0, 0, 0, 0, '2024-08-10 15:17:35', '2024-08-10 15:17:35'),
(24, 1, 29, 915000, 1225000, 10000, 0, 15000, 0, '2024-08-10 15:22:46', '2024-08-14 11:40:45');

-- --------------------------------------------------------

--
-- Структура таблицы `user_eslatmas`
--

CREATE TABLE `user_eslatmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user_groups`
--

CREATE TABLE `user_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `grops_id` int(11) NOT NULL,
  `grops_start_data` varchar(255) NOT NULL,
  `grops_start_comment` varchar(255) NOT NULL,
  `grops_start_meneger` varchar(255) NOT NULL,
  `grops_end_data` varchar(255) NOT NULL DEFAULT '...',
  `grops_end_comment` varchar(255) NOT NULL DEFAULT '...',
  `grops_end_meneger` varchar(255) NOT NULL DEFAULT '...',
  `jarima` varchar(255) NOT NULL DEFAULT '...',
  `status` varchar(255) NOT NULL DEFAULT 'true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_groups`
--

INSERT INTO `user_groups` (`id`, `markaz_id`, `user_id`, `grops_id`, `grops_start_data`, `grops_start_comment`, `grops_start_meneger`, `grops_end_data`, `grops_end_comment`, `grops_end_meneger`, `jarima`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 29, 1, '2024-08-10', 'ssss', 'admin@gmail.com', '...', '...', '...', '...', 'true', '2024-08-10 16:57:03', '2024-08-10 16:57:03'),
(2, 1, 28, 1, '2024-08-10', 'ssss', 'admin@gmail.com', '2024-08-10', 'test', 'admin@gmail.com', '0', 'false', '2024-08-10 16:57:18', '2024-08-10 17:39:08'),
(3, 1, 27, 1, '2024-08-10', 'ssss', 'admin@gmail.com', '...', '...', '...', '...', 'true', '2024-08-10 16:57:27', '2024-08-10 16:57:27'),
(4, 1, 26, 1, '2024-08-10', 'sss', 'admin@gmail.com', '...', '...', '...', '...', 'true', '2024-08-10 16:57:37', '2024-08-10 16:57:37'),
(5, 1, 29, 2, '2024-08-10', 'Eski guruhdan ko\'chirildi', 'admin@gmail.com', '...', '...', '...', '...', 'true', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(6, 1, 27, 2, '2024-08-10', 'Eski guruhdan ko\'chirildi', 'admin@gmail.com', '...', '...', '...', '...', 'true', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(7, 1, 26, 2, '2024-08-10', 'Eski guruhdan ko\'chirildi', 'admin@gmail.com', '...', '...', '...', '...', 'true', '2024-08-10 17:54:12', '2024-08-10 17:54:12');

-- --------------------------------------------------------

--
-- Структура таблицы `user_histories`
--

CREATE TABLE `user_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `guruh` varchar(255) NOT NULL,
  `summa` varchar(255) NOT NULL,
  `tulov_type` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `xisoblash` varchar(255) NOT NULL,
  `balans` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_histories`
--

INSERT INTO `user_histories` (`id`, `markaz_id`, `user_id`, `status`, `guruh`, `summa`, `tulov_type`, `comment`, `xisoblash`, `balans`, `meneger`, `created_at`, `updated_at`) VALUES
(2, 1, 7, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:14:08', '2024-08-10 14:14:08'),
(3, 1, 8, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:17:17', '2024-08-10 14:17:17'),
(4, 1, 9, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:20:20', '2024-08-10 14:20:20'),
(5, 1, 9, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:24:01', '2024-08-10 14:24:01'),
(6, 1, 10, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:24:31', '2024-08-10 14:24:31'),
(7, 1, 10, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:26:02', '2024-08-10 14:26:02'),
(8, 1, 11, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:26:27', '2024-08-10 14:26:27'),
(9, 1, 11, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:29:35', '2024-08-10 14:29:35'),
(10, 1, 12, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:30:04', '2024-08-10 14:30:04'),
(11, 1, 12, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:31:24', '2024-08-10 14:31:24'),
(12, 1, 13, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:31:46', '2024-08-10 14:31:46'),
(13, 1, 13, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:33:53', '2024-08-10 14:33:53'),
(14, 1, 14, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:34:13', '2024-08-10 14:34:13'),
(15, 1, 14, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:35:45', '2024-08-10 14:35:45'),
(16, 1, 15, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:36:07', '2024-08-10 14:36:07'),
(17, 1, 15, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:39:06', '2024-08-10 14:39:06'),
(18, 1, 16, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:39:31', '2024-08-10 14:39:31'),
(19, 1, 16, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:42:16', '2024-08-10 14:42:16'),
(20, 1, 17, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:42:39', '2024-08-10 14:42:39'),
(21, 1, 17, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:43:33', '2024-08-10 14:43:33'),
(22, 1, 18, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:44:11', '2024-08-10 14:44:11'),
(23, 1, 18, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:45:03', '2024-08-10 14:45:03'),
(24, 1, 19, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:45:33', '2024-08-10 14:45:33'),
(25, 1, 19, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:47:21', '2024-08-10 14:47:21'),
(26, 1, 20, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:47:46', '2024-08-10 14:47:46'),
(27, 1, 20, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:50:06', '2024-08-10 14:50:06'),
(28, 1, 21, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:50:35', '2024-08-10 14:50:35'),
(29, 1, 21, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:53:49', '2024-08-10 14:53:49'),
(30, 1, 21, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:54:25', '2024-08-10 14:54:25'),
(31, 1, 22, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:54:44', '2024-08-10 14:54:44'),
(32, 1, 22, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:55:47', '2024-08-10 14:55:47'),
(33, 1, 23, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:56:22', '2024-08-10 14:56:22'),
(34, 1, 23, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 14:56:49', '2024-08-10 14:56:49'),
(35, 1, 24, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 14:57:23', '2024-08-10 14:57:23'),
(36, 1, 24, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:01:21', '2024-08-10 15:01:21'),
(37, 1, 25, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 15:01:46', '2024-08-10 15:01:46'),
(38, 1, 25, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:05:59', '2024-08-10 15:05:59'),
(39, 1, 26, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 15:06:21', '2024-08-10 15:06:21'),
(40, 1, 26, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:11:24', '2024-08-10 15:11:24'),
(41, 1, 27, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 15:12:06', '2024-08-10 15:12:06'),
(42, 1, 27, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:17:11', '2024-08-10 15:17:11'),
(43, 1, 28, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 15:17:35', '2024-08-10 15:17:35'),
(44, 1, 28, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:22:25', '2024-08-10 15:22:25'),
(45, 1, 29, 'Markazga tashrif', '-', '-', '-', '-', '-', '0', 'admin@gmail.com', '2024-08-10 15:22:46', '2024-08-10 15:22:46'),
(46, 1, 29, 'Parol yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:25:25', '2024-08-10 15:25:25'),
(47, 1, 29, 'Parol yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:27:46', '2024-08-10 15:27:46'),
(48, 1, 29, 'Parol yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:28:12', '2024-08-10 15:28:12'),
(49, 1, 29, 'Parol yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 15:29:47', '2024-08-10 15:29:47'),
(50, 1, 29, 'To\'lov', '', '150 000', 'Naqt', 'edwe', '0 + 150 000 = 150 000', '150 000', 'admin@gmail.com', '2024-08-10 15:36:44', '2024-08-10 15:36:44'),
(51, 1, 29, 'To\'lov', '', '250 000', 'Plastik', 'edwe', '150 000 + 250 000 = 400 000', '400 000', 'admin@gmail.com', '2024-08-10 15:36:44', '2024-08-10 15:36:44'),
(52, 1, 29, 'To\'lov', '', '150 000', 'Naqt', 'edwe', '400 000 + 150 000 = 550 000', '550 000', 'admin@gmail.com', '2024-08-10 15:38:28', '2024-08-10 15:38:28'),
(53, 1, 29, 'To\'lov', '', '250 000', 'Plastik', 'edwe', '550 000 + 250 000 = 800 000', '800 000', 'admin@gmail.com', '2024-08-10 15:38:28', '2024-08-10 15:38:28'),
(54, 1, 29, 'To\'lov', '', '150 000', 'Naqt', 'edwe', '800 000 + 150 000 = 950 000', '950 000', 'admin@gmail.com', '2024-08-10 15:39:04', '2024-08-10 15:39:04'),
(55, 1, 29, 'To\'lov', '', '250 000', 'Plastik', 'edwe', '950 000 + 250 000 = 1 200 000', '1 200 000', 'admin@gmail.com', '2024-08-10 15:39:04', '2024-08-10 15:39:04'),
(56, 1, 29, 'To\'lov', '', '150 000', 'Naqt', 'edwe', '1 200 000 + 150 000 = 1 350 000', '1 350 000', 'admin@gmail.com', '2024-08-10 15:40:14', '2024-08-10 15:40:14'),
(57, 1, 29, 'To\'lov', '', '250 000', 'Plastik', 'edwe', '1 350 000 + 250 000 = 1 600 000', '1 600 000', 'admin@gmail.com', '2024-08-10 15:40:14', '2024-08-10 15:40:14'),
(58, 1, 29, 'To\'lov', '', '300 000', 'Naqt', 'dsfdf', '1 600 000 + 300 000 = 1 900 000', '1 900 000', 'admin@gmail.com', '2024-08-10 15:41:18', '2024-08-10 15:41:18'),
(59, 1, 29, 'To\'lov', '', '200 000', 'Plastik', 'easdsa', '1 900 000 + 200 000 = 2 100 000', '2 100 000', 'admin@gmail.com', '2024-08-10 15:41:35', '2024-08-10 15:41:35'),
(60, 1, 29, 'To\'lov', '', '15 000', 'Naqt', 'sdf', '2 100 000 + 15 000 = 2 115 000', '2 115 000', 'admin@gmail.com', '2024-08-10 15:42:38', '2024-08-10 15:42:38'),
(61, 1, 29, 'To\'lov', '', '25 000', 'Plastik', 'sdf', '2 115 000 + 25 000 = 2 140 000', '2 140 000', 'admin@gmail.com', '2024-08-10 15:42:38', '2024-08-10 15:42:38'),
(62, 1, 29, 'Guruhga qo\'shildi', 'HANGIL', '600 000', '-', 'ssss', '2 140 000 - 600 000 = 1 540 000', '1 540 000', 'admin@gmail.com', '2024-08-10 16:57:03', '2024-08-10 16:57:03'),
(63, 1, 28, 'Guruhga qo\'shildi', 'HANGIL', '600 000', '-', 'ssss', '0 - 600 000 = -600 000', '-600 000', 'admin@gmail.com', '2024-08-10 16:57:18', '2024-08-10 16:57:18'),
(64, 1, 27, 'Guruhga qo\'shildi', 'HANGIL', '600 000', '-', 'ssss', '0 - 600 000 = -600 000', '-600 000', 'admin@gmail.com', '2024-08-10 16:57:27', '2024-08-10 16:57:27'),
(65, 1, 26, 'Guruhga qo\'shildi', 'HANGIL', '600 000', '-', 'sss', '0 - 600 000 = -600 000', '-600 000', 'admin@gmail.com', '2024-08-10 16:57:37', '2024-08-10 16:57:37'),
(66, 1, 26, 'To\'lov', '', '350 000', 'Naqt', 'sssss', '-600 000 + 350 000 = -250 000', '-250 000', 'admin@gmail.com', '2024-08-10 16:57:56', '2024-08-10 16:57:56'),
(67, 1, 26, 'To\'lov', '', '250 000', 'Plastik', 'sssss', '-250 000 + 250 000 = 0', '0', 'admin@gmail.com', '2024-08-10 16:57:56', '2024-08-10 16:57:56'),
(68, 1, 26, 'Chegirma', 'HANGIL', '50 000', ' ', '30000', '0 + 50 000 = 50 000', '50 000', 'admin@gmail.com', '2024-08-10 16:58:09', '2024-08-10 16:58:09'),
(69, 1, 28, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 17:24:25', '2024-08-10 17:24:25'),
(70, 1, 27, 'Ma`lumotlar yangilandi', '-', '-', '-', '-', '-', '-', 'admin@gmail.com', '2024-08-10 17:24:40', '2024-08-10 17:24:40'),
(71, 1, 27, 'Chegirma', 'HANGIL', '300 000', ' ', 'ds', '-600 000 + 300 000 = -300 000', '-300 000', 'admin@gmail.com', '2024-08-10 17:29:55', '2024-08-10 17:29:55'),
(72, 1, 28, 'Guruhdan o\'chirildi', 'HANGIL', '600 000', '-', 'test', '-600 000 + 600 000 = 0', '0', 'admin@gmail.com', '2024-08-10 17:39:08', '2024-08-10 17:39:08'),
(73, 1, 28, 'Jarima', 'HANGIL', '0', '-', 'Guruhdan o\'chirilganlik uchun jarima', '0 - 0 = 0', '0', 'admin@gmail.com', '2024-08-10 17:39:08', '2024-08-10 17:39:08'),
(74, 1, 27, 'To\'lov', 'HANGIL', '150 000', 'Naqt', 'aefsef', '-300 000 + 150 000 = -150 000', '-150 000', 'admin@gmail.com', '2024-08-10 17:42:00', '2024-08-10 17:42:00'),
(75, 1, 27, 'To\'lov', 'HANGIL', '50 000', 'Plastik', 'aefsef', '-150 000 + 50 000 = -100 000', '-100 000', 'admin@gmail.com', '2024-08-10 17:42:00', '2024-08-10 17:42:00'),
(76, 1, 29, 'Chegirma', 'HANGIL', '15 000', ' ', '3wtfwesgf', '1 540 000 + 15 000 = 1 555 000', '1 555 000', 'admin@gmail.com', '2024-08-10 17:44:49', '2024-08-10 17:44:49'),
(77, 1, 29, 'Guruhga qo\'shildi', 'HANGIL 2', '600 000', '-', 'Eski guruhdan ko\'chirildi', '1 555 000 - 600 000 = 955 000', '955 000', 'admin@gmail.com', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(78, 1, 27, 'Guruhga qo\'shildi', 'HANGIL 2', '600 000', '-', 'Eski guruhdan ko\'chirildi', '-100 000 - 600 000 = -700 000', '-700 000', 'admin@gmail.com', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(79, 1, 26, 'Guruhga qo\'shildi', 'HANGIL 2', '600 000', '-', 'Eski guruhdan ko\'chirildi', '50 000 - 600 000 = -550 000', '-550 000', 'admin@gmail.com', '2024-08-10 17:54:12', '2024-08-10 17:54:12'),
(80, 1, 29, 'Eslatma qoldirildi', '-', '-', '-', 'test', '-', '-', 'admin@gmail.com', '2024-08-10 17:57:38', '2024-08-10 17:57:38'),
(81, 1, 29, 'Payme', 'HANGIL', '10000', 'Payme', 'Payme orqali tulov', '955 000 + 10 000 = 965 000', '965 000', 'Payme', '2024-08-14 11:16:40', '2024-08-14 11:16:40'),
(82, 1, 29, 'Payme', 'HANGIL', '10000', 'Payme', 'Payme orqali tulov', '965 000 + 10 000 = 975 000', '975 000', 'Payme', '2024-08-14 11:27:37', '2024-08-14 11:27:37'),
(83, 1, 29, 'Payme', 'HANGIL', '10000', 'Payme', 'Payme orqali tulov', '965 000 + 10 000 = 975 000', '975 000', 'Payme', '2024-08-14 11:32:20', '2024-08-14 11:32:20'),
(84, 1, 29, 'Payme', 'HANGIL', '10000', 'Payme', 'Payme orqali tulov', '965 000 + 10 000 = 975 000', '975 000', 'Payme', '2024-08-14 11:33:55', '2024-08-14 11:33:55'),
(85, 1, 29, 'Payme', 'HANGIL', '10000', 'Payme', 'Payme orqali tulov', '975 000 + 10 000 = 985 000', '985 000', 'Payme', '2024-08-14 11:37:43', '2024-08-14 11:37:43'),
(86, 1, 29, 'Payme', 'HANGIL', '10000', 'Payme', 'Payme orqali tulov', '985 000 + 10 000 = 995 000', '995 000', 'Payme', '2024-08-14 11:39:19', '2024-08-14 11:39:19'),
(87, 1, 29, 'Payme', 'HANGIL', '10000', 'Payme', 'Payme orqali tulov', '995 000 + 10 000 = 1 005 000', '1 005 000', 'Payme', '2024-08-14 11:40:45', '2024-08-14 11:40:45'),
(88, 1, 27, 'Payme', 'HANGIL 2', '100000', 'Payme', 'Payme orqali tulov', '-700 000 + 100 000 = -600 000', '-600 000', 'Payme', '2024-08-14 11:46:05', '2024-08-14 11:46:05'),
(89, 1, 27, 'Payme', 'HANGIL 2', '100000', 'Payme', 'Payme orqali tulov', '-600 000 + 100 000 = -500 000', '-500 000', 'Payme', '2024-08-14 11:55:05', '2024-08-14 11:55:05'),
(90, 1, 27, 'Payme', 'HANGIL 2', '100000', 'Payme', 'Payme orqali tulov', '-500 000 + 100 000 = -400 000', '-400 000', 'Payme', '2024-08-14 11:55:38', '2024-08-14 11:55:38'),
(91, 1, 27, 'Payme', 'HANGIL 2', '100000', 'Payme', 'Payme orqali tulov', '-400 000 + 100 000 = -300 000', '-300 000', 'Payme', '2024-08-14 11:58:10', '2024-08-14 11:58:10'),
(92, 1, 27, 'Payme Bekor qilindi', 'HANGIL 2', '100000', 'Payme Cancel', 'Payme orqali tulov bekor qilindi.', '-300 000 - 100 000 = -400 000', '-400 000', 'Payme', '2024-08-14 11:58:38', '2024-08-14 11:58:38'),
(93, 1, 27, 'Payme', 'HANGIL 2', '100000', 'Payme', 'Payme orqali tulov', '-400 000 + 100 000 = -300 000', '-300 000', 'Payme', '2024-08-14 11:59:26', '2024-08-14 11:59:26'),
(94, 1, 27, 'Payme Bekor qilindi', 'HANGIL 2', '100000', 'Payme Cancel', 'Payme orqali tulov bekor qilindi.', '-300 000 - 100 000 = -400 000', '-400 000', 'Payme', '2024-08-14 11:59:38', '2024-08-14 11:59:38'),
(95, 1, 27, 'Payme', 'HANGIL 2', '100000', 'Payme', 'Payme orqali tulov', '-400 000 + 100 000 = -300 000', '-300 000', 'Payme', '2024-08-14 11:59:55', '2024-08-14 11:59:55'),
(96, 1, 27, 'Payme Bekor qilindi', 'HANGIL 2', '100000', 'Payme Cancel', 'Payme orqali tulov bekor qilindi.', '-300 000 - 100 000 = -400 000', '-400 000', 'Payme', '2024-08-14 12:00:06', '2024-08-14 12:00:06');

-- --------------------------------------------------------

--
-- Структура таблицы `user_paymarts`
--

CREATE TABLE `user_paymarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `summa` int(11) NOT NULL,
  `tulov_type` varchar(255) NOT NULL,
  `guruh` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `meneger` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_paymarts`
--

INSERT INTO `user_paymarts` (`id`, `markaz_id`, `user_id`, `summa`, `tulov_type`, `guruh`, `comment`, `meneger`, `created_at`, `updated_at`) VALUES
(1, 1, 29, 150000, 'Naqt', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:36:44', '2024-08-10 15:36:44'),
(2, 1, 29, 250000, 'Plastik', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:36:44', '2024-08-10 15:36:44'),
(3, 1, 29, 150000, 'Naqt', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:38:28', '2024-08-10 15:38:28'),
(4, 1, 29, 250000, 'Plastik', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:38:28', '2024-08-10 15:38:28'),
(5, 1, 29, 150000, 'Naqt', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:39:04', '2024-08-10 15:39:04'),
(6, 1, 29, 250000, 'Plastik', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:39:04', '2024-08-10 15:39:04'),
(7, 1, 29, 150000, 'Naqt', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:40:14', '2024-08-10 15:40:14'),
(8, 1, 29, 250000, 'Plastik', 'NULL', 'edwe', 'admin@gmail.com', '2024-08-10 15:40:14', '2024-08-10 15:40:14'),
(9, 1, 29, 300000, 'Naqt', 'NULL', 'dsfdf', 'admin@gmail.com', '2024-08-10 15:41:18', '2024-08-10 15:41:18'),
(10, 1, 29, 200000, 'Plastik', 'NULL', 'easdsa', 'admin@gmail.com', '2024-08-10 15:41:35', '2024-08-10 15:41:35'),
(11, 1, 29, 15000, 'Naqt', 'NULL', 'sdf', 'admin@gmail.com', '2024-08-10 15:42:38', '2024-08-10 15:42:38'),
(12, 1, 29, 25000, 'Plastik', 'NULL', 'sdf', 'admin@gmail.com', '2024-08-10 15:42:38', '2024-08-10 15:42:38'),
(13, 1, 26, 350000, 'Naqt', 'NULL', 'sssss', 'admin@gmail.com', '2024-08-10 16:57:56', '2024-08-10 16:57:56'),
(14, 1, 26, 250000, 'Plastik', 'NULL', 'sssss', 'admin@gmail.com', '2024-08-10 16:57:56', '2024-08-10 16:57:56'),
(15, 1, 26, 50000, 'Chegirma', '1', '30000', 'admin@gmail.com', '2024-08-10 16:58:09', '2024-08-10 16:58:09'),
(16, 1, 27, 300000, 'Chegirma', '1', 'ds', 'admin@gmail.com', '2024-08-10 17:29:55', '2024-08-10 17:29:55'),
(17, 1, 27, 150000, 'Naqt', '1', 'aefsef', 'admin@gmail.com', '2024-08-10 17:42:00', '2024-08-10 17:42:00'),
(18, 1, 27, 50000, 'Plastik', '1', 'aefsef', 'admin@gmail.com', '2024-08-10 17:42:00', '2024-08-10 17:42:00'),
(19, 1, 29, 15000, 'Chegirma', '1', '3wtfwesgf', 'admin@gmail.com', '2024-08-10 17:44:49', '2024-08-10 17:44:49'),
(20, 1, 29, 10000, 'Payme', '1', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:16:40', '2024-08-14 11:16:40'),
(21, 1, 29, 10000, 'Payme', '1', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:33:55', '2024-08-14 11:33:55'),
(22, 1, 29, 10000, 'Payme', '1', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:37:44', '2024-08-14 11:37:44'),
(23, 1, 29, 10000, 'Payme', '1', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:39:19', '2024-08-14 11:39:19'),
(24, 1, 29, 10000, 'Payme', '1', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:40:45', '2024-08-14 11:40:45'),
(25, 1, 27, 100000, 'Payme', '2', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:46:05', '2024-08-14 11:46:05'),
(26, 1, 27, 100000, 'Payme', '2', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:55:05', '2024-08-14 11:55:05'),
(27, 1, 27, 100000, 'Payme', '2', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:55:38', '2024-08-14 11:55:38'),
(28, 1, 27, 100000, 'Payme', '2', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:58:10', '2024-08-14 11:58:10'),
(29, 1, 27, 100000, 'Payme Cancel', '2', 'Payme orqali to\'lov bekor qilindi.', 'Payme', '2024-08-14 11:58:38', '2024-08-14 11:58:38'),
(30, 1, 27, 100000, 'Payme', '2', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:59:26', '2024-08-14 11:59:26'),
(31, 1, 27, 100000, 'Payme Cancel', '2', 'Payme orqali to\'lov bekor qilindi.', 'Payme', '2024-08-14 11:59:38', '2024-08-14 11:59:38'),
(32, 1, 27, 100000, 'Payme', '2', 'Payme orqali to\'lov', 'Payme', '2024-08-14 11:59:55', '2024-08-14 11:59:55'),
(33, 1, 27, 100000, 'Payme Cancel', '2', 'Payme orqali to\'lov bekor qilindi.', 'Payme', '2024-08-14 12:00:06', '2024-08-14 12:00:06');

-- --------------------------------------------------------

--
-- Структура таблицы `user_tests`
--

CREATE TABLE `user_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `markaz_id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `ball` int(11) NOT NULL,
  `urinish` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_tests`
--

INSERT INTO `user_tests` (`id`, `markaz_id`, `cours_id`, `user_id`, `count`, `ball`, `urinish`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 29, 15, 30, 3, '2024-08-11 04:11:49', '2024-08-11 04:25:12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Индексы таблицы `dam_olishes`
--
ALTER TABLE `dam_olishes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `davomats`
--
ALTER TABLE `davomats`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grops`
--
ALTER TABLE `grops`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grops_times`
--
ALTER TABLE `grops_times`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Индексы таблицы `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kassas`
--
ALTER TABLE `kassas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kassa_kirim_chiqims`
--
ALTER TABLE `kassa_kirim_chiqims`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markazs`
--
ALTER TABLE `markazs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_addres`
--
ALTER TABLE `markaz_addres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_balans`
--
ALTER TABLE `markaz_balans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_cours`
--
ALTER TABLE `markaz_cours`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_cours_tests`
--
ALTER TABLE `markaz_cours_tests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_cours_videos`
--
ALTER TABLE `markaz_cours_videos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_hodim_statistkas`
--
ALTER TABLE `markaz_hodim_statistkas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_ish_haqis`
--
ALTER TABLE `markaz_ish_haqis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_lessen_times`
--
ALTER TABLE `markaz_lessen_times`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_ogohliks`
--
ALTER TABLE `markaz_ogohliks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_paymarts`
--
ALTER TABLE `markaz_paymarts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_rooms`
--
ALTER TABLE `markaz_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_send_messages`
--
ALTER TABLE `markaz_send_messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_smms`
--
ALTER TABLE `markaz_smms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_sms_pakets`
--
ALTER TABLE `markaz_sms_pakets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `markaz_sms_settings`
--
ALTER TABLE `markaz_sms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `user_balans`
--
ALTER TABLE `user_balans`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_eslatmas`
--
ALTER TABLE `user_eslatmas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_histories`
--
ALTER TABLE `user_histories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_paymarts`
--
ALTER TABLE `user_paymarts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_tests`
--
ALTER TABLE `user_tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dam_olishes`
--
ALTER TABLE `dam_olishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `davomats`
--
ALTER TABLE `davomats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `grops`
--
ALTER TABLE `grops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `grops_times`
--
ALTER TABLE `grops_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT для таблицы `kassas`
--
ALTER TABLE `kassas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `kassa_kirim_chiqims`
--
ALTER TABLE `kassa_kirim_chiqims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `markazs`
--
ALTER TABLE `markazs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `markaz_addres`
--
ALTER TABLE `markaz_addres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `markaz_balans`
--
ALTER TABLE `markaz_balans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `markaz_cours`
--
ALTER TABLE `markaz_cours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `markaz_cours_tests`
--
ALTER TABLE `markaz_cours_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `markaz_cours_videos`
--
ALTER TABLE `markaz_cours_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `markaz_hodim_statistkas`
--
ALTER TABLE `markaz_hodim_statistkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `markaz_ish_haqis`
--
ALTER TABLE `markaz_ish_haqis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `markaz_lessen_times`
--
ALTER TABLE `markaz_lessen_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `markaz_ogohliks`
--
ALTER TABLE `markaz_ogohliks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `markaz_paymarts`
--
ALTER TABLE `markaz_paymarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `markaz_rooms`
--
ALTER TABLE `markaz_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `markaz_send_messages`
--
ALTER TABLE `markaz_send_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `markaz_smms`
--
ALTER TABLE `markaz_smms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `markaz_sms_pakets`
--
ALTER TABLE `markaz_sms_pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `markaz_sms_settings`
--
ALTER TABLE `markaz_sms_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблицы `user_balans`
--
ALTER TABLE `user_balans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `user_eslatmas`
--
ALTER TABLE `user_eslatmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user_histories`
--
ALTER TABLE `user_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT для таблицы `user_paymarts`
--
ALTER TABLE `user_paymarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `user_tests`
--
ALTER TABLE `user_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
