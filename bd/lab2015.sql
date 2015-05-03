create database if not exists lab2015;
use lab2015;

create table interes (
	interes int auto_increment,
	descripcion varchar(100),
	primary key(interes)
);

create table pais (
	pais int auto_increment,
	nombre varchar(100),
	primary key(pais)
);

create table usuario (
	usuario int auto_increment,
	login varchar(100),
	clave varchar(100),
	nombre varchar(300),
	fecha_nac date,
	sexo varchar(1),
	pais int not null,
	primary key(usuario),
	foreign key(pais) references pais(pais)
);

create table usuario_interes (
	usuario int,
	interes int,
	primary key (usuario, interes),
	foreign key(usuario) references usuario(usuario),
	foreign key(interes) references interes(interes)
);



