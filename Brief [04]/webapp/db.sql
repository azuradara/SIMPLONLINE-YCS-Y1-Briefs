drop table if exists orgs;
create table orgs (
    orgsId int(11) primary key auto_increment not null,
    orgsName varchar(128) not null
);

drop table if exists users;
create table users (
    usersOrg int,
    usersId int(11) primary key auto_increment not null,
    usersLevel int(1) not null,
	usersName varchar(128) not null,
	usersEmail varchar(128) not null,
	usersUid varchar(128) not null,
	usersPwd varchar(128) not null,

    foreign key (usersOrg) references orgs(orgsId)
);

drop table if exists classes;
create table classes (
    classesOrg int,
    classesId int(11) primary key auto_increment not null,
    classesName varchar(128) not null,

    foreign key (classesOrg) references orgs(orgsId)
);

drop table if exists teachers;
create table teachers (
    teachersId int primary key,
    teachersClassId int,
    teachersFName varchar(128) not null,
    teachersLName varchar(128) not null,
    teachersAddress varchar(128) not null,
    teachersPhone int(10) not null,

    foreign key (teachersId) references users(usersId),
    foreign key (teachersClassId) references classes(classesId)
);

drop table if exists students;
create table students (
    studentsId int primary key,
    studentsClassId int,
    studentsFName varchar(128) not null,
    studentsLName varchar(128) not null,
    studentsAddress varchar(128) not null,
    studentsGender varchar(128) not null,
    studentsBirthday date not null,
    studentsPhone int(10) not null,

    foreign key (studentsId) references users(usersId),
    foreign key (studentsClassId) references classes(classesId)
);

drop table if exists assignments;
create table assignments (
    assignmentsId int(11) primary key auto_increment,
    assignmentsClassId int,
    assignmentsTitle tinytext not null,
    assignmentsDesc longtext not null,

    foreign key (assignmentsClassId) references classes(classesId)
);