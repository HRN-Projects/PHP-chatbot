-- Tables to be created - 1. Messeges, 2. Blocked Users --

CREATE TABLE IF NOT EXISTS `#__chatter_msgs`(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid INT(10) NOT NULL,
	msgs TEXT,
	datime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `#__chatter_block_usr`(
	id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid INT(10) NOT NULL,
	datime TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);