create table hr_system.tb_job_offers(
	id integer auto_increment primary key,
    title varchar(256)			not null,
    information text   			not null
);

insert into hr_system.tb_job_offers(title, content) values ('Marketing Specialist', 'We surching Marketing specialist with two years experience');
insert into hr_system.tb_job_offers(title, content) values ('Marketing Specialist','We are looking for a Marketing intern');
insert into hr_system.tb_job_offers(title, content) values ('IT', 'We are looking for an IT specialist with 5 years of experience in PHP');
insert into hr_system.tb_job_offers(title, content) values ('IT', 'A company is looking to hire a JAVA programmer');
insert into hr_system.tb_job_offers(title, content) values ('Design', 'The company is looking to hire a Graphic designer');
insert into hr_system.tb_job_offers(title, content) values ('Accounting', 'We are looking for an Accountant with at least 2 years of experience');
insert into hr_system.tb_job_offers(title, content) values ('Trade', 'A company is looking to hire a Sales representative');
insert into hr_system.tb_job_offers(title, content) values ('Fashion&Beauty', 'We want to hire a Hairdresser');
insert into hr_system.tb_job_offers(title, content) values ('Fashion&Beauty', 'A beauty studio is looking for a Make-up artist');
insert into hr_system.tb_job_offers(title, content) values ('Design', 'We are looking for a Graphic designer with at least 3 years of experience');