use ima_villa;

CREATE TABLE event_pic (
  eve_id int  PRIMARY KEY AUTO_INCREMENT,
  topic varchar(100),
  description varchar(150),
  image varchar(200),
  date date
);

CREATE TABLE admin (
  username varchar(100) DEFAULT NULL,
  password varchar(100) DEFAULT NULL
);
INSERT INTO admin VALUES ('admin','admin123');