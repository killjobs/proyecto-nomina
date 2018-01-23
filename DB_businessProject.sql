create database businessProject;
use businessProject;

create table Employee (
	noDocumento varchar(15),
	nombre1 varchar(50) not null,
	nombre2 varchar(50) null,
	apellido1 varchar(50) not null,
	apellido2 varchar(50) null,
	telefono varchar(12) null,
	celular varchar(15) null,
	correo varchar(50) not null,
	fecNacimiento Date,
	fecIngreso Date not null,
	fecRetiro Date  null,
	codCargo int(2) not null,
	totalLiquidacion double not null,
	PRIMARY KEY(noDocumento)
);



create table contacto (
	codContacto int(5) AUTO_INCREMENT,
	nombre varchar(50) not null,
	parentesco varchar(50) not null,
	telefono varchar(13) not null,
	noDocumento varchar(50) not null,
	PRIMARY KEY(codContacto)
);

create table cargos(
	codCargo int(3) AUTO_INCREMENT,
	nombreCargo varchar(50) not null,
	salario double not null,
	PRIMARY KEY(codCargo)
);

create table nomina (
	idNomina int(5) AUTO_INCREMENT,
	anioNomina int(4) not null,
	mesNomina int(2) not null,
	diasLaborados int(2) not null,
	diaDiurno int(2) not null,
	diaNocturno int(2) not null,
	diaDomDiurno int(2) not null,
	diaDomNocturno int(2) not null,
	diaDominical int(2) not null,
	noDocumento varchar(15) not null,
	esPrima int(2) not null,
	valorPrima double not null,
	cuentaAhorros varchar(80) not null,
	diaVacaciones int(2) not null,
	PRIMARY KEY (idNomina)
);



create table comision (
	idComision int(3) AUTO_INCREMENT,
	descripcion varchar(100) not null,
	valorComision double not null,
	idNomina int(5) not null,
	PRIMARY KEY(idComision)
);

create table novedad (
	idNovedad int(5) AUTO_INCREMENT,
	idNomina int(5) not null,
	cantDias varchar(2) not null,
	ruta varchar(255) not null,
	PRIMARY KEY(idNovedad)
);


ALTER TABLE contacto 
ADD FOREIGN KEY(noDocumento) REFERENCES Employee(noDocumento);

ALTER TABLE Employee
ADD FOREIGN KEY (codCargo) REFERENCES cargos(codCargo);

ALTER TABLE nomina
ADD FOREIGN KEY (noDocumento) REFERENCES Employee(noDocumento);

ALTER TABLE novedad
ADD FOREIGN KEY (idNomina) REFERENCES nomina(idNomina);

ALTER TABLE comision
ADD FOREIGN KEY (idNomina) REFERENCES nomina(idNomina);
