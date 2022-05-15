CREATE DATABASE IF NOT EXISTS becas_sociales;

use becas_sociales; 

 CREATE TABLE IF NOT EXISTS Alumnos
 (
 Id int primary key not null auto_increment,
 Rut varchar(12) unique not null,
 Nombre varchar(25) not null,
 Apellido Varchar(25) not null,
 Edad int,
 Direccion varchar(50),
 Correo varchar(50) not null,
 Contrasena varchar(25) not null
 );
 
 CREATE TABLE IF NOT EXISTS Beca
 (
 Id_beca int not null,
 Nombre_de_beca varchar(25) not null
 );

 CREATE TABLE IF NOT EXISTS Administrador
 (
 ID int primary key not null auto_increment,
 Rut varchar(12) unique not null,
 Nombre varchar(25) not null,
 Apellido varchar(25) not null,
 Correo varchar(50) not null,
 Contrasena varchar(25) not null
 );
 
INSERT INTO Alumnos (Rut, Nombre, Apellido, Edad, Direccion, Correo, Contrasena) 
VALUES 
('18345678-9', 'Nicolas', 'Cortes', 25, 'avenida francia','nico16.m@hotmail.com','nico1697'), 
('19654789-0', 'Eugenio', 'Chandia', 23, 'calle lautaro','eugenio.chandia@outlook.com','eu1ge9ni9o9'),
('20451266-6', 'Javier', 'Rodriguez', 22, 'calle lautaro','javier2000zz@gmail.com','javier160100'),
('19124556-7', 'Martin', 'Morales', 24, 'calle lautaro','martoles.q@yahoo.com','martinmorales1998'),  
('21004215-4', 'Erick', 'Quiroz', 18, 'avenida 03','elerick02.ch@gmail.com','0erick2');

INSERT INTO Beca(Id_beca, Nombre_de_beca) 
VALUES 
(0001,'Beca 1'),
(0002,'Beca 2'),
(0003,'Beca 3');

INSERT INTO Administrador (Rut, Nombre, Apellido, Correo, Contrasena) 
VALUES 
('12345678-9', 'Rene', 'Urbina', 'rurbina@cartagena.cl','admin'), 
('98765432-1', 'Carla', 'Munoz', 'cmunoz@cartagena.cl','root'), 
('85296374-1', 'Alonso', 'Astudillo', 'aastudillo@cartagena.cl','master');