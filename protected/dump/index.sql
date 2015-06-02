
CREATE TABLE IF NOT EXISTS `domain_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(128) NOT NULL,
  `last_sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `can_send_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


-- --------------------------------------------------------

--
-- Структура таблицы `letter`
--

CREATE TABLE IF NOT EXISTS `letter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `body` text NOT NULL,
  `from_email` varchar(256) NOT NULL,
  `subscriber_id` int(10) unsigned NOT NULL,
  `status` enum('waiting','success') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriber_id` (`subscriber_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;


-- --------------------------------------------------------

--
-- Структура таблицы `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `domain_history_id` int(10) unsigned NOT NULL,
  `status` enum('active','not_exist','unsubscribed') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `domain_history_id` (`domain_history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `letter`
--
ALTER TABLE `letter`
  ADD CONSTRAINT `letter_ibfk_1` FOREIGN KEY (`subscriber_id`) REFERENCES `subscriber` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subscriber`
--
ALTER TABLE `subscriber`
  ADD CONSTRAINT `subscriber_ibfk_1` FOREIGN KEY (`domain_history_id`) REFERENCES `domain_history` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
