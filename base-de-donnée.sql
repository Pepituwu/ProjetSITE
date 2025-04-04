CREATE DATABASE lakaka ;
use lakaka ;

CREATE TABLE Article(
    Id int AUTO_INCREMENT PRIMARY KEY ,
    Image varchar(200), 
    Description varchar(200) ,
    Prix int ,
    Titre varchar(100) ,
    Sponsorisé boolean
);

CREATE TABLE usr(
    Id int AUTO_INCREMENT PRIMARY KEY ,
    Pseudo varchar(25), 
    MDP varchar(50) ,
    Crédits int 
);