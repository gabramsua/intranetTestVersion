/*------------------------CREATE TABLE------------------------*/
CREATE TABLE webCuisine.Users (
  login VARCHAR(9) ,
  nameU VARCHAR(30) NOT NULL ,
  surnameU VARCHAR(30) NOT NULL ,
  lang VARCHAR(15) NOT NULL DEFAULT 'en',
  rol VARCHAR(15) NOT NULL DEFAULT 'user',
  photo VARCHAR(15),
  onboard Boolean not null /*DEFAULT 'false'*/,
  CONSTRAINT c1 PRIMARY KEY (login)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.Tasks (
  id Integer (3) auto_increment,
  title VARCHAR(20)not null,
  content VARCHAR(500),
  whoCreate VARCHAR(20) not null,
  CONSTRAINT c2 PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.News (
  id Integer(4) auto_increment ,
  dateN DATE NOT NULL default '2007-10-04 22:23:00' ,
  title VARCHAR(20) NOT NULL ,
  content VARCHAR(500) NOT NULL  ,
  whoCreate VARCHAR(9) NOT NULL,
  CONSTRAINT c3 PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.Channel (
  nameC VARCHAR(15) NOT NULL ,
  CONSTRAINT c4 PRIMARY KEY (nameC)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.FormHours (
  id int(9),
  typeF VARCHAR(9) NOT NULL ,
  readF int(1) default 0,
  numHours int(2)not null,
  date1 date,
  date2 date,
  CONSTRAINT c5 PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.FormVacations (
  id int(9),
  typeF VARCHAR(9) NOT NULL ,
  readF int(1) default 0,
  date1 date,
  date2 date,
  CONSTRAINT c6 PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.FormExpenses (
  id int(9),
  typeF VARCHAR(9) NOT NULL ,
  readF int(1) default 0,
  date1 date,
  company varchar(20),
  concept varchar(20),
  amount double,
  CONSTRAINT c7 PRIMARY KEY (id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.FormTrip (
  id int(9),
  typeF VARCHAR(9) NOT NULL ,
  readF int(1) default 0,
  date1 date,
  date2 date,
  place varchar(15),
  nameCongress varchar(20),
  reason varchar(150),
  CONSTRAINT c8 PRIMARY KEY (id)
)ENGINE=InnoDB;


/*------------------------CREATE INTERMEDIATES TABLES------------------------*/

CREATE TABLE webCuisine.UserChannel (
  login VARCHAR(9) ,
  nameC VARCHAR(15) NOT NULL ,
  CONSTRAINT c9 PRIMARY KEY (login, nameC)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.ChannelNews (
  nameC VARCHAR(15) NOT NULL ,
  id Integer(4) ,
  CONSTRAINT c10 PRIMARY KEY (nameC, id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.UsersTasks (
  login VARCHAR(9) ,
  id Integer (3) ,
  CONSTRAINT c11 PRIMARY KEY (login, id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.UserFormHours (
  login VARCHAR(9) ,
  id int(9),
  CONSTRAINT c12 PRIMARY KEY (login, id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.UserFormVacations (
  login VARCHAR(9) ,
  id int(9),
  CONSTRAINT c13 PRIMARY KEY (login, id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.UserFormExpenses (
  login VARCHAR(9) ,
  id int(9),
  CONSTRAINT c14 PRIMARY KEY (login, id)
)ENGINE=InnoDB;

CREATE TABLE webCuisine.UserFormTrip (
  login VARCHAR(9) ,
  id int(9),
  CONSTRAINT c15 PRIMARY KEY (login, id)
)ENGINE=InnoDB;


/*------------------------ALTER TABLE------------------------*/

ALTER TABLE Users ADD CONSTRAINT f1 FOREIGN KEY (login) REFERENCES UsersTasks(login) ON UPDATE CASCADE ON DELETE CASCADE;
/*********/ALTER TABLE Tasks ADD CONSTRAINT f2 FOREIGN KEY (id)REFERENCES UsersTasks(id)ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE Users   ADD CONSTRAINT f3 FOREIGN KEY (login) REFERENCES UserChannel(login) ON UPDATE CASCADE ON DELETE CASCADE;
/*********/ALTER TABLE Channel ADD CONSTRAINT f4 FOREIGN KEY (nameC) REFERENCES UserChannel(nameC) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE Channel ADD CONSTRAINT f5 FOREIGN KEY (nameC) REFERENCES ChannelNews(nameC) ON UPDATE CASCADE ON DELETE CASCADE;
/*********/ALTER TABLE News   ADD CONSTRAINT f6 FOREIGN KEY (id) REFERENCES ChannelNews(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE Users ADD CONSTRAINT f7 FOREIGN KEY (login) REFERENCES UserFormHours(login) ON UPDATE CASCADE ON DELETE CASCADE;
/*********/ALTER TABLE FormHours ADD CONSTRAINT f8 FOREIGN KEY (id) REFERENCES UserFormHours(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE Users ADD CONSTRAINT f9 FOREIGN KEY (login) REFERENCES UserFormVacations(login) ON UPDATE CASCADE ON DELETE CASCADE;
/*********/ALTER TABLE FormVacations ADD CONSTRAINT f10 FOREIGN KEY (id) REFERENCES UserFormVacations(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE Users ADD CONSTRAINT f11 FOREIGN KEY (login) REFERENCES UserFormExpenses(login) ON UPDATE CASCADE ON DELETE CASCADE;
/*********/ALTER TABLE FormExpenses ADD CONSTRAINT f12 FOREIGN KEY (id) REFERENCES UserFormExpenses(id) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE Users ADD CONSTRAINT f13 FOREIGN KEY (login) REFERENCES UserFormTrip(login) ON UPDATE CASCADE ON DELETE CASCADE;
/*********/ALTER TABLE FormTrip ADD CONSTRAINT f14 FOREIGN KEY (id) REFERENCES UserFormTrip(id) ON UPDATE CASCADE ON DELETE CASCADE;


/*------------------------INSERTS------------------------*/
insert into Users values (1,'gram1i','Gabriel','Ramos Suan','es','user',"no photo",true);
insert into Users values (2,'nacho','Ignacio','Gil Martinez','es','user',"no photo",true);
insert into Tasks (title, content, whoCreate) values ('Intranet','Build an intranet','SvenBubblies');
insert into UsersTasks values('gram1i',2);
insert into UsersTasks values('nacho',2);
/*------------------------SELECTS------------------------*/
select * from Users;
select * from Tasks;
select * from UsersTasks order by id;
delete from Tasks where id=2;
delete from Users where login='nacho';
select * from Users join UsersTasks on Users.login=UsersTasks.login;
select * from Tasks join UsersTasks on Tasks.id=UsersTasks.id;
select nameU, content from Users 
	join UsersTasks on Users.login=UsersTasks.login 
	join Tasks on Tasks.id=UsersTasks.id;
    
    