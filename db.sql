CREATE DATABASE lakaka ;
use lakaka ;

CREATE TABLE article(
    id int AUTO_INCREMENT PRIMARY KEY ,
    description varchar(200) ,
    prix int ,
    image varchar(200),
    titre varchar(100) ,
    sponsorise boolean
);

CREATE TABLE usr(
    id int AUTO_INCREMENT PRIMARY KEY ,
    pseudo varchar(25), 
    mdp varchar(50) ,
    crédits int 
);
