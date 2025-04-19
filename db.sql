CREATE DATABASE lakaka ;
use lakaka ;

CREATE TABLE article(
    id int AUTO_INCREMENT PRIMARY KEY ,
    titre varchar(100),
    description varchar(200),
    prix int,
    image varchar(200),
    theme int,
    sponsorise boolean
);

CREATE TABLE usr(
    id int AUTO_INCREMENT PRIMARY KEY ,
    pseudo varchar(25), 
    mdp varchar(50) ,
    credits int 
);

INSERT INTO `article`(`titre`, `description`, `prix`, `image`, `theme`, `sponsorise`) 
VALUES 
(,'','','','','','')