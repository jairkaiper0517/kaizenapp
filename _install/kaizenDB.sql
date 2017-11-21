-- Create database Kaizen1
-- use Kaizen1


-- TABLA USUARIOS
create table TblRol(
       id int primary key AUTO_INCREMENT,
       descripcion varchar (100) not null unique
);


insert into TblRol (descripcion) values ("Usuario");
        insert into TblRol (descripcion) values ("Administrador");


                Create table TblUsuarios(
                        id int primary key AUTO_INCREMENT,
                        nombre varchar (100)  not null,
                        correo varchar (100) not null unique,
                        contrasena varchar (100) not null,
                        imagen varchar (150) null,
                        token varchar (250) null,
                        rol int not null,
                        bProgreso int null,
                        foreign key (rol) references TblRol (id)
                );

                insert into TblUsuarios (nombre,correo,contrasena,rol) values ('Jairo','jairkaiper@hotmail.com','1234',2);

-- Tabla categorias para propositos internos y externos --

Create table TblTipoPropositos(
        id int primary key AUTO_INCREMENT,
        nombre varchar (100) not null
);

insert into TblTipoPropositos (nombre) values ("Interno");
        insert into TblTipoPropositos (nombre) values ("Externo");

                create table TblPropositos(
                        id int primary key AUTO_INCREMENT,
                        descripcion varchar (200),
                        tipo int not null,
                        foreign key (tipo) references TblTipoPropositos (id)
                );

-- PROPOSITOS INTERNOS
insert into TblPropositos (descripcion, tipo) values ("Demostrarme a mí mismo que puedo hacerlo", 1);
        insert into TblPropositos (descripcion, tipo) values ("Marcar la diferencia", 1);
                insert into TblPropositos (descripcion, tipo) values ("Me gusta hacer cosas difíciles", 1);
                        insert into TblPropositos (descripcion, tipo) values ("Crear algo que refleje mis valores", 1);
                                insert into TblPropositos (descripcion, tipo) values ("Mejorar mi visibilidad dentro de la empresa", 1);
                                        insert into TblPropositos (descripcion, tipo) values ("Satisfacción personal", 1);
                                                insert into TblPropositos (descripcion, tipo) values ("Demostrar mi valor", 1);
                                                        insert into TblPropositos (descripcion, tipo) values ("Cambiar el mundo", 1);
                                                                insert into TblPropositos (descripcion, tipo) values ("Hacer lo que me gusta", 1);
                                                                        insert into TblPropositos (descripcion, tipo) values ("Me aburro", 1);
                                                                                insert into TblPropositos (descripcion, tipo) values ("Me gusta crear", 1);
                                                                                        insert into TblPropositos (descripcion, tipo) values ("Generar sorpresa", 1);
                                                                                                insert into TblPropositos (descripcion, tipo) values ("Quiero probarme a mí mismo", 1);
                                                                                                        insert into TblPropositos (descripcion, tipo) values ("Mejorar mi currículum", 1);

-- PROPOSITOS EXTERNOS

insert into TblPropositos (descripcion, tipo) values ("Ser un buen ejemplo para otros", 2);
        insert into TblPropositos (descripcion, tipo) values ("Hacer algo que ayude a los demás", 2);
                insert into TblPropositos (descripcion, tipo) values ("Crear algo que guste a la gente", 2);
                        insert into TblPropositos (descripcion, tipo) values ("Mostrar al mundo que puedo innovar", 2);
                                insert into TblPropositos (descripcion, tipo) values ("Me gusta sorprender a los demás", 2);
                                        insert into TblPropositos (descripcion, tipo) values ("Ayudar a mi familia", 2);
                                                insert into TblPropositos (descripcion, tipo) values ("Ayudar a mi comunidad", 2);
                                                        insert into TblPropositos (descripcion, tipo) values ("Mejorar mi visibilidad fuera de la empresa", 2);
                                                                insert into TblPropositos (descripcion, tipo) values ("Generar nuevos ingresos", 2);
                                                                        insert into TblPropositos (descripcion, tipo) values ("Quiero demostrarle algo a mi familia", 2);
                                                                                insert into TblPropositos (descripcion, tipo) values ("Quiero demostrarle algo a alguien más", 2);

                                                                                        Create table TblPublicaciones(
                                                                                                id int primary key AUTO_INCREMENT,
                                                                                                autor int not null,
                                                                                                titulo varchar (100)  not null unique,
                                                                                                contenido text not null,
                                                                                                fecha varchar (100) not null,
                                                                                                imagen varchar (200) not null,
                                                                                                foreign key (autor) references TblUsuarios (id)
                                                                                        )

                                                                                        Create table TblGlosario(
                                                                                                id int primary key AUTO_INCREMENT,
                                                                                                termino varchar (200) not null unique,
                                                                                                definicion text not null
                                                                                        );


-- =========== TABLAS PARA EL KANBAN ==============

Create table TblTo_Do(
        id int primary key AUTO_INCREMENT,
        tarea varchar (200) not null,
        usuario int null,
        foreign key (usuario) references TblUsuarios (id)
);

create table TblDoing(
        id int primary key,
        tarea varchar (200) not null,
        usuario int null,
        foreign key (usuario) references TblUsuarios (id)
);

create table TblDone(
        id int primary key,
        tarea varchar (200) not null,
        usuario int null,
        foreign key (usuario) references TblUsuarios (id)
);


create table TblHansei(
        id int primary key,
        tarea varchar (200) not null,
        usuario int null,
        foreign key (usuario) references TblUsuarios (id)
);


-- ============================ PROCEDIMIENTOS ====================== //

delimiter $$
CREATE PROCEDURE SP_IniciarSesion(
        IN _Correo VARCHAR (100),
        IN _Contrasena VARCHAR (100)
)

begin

Select * from TblUsuarios where correo = _Correo and contrasena = _Contrasena;

end $$
delimiter $$

call SP_IniciarSesion ('jairo.caicedo@perceptio.net','123');


-- registrar usuario --

delimiter $$
CREATE PROCEDURE SP_RegistrarUsuario(

        IN _Nombre VARCHAR(100),
        IN _Correo VARCHAR(100),
        IN _Contrasena VARCHAR(100),
        IN _Rol int
)

begin
declare _resultado int;
declare _respuesta int;

select COUNT(*) into _resultado from TblUsuarios where correo = _Correo;

if (_resultado  = 1) then

SELECT 0 AS 'respuesta';

else

INSERT INTO TblUsuarios (nombre, correo,contrasena, rol) VALUES (_Nombre, _Correo,_Contrasena, _Rol);

SELECT 1 AS 'respuesta';

end if;

end$$

delimiter $$


delimiter $$
CREATE PROCEDURE SP_RegistrarTarea(

        IN _Tarea VARCHAR(200)

)

begin

INSERT INTO TblTo_Do (tarea) VALUES (_Tarea);

end$$

delimiter $$

delimiter $$
CREATE PROCEDURE SP_RegistrarToDo(

        IN _Id int,
        IN _Tarea VARCHAR(200)

)

begin

INSERT INTO TblTo_Do (id, tarea) VALUES (_Id, _Tarea);

end$$

delimiter $$

CALL SP_RegistrarToDo('prueba')


delimiter $$
CREATE PROCEDURE SP_RegistrarDoing(

        IN _Id int,
        IN _Tarea VARCHAR(200)

)

begin

INSERT INTO TblDoing (id, tarea) VALUES (_Id,_Tarea);

end$$

delimiter $$


delimiter $$
CREATE PROCEDURE SP_RegistrarDone(

        IN _Id int,
        IN _Tarea VARCHAR(200)

)

begin

INSERT INTO TblDone (id, tarea) VALUES (_Id,_Tarea);

end$$

delimiter $$



delimiter $$
CREATE PROCEDURE SP_RegistrarHansei (

        IN _Id int,
        IN _Tarea VARCHAR(200)

)

begin

INSERT INTO TblHansei (id, tarea) VALUES (_Id,_Tarea);

end$$

delimiter $$




delimiter $$
CREATE PROCEDURE SP_EliminarToDo(

        IN _id int

)

begin

DELETE from TblTo_Do where id=_id;

end$$

delimiter $$


delimiter $$
CREATE PROCEDURE SP_EliminarDoing(

        IN _id int

)

begin

DELETE from TblDoing where id=_id;

end$$

delimiter $$


delimiter $$
CREATE PROCEDURE SP_EliminarDone(

        IN _id int

)

begin

DELETE from TblDone where id=_id;

end$$

delimiter $$


delimiter $$
CREATE PROCEDURE SP_EliminarHansei(

        IN _id int

)

begin

DELETE from TblHansei where id=_id;

end$$

delimiter $$
