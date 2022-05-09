CREATE DATABASE IF NOT EXISTS becas_sociales;

use becas_sociales; 

 CREATE TABLE IF NOT EXISTS Alumnos
 (
 Rut varchar(12) primary key not null,
 Nombre varchar(25) not null,
 Apellido Varchar(25) not null,
 Edad int,
 Direccion varchar(50)
 );
 
 CREATE TABLE IF NOT EXISTS Correo_Electronico
 (
 Nombre varchar(50) not null,
 Contrasena varchar(25) not null
 );
 
 CREATE TABLE IF NOT EXISTS Beca
 (
 Id_beca int not null,
 Nombre_de_beca varchar(25) not null
 );
 
INSERT INTO Alumnos (Rut, Nombre, Apellido, Edad, Direccion) 
VALUES 
('18345678-9', 'Nicolas', 'Cortes', 25, 'avenida francia'), 
('19654789-0', 'Eugenio', 'Chandia', 23, 'calle lautaro'),
('20451266-6', 'Javier', 'Rodriguez', 22, 'calle lautaro'),
('19124556-7', 'Martin', 'Morales', 24, 'calle lautaro'),  
('21004215-4', 'Erick', 'Quiroz', 18, 'avenida 03');

INSERT INTO Correo_Electronico (Nombre, Contrasena) 
VALUES 
('nico16.m@hotmail.com','nico1697'),
('eugenio.chandia@outlook.com','eu1ge9ni9o9'),
('javier2000zz@gmail.com','javier160100'),
('martoles.q@yahoo.com','martinmorales1998'),
('elerick02.ch@gmail.com','0erick2')
;

INSERT INTO Beca(Id_beca, Nombre_de_beca) 
VALUES 
(0001,'Beca 1'),
(0002,'Beca 2'),
(0003,'Beca 3')
;