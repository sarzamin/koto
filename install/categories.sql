CREATE TABLE categories (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    category VARCHAR(250) NOT NULL,
    parentId INTEGER NOT NULL,
    accessLevel INTEGER NOT NULL,
    
    FOREIGN KEY (accessLevel) REFERENCES userTypes(id)
    
    
    );