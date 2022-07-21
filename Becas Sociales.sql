use becas_sociales; 
 
INSERT INTO alumno (rut, nombre, apellido, edad, direccion, correo, contrasena, id_beca, ubicacion_archivos) 
VALUES 
('18345678-9', 'Nicolas', 'Cortes', 25, 'avenida francia','nico16.m@hotmail.com','nico1697',0,'.\becas-sociales_back-end\archivos\NicolasCortes'), 
('19654789-0', 'Eugenio', 'Chandia', 23, 'calle lautaro','eugenio.chandia@outlook.com','eu1ge9ni9o9',0,'.\becas-sociales_back-end\archivos\EugenioChandia'),
('20451266-6', 'Javier', 'Rodriguez', 22, 'calle lautaro','javier2000zz@gmail.com','javier160100',0,'.\becas-sociales_back-end\archivos\JavierRodriguez'),
('19124556-7', 'Martin', 'Morales', 24, 'calle lautaro','martoles.q@yahoo.com','martinmorales1998',0,'.\becas-sociales_back-end\archivos\MartinMorales'),  
('21004215-4', 'Erick', 'Quiroz', 18, 'avenida 03','elerick02.ch@gmail.com','0erick2',0,'.\becas-sociales_back-end\archivos\ErickQuiroz');

INSERT INTO beca(id, nombre, descripcion, can_post) 
VALUES 
(0001,'Beca estudiante superior','descripcion 1', 0),
(0002,'Beca talento deportivo y/o artistico', 'descripcion 2', 0);

INSERT INTO administrador (rut, nombre, apellido, correo, contrasena) 
VALUES 
('12345678-9', 'Rene', 'Urbina', 'rurbina@cartagena.cl','admin'), 
('98765432-1', 'Carla', 'Munoz', 'cmunoz@cartagena.cl','root'), 
('85296374-1', 'Alonso', 'Astudillo', 'aastudillo@cartagena.cl','master');