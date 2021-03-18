create procedure fillUserVariants(entryname varchar(128), ilimit int(11), ilevel int(11))
begin
    declare i int default 1;
    while i <= ilimit do
        insert into users(usersLevel, usersEmail, usersUid, usersPwd)
        values (ilevel, concat(entryname, i, '@example.co'), concat(entryname, i), 'pwd');
        set i = i + 1;
    end while;
end;

call fillUserVariants('admin', 3, 1);
call fillUserVariants('teacher', 8, 2);
call fillUserVariants('student', 18, 3);

create procedure fillClassVariants()
begin
    declare i int default 1;
    while i <= 5 do
        insert into classes
        values (i, concat('class', i));
        set i = i + 1;
        end while;
end;

call fillClassVariants();

create procedure fillTeacherVariants(offset int(11), ilimit int(11))
begin
    declare i int default offset;
    declare j int default 1;

    while i <= ilimit do
        insert into teachers
        values(i, j, concat('fname', j), concat('lname', j), 'address', 0666666666);
        set i = i + 1;
        set j = j + 1;
    end while;
end;

call fillTeacherVariants(4, 8);

create procedure fillStudentVariants(offset int(11), ilimit int(11), stdclass int(11))
begin
    declare i int default offset;
    declare j int default 1;

    while i <= ilimit do
        insert into students
        values(i, stdclass, concat('fname', j), concat('lname', j), 'address', 'non-binary', '2011-11-11', 0666666666);
        set i = i + 1;
        set j = j + 1;
    end while;
end;

call fillStudentVariants(12, 13, 1);
call fillStudentVariants(14, 15, 2);
call fillStudentVariants(16, 17, 3);
call fillStudentVariants(18, 19, 4);
call fillStudentVariants(20, 21, 5);

select * from students where studentsClassId = 1;

update users set usersPwd = '$2y$10$qmOPky0hems9BR4flOgVWO9jo3E3FArODeMI.GoHHFFQ18l.V7v/C'
where usersPwd = 'pwd';
# hash fix

