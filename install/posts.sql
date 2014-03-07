CREATE TABLE posts(
	id BIGINT( 15 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    category INTEGER NOT NULL ,
    accessLevel INTEGER NOT NULL,
	postTitle VARCHAR( 250 ) ,
	postHead TEXT NOT NULL ,
	postBody TEXT,
	authorID INT( 12 ) NOT NULL  ,
	postCreateTime TIMESTAMP NOT NULL ,
	postModifyTime TIMESTAMP,
	active TINYINT(1),
	FOREIGN KEY (authorID) REFERENCES users( id ) ON DELETE CASCADE,
    FOREIGN KEY (category) REFERENCES categories( id ) ON DELETE CASCADE,
    FOREIGN KEY (accessLevel) REFERENCES userTypes(id)
    
);