create database projectsv21;

use projectsv21;

create table gamers(
	id int primary key not null auto_increment,
    nickname varchar(25),
    dd_mm_yyyy date,
    score int);
    
select * from gamers;

insert into gamers (nickname,dd_mm_yyyy,score) values ('Frederico Kiko Tesouro', '2018-06-07', 20);
insert into gamers (nickname,dd_mm_yyyy,score) values ('Zé Colméia', '2018-06-07', 20);
insert into gamers (nickname,dd_mm_yyyy,score) values ('Catatau', '2018-06-07', 20);