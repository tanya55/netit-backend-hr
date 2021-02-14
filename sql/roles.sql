create database hr_system;

create table hr_system.tm_roles (
	id INTEGER auto_increment PRIMARY KEY,
    title varchar(256) Not null
);

insert into hr_system.tm_roles(title) values ('HR');
insert into hr_system.tm_roles(title) values ('SUPER');
insert into hr_system.tm_roles(title) values ('EMPLOYER');
insert into hr_system.tm_roles(title) values ('EMPLOY');
