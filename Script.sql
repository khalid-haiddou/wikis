-- Create Database
CREATE DATABASE wikis;

-- Create Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255),
    Role ENUM ('author', 'admin') DEFAULT 'author'
);

-- Create Categories Table
CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

-- Create Wiki Table
CREATE TABLE wiki (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    description VARCHAR(100),
    content TEXT,
    creationDate DATETIME DEFAULT CURRENT_TIMESTAMP,
    updateDate DATETIME,
    authorID INT,
    categorieID INT,
    FOREIGN KEY (authorID) REFERENCES users(id),
    FOREIGN KEY (categorieID) REFERENCES categories(id)
);

-- Create Tags Table
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

-- Create Many-to-Many Relationship Table between Wiki and Tags
CREATE TABLE wiki_tags (
    wikiID INT,
    tagID INT,
    PRIMARY KEY (wikiID, tagID),
    FOREIGN KEY (wikiID) REFERENCES wiki(id),
    FOREIGN KEY (tagID) REFERENCES tags(id)
);
