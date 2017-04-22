-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 23 2017 г., 01:03
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img` text NOT NULL,
  `short` text NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `img`, `short`, `content`, `author`, `category`) VALUES
(14, 'Настройка блога', 'manual.jpg', 'Руководство пользователя по настройке сайта.', '[t]1.Авторизация Администратора[/t]\r\nИмя пользователя по умолчанию [b][i]admin[/i][/b], пароль [b][i]root[/i][/b]. После авторизации перейдите в Админ-Панель использую пункт меню [i]Управление[/i] слева. И при желании смените пароль Администратора в разделе [i]Сменить пароль[/i] , в который можно перейти использую меню администратора сверху.\r\n\r\n[t]2. Настройка блога[/t]\r\nВ разделе [i]Настройки блога[/i] измените Название сайта, ее описание и другие важные для сайта данные такие как мета-теги. Замените картинку [i]background.jpg[/i] в директории [i]img[/i] > [i]blog[/i], чтобы сменить картинку шапки блога.\r\n\r\n[t]3. Удаление[/t]\r\nУдалите все статьи из базы данных, используя тот же меню сверху.\r\n\r\n[t]4. Добавьте[/t]\r\nОпубликуйте свою первую статью используя раздел [i]Добавить[/i]. \r\n\r\nВ статьях используется разметка в формате [bb-код], полный лист посмотреть вы можете посмотреть в разделе [i]Настройки статей[/i], там же есть возможность добавлять новые тэги для разметки. \r\n\r\nВ этом же разделе вы можете добавлять в базу данных новые категории, чтобы открыть возможность выбрать их при добавлении новых статей, из [i]dropdown[/i] меню справа.', 'admin', 'Образование');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Life'),
(2, 'IT'),
(3, 'Technology'),
(4, 'Economy'),
(5, 'Другое'),
(6, 'Образование');

-- --------------------------------------------------------

--
-- Структура таблицы `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `bgc` text NOT NULL,
  `menuBg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `config`
--

INSERT INTO `config` (`id`, `title`, `description`, `img`, `bgc`, `menuBg`) VALUES
(1, 'Название блога', 'Описание вашего блога', 'background.jpg', '#313748', '#0e1016');

-- --------------------------------------------------------

--
-- Структура таблицы `metaconfig`
--

CREATE TABLE `metaconfig` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `metaconfig`
--

INSERT INTO `metaconfig` (`id`, `title`, `author`, `email`, `description`, `keywords`) VALUES
(1, 'Название вашего блога', 'Мета-Автор', 'example@example.com', 'Мета-описание сайта', 'keyword1, keyword2, keyword3....');

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `[bb]` text NOT NULL,
  `<html>` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `[bb]`, `<html>`) VALUES
(1, '[t]', '<h2 class=\"subtitle\">'),
(2, '[/t]', '</h2>'),
(3, '[img]', '<img class=\"post_img\" src=\"'),
(4, '[/img]', '\">'),
(7, '[iframe]', '<iframe src=\"'),
(8, '[/iframe]', '\" frameborder=\"0\" allowfullscreen></iframe>'),
(10, '[b]', '<b>'),
(11, '[/b]', '</b>'),
(12, '[i]', '<i>'),
(13, '[/i]', '</i>');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `metaconfig`
--
ALTER TABLE `metaconfig`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `metaconfig`
--
ALTER TABLE `metaconfig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
