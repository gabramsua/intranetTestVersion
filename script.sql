DROP DATABASE IF EXISTS webCuisine;
CREATE DATABASE IF NOT EXISTS webCuisine
	CHARACTER SET latin1 COLLATE latin1_swedish_ci;

USE `webCuisine`;
show tables;

select * from new_feed;
select * from channelnew_feed;
select * from channel;
select * from userschannel;
		select * from Users;
select * from userstasks;
select * from Tasks;

select * from f_hours;				/*STATUS NULL=non read; 1=ACCEPTED; -1=REJECTED*/
select * from f_vacation;			/*STATUS NULL=non read; 1=ACCEPTED; -1=REJECTED*/
select * from f_expenses;			/*STATUS NULL=non read; 1=ACCEPTED; -1=REJECTED*/
select * from f_trip;				/*STATUS NULL=non read; 1=ACCEPTED; -1=REJECTED*/

insert into channel (name) values ("channel2");
insert into userschannel (login, name) values ('test', 'channel2');

select login, num_hours, date1, date2 from users_f_hours join f_hours on users_f_hours.id_form=f_hours.id;

select name_u, date1 AS 'Cuándo', place, name_congress, reasons from Users join users_f_trip on Users.login=users_f_trip.login join f_trip on users_f_trip.id_form=f_trip.id;

update f_trip set isread=0 where id=2;
update Users set login='gram1o' where id=8;
delete from users_f_vacation where id=7;
select * from new_feed order by date, time DESC;

insert into new_feed (id,date, time, title, content) values (1,"2016-05-11", "10:49", "Titulo1", "Contenido1");
insert into channel (name) values ("develop");
insert into channelnew_feed (name, id_new) values ("develop", 1);
insert into Tasks (title, content, who_create) values ('Titulo6','Contenido6','svenlogin');
insert into userstasks (login, id_task) values ('gram1i', 5);

insert into f_hours (num_hours, date1, date2) values (3, "2016-05-04", "2016-05-06");
insert into f_hours (num_hours, date1, date2) values (6, "2016-05-06", "2016-05-13");
insert into users_f_hours (login, id_form) values ("gram1i",2);
insert into f_vacation (date1, date2) values ("2016-06-01", "2016-06-03");
insert into users_f_vacations (login, id_form) values ("gram1i",1);
insert into f_expenses (company, date1,concept, amount) values ("McDonalds","2016-05-04","I was hungry", "10.29");
insert into users_f_expenses (login, id_form) values ("imar1i", 3);
insert into f_trip (date1, date2, place, name_congress, reasons) values ("2016-05-04","2016-05-04","Peine","AngularJS for Nerds","No tenía ni zorra de AngularJS");
insert into users_f_trip (login, id_form) values ("imar1i", 1);

update Users set rol="buo" where id=1;
update new_feed set id=4 where id=7;
update f_trip set type="trip"where id>0;


delete from Users where id=7;
select * from channelnew_feed;

/***************************NOTICIAS A LAS QUE TIENE ACCESO EL USUARIO X********************************************/
select Users.name_u, channel.name,channelnew_feed.id_new, new_feed.title, new_feed.content from Users 
	join userschannel on Users.login=userschannel.login 
    join channel on userschannel.name=channel.name
    join channelnew_feed on channel.name=channelnew_feed.name
    join new_feed on channelnew_feed.id_new=new_feed.id
    where Users.login="gram1i" group by id_new;
    
/***************************TAREAS DEL USUARIO X********************************************/
select users.name_u, tasks.title, tasks.content from Users
	join userstasks on users.login=userstasks.login
    join tasks on userstasks.id_task=tasks.id
    where name_u="Gabriel";

/***************************TODOS LOS FORMULARIOS DEL USUARIO X********************************************/
select name_u as 'QUIEN', num_hours as 'HORAS PEDIDAS', f_vacation.date1 as 'VACACIONES DESDE', f_vacation.date2 as 'VACACIONES HASTA'
 from Users, f_vacation, f_trip, f_expenses,f_hours/*, users_f_vacations,users_f_hours,users_f_expenses, users_f_trip*/
	/*join users_f_hours on users.login=users_f_hours.login
    join f_hours on users_f_hours.id_form=f_hours.id*/;
    
    
select name_u, users_f_hours.id_form as 'id hours', users_f_vacations.id_form as 'id vacations' 
from Users, users_f_hours, users_f_vacations where users.login="gram1i";



grant all on webCuisine.* to nacho @'192.168.30.106' identified by 'nacho';