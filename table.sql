CREATE TABLE member_info 
(
    id VARCHAR(50) NOT NULL,
    pw VARCHAR(50) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    date VARCHAR(70) NOT NULL
) ENGINE=INNODB default character set utf8 collate utf8_general_ci;