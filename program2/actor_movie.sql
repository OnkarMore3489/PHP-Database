DROP TABLE MOVIE cascade;
DROP TABLE ACTOR cascade;
DROP TABLE movie_actor cascade;

CREATE TABLE MOVIE(MOVIE_NO INT PRIMARY KEY,MOVIE_NAME VARCHAR(20) NOT NULL,RELEASE_YEAR DATE NOT NULL);
CREATE TABLE ACTOR(ACTOR_NO INT PRIMARY KEY,ACTOR_NAME VARCHAR(20) NOT NULL);

create table movie_actor( MOVIE_NO int references movie (MOVIE_NO) ,actor_no int references actor(actor_no));

insert into movie values(1,'PINJRA','2021-2-12');
insert into movie values(2,'KGF','2021-3-12');
insert into movie values(3,'RRR','2021-4-12');
insert into movie values(4,'BAHUBALI','2021-5-12');
insert into movie values(5,'FARJAND','2021-6-12');

insert into actor values(11,'SHRIRAM');
insert into actor values(12,'YASH');
insert into actor values(13,'RAM');
insert into actor values(14,'PRABHAS');
insert into actor values(15,'ANKIT');

insert into movie_actor values(1,11);
insert into movie_actor values(2,12);
insert into movie_actor values(3,13);
insert into movie_actor values(4,14);
insert into movie_actor values(5,15);




