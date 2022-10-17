
drop table stud_comp;
drop table competition;
drop table student;


create table student(stud_id int not null Primary key, name varchar(20) not null, class varchar(10));
create table competition(c_no int not null Primary key,c_name varchar(20),c_type varchar(10));
create table stud_comp(stud_id int not null references student(stud_id) on delete cascade, c_no int not null references competition(c_no) on delete cascade);


insert into student values(11,'aaa','fy');
insert into student values(22,'bbb','sy');
insert into student values(33,'ccc','ty');

insert into competition values(777,'ooo','games');
insert into competition values(666,'ppp','coding');


insert into stud_comp values(11,777);
insert into stud_comp values(22,666);





