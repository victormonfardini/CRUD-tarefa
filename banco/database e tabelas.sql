CREATE DATABASE sitetarefa;

Create table usuarios(
id Int UNSIGNED NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
Primary Key (id));

Create table tarefa(
id Int UNSIGNED NOT NULL AUTO_INCREMENT,
nome Varchar(40),
descricao text,
codigo int(10),
arquivo BLOB,
Primary Key (id));
