CREATE TABLE users (
	userID INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	password VARCHAR(40) NOT NULL,
	name VARCHAR(250),
	email VARCHAR(250) NOT NULL,
	signupDate TIMESTAMP NOT NULL,
	url VARCHAR(250),
	location VARCHAR(250),
	about TEXT,
	usertype VARCHAR(25) NOT NULL,
	active BOOLEAN NOT NULL
);