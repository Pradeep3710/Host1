create table student
(
     USN varchar(10) primary key,
     name varchar(20),
     sem int(10),
     email varchar(20),
     dept varchar(20),
     year int(10),
     password varchar(10),
     comment char(4) default 'NULL'
);


create table staff
(
     username varchar(20),
     password varchar(20)
);

