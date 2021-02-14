create table hr_system.tm_job_categories(
	id integer auto_increment Primary key,
	title varchar(256) Not null
);

insert into hr_system.tm_job_categories(title) values ("Marketing");
insert into hr_system.tm_job_categories(title) values ("IT");
insert into hr_system.tm_job_categories(title) values ("Design");
insert into hr_system.tm_job_categories(title) values ("Accounting");
insert into hr_system.tm_job_categories(title) values ("Trade");
insert into hr_system.tm_job_categories(title) values ("Fashion&Beauty");