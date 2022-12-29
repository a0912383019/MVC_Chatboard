CREATE DATABASE chatboard;

CREATE TABLE `comments` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `nickname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
 `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `createtime` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `reply` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `nickname` varchar(20) NOT NULL,
 `content` text NOT NULL,
 `createtime` datetime NOT NULL,
 `rid` int(11) unsigned NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `user` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `nickname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
 `account` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
 `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`),
 KEY `idx_nn` (`nickname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO comments (nickname,content,createtime) VALUES ('Tony','星期五加油',now());
INSERT INTO reply (nickname,content,createtime,rid) VALUES ('Julia','給我一杯咖啡',now(),1);
