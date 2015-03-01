CREATE DATABASE IF NOT EXISTS `slim_db`;

CREATE user slim@localhost IDENTIFIED BY 'slim';
grant ALL on slim_db.* to slim@localhost;

use slim_db;

CREATE TABLE IF NOT EXISTS `sample` (
   `id` int(10) unsigned not null auto_increment,
   `title` varchar(255),
   `detail` text,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into sample values (null,'test','sample data');
