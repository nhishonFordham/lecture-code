-- create students table
CREATE TABLE `students`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `name`      varchar(80) NOT NULL,
    `addressID` int(11) NOT NULL,
    primary key (`id`)
);

-- create student addresses table
CREATE TABLE `studentAddresses`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `address`   varchar(254) NOT NULL,
    `state`     varchar(80),
    `studentID` int(11) NOT NULL,
    primary key (`id`)
);

-- create teachers table
CREATE TABLE `teachers`
(
    `id`   int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(80) NOT NULL,
    primary key (`id`)
);

-- create classes table
CREATE TABLE `classes`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `title`     varchar(80) NOT NULL,
    `teacherID` int(11) NOT NULL,
    primary key (`id`)
);

-- create student classes join table
CREATE TABLE `studentClasses`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `classID`   int(11) NOT NULL,
    `studentID` int(11) NOT NULL,
    primary key (`id`)
);


-- seed some test data

insert into students (name, addressID)
values ('Bethany Shaw', 1);
insert into students (name, addressID)
values ('Sheri Fitzgerald', 2);
insert into students (name, addressID)
values ('Patrick Burgess', 3);
insert into students (name, addressID)
values ('Chester Orourke', 4);
insert into students (name, addressID)
values ('Francisco Jefferson', 5);
insert into students (name, addressID)
values ('Larry J. Shurtleff', 6);
insert into students (name, addressID)
values ('Joshua A. Hansen', 7);
insert into students (name, addressID)
values ('Deborah L. Johnson', 8);
insert into students (name, addressID)
values ('Danielle W. Brothers', 9);
insert into students (name, addressID)
values ('Richard M. Cordero', 10);

insert into studentAddresses (address, state, studentID)
values ('2975 Vineyard Drive', 'MI', 1);
insert into studentAddresses (address, state, studentID)
values ('4573 Pallet Street', 'NY', 2);
insert into studentAddresses (address, state, studentID)
values ('2944 Beechwood Avenue', 'IL', 3);
insert into studentAddresses (address, state, studentID)
values ('2102 Robinson Court', 'MI', 4);
insert into studentAddresses (address, state, studentID)
values ('3175 Sheila Lane', 'NY', 5);
insert into studentAddresses (address, state, studentID)
values ('2510 Star Route', 'IL', 6);
insert into studentAddresses (address, state, studentID)
values ('2076 Arrowood Drive', 'MI', 7);
insert into studentAddresses (address, state, studentID)
values ('657 Rogers Street', 'NY', 8);
insert into studentAddresses (address, state, studentID)
values ('3864 Abner Road', 'IL', 9);
insert into studentAddresses (address, state, studentID)
values ('4505 Hillcrest Circle', 'MI', 10);

update studentAddresses SET address = 'value1' where id = 1;

insert into teachers (name)
values ('Mildred Bailey');
insert into teachers (name)
values ('Timothy E. Bradley');
insert into teachers (name)
values ('Karen M. Perkins');
insert into teachers (name)
values ('Freddie S. Matthews');
insert into teachers (name)
values ('Anthony B. Browner');
insert into teachers (name)
values ('Doris S. Caballero');
insert into teachers (name)
values ('Mary A. Hoffman');
insert into teachers (name)
values ('Mattie T. Miller');
insert into teachers (name)
values ('James R. Maday');
insert into teachers (name)
values ('Deloris F. Howell');

insert into classes (title, teacherID)
values ('Comp Sci 1', 1);
insert into classes (title, teacherID)
values ('Comp Sci 2', 1);
insert into classes (title, teacherID)
values ('Math 1', 2);
insert into classes (title, teacherID)
values ('Math 2', 2);
insert into classes (title, teacherID)
values ('Dance 1', 3);
insert into classes (title, teacherID)
values ('Dance 2', 3);
insert into classes (title, teacherID)
values ('Biology 1', 4);
insert into classes (title, teacherID)
values ('Biology 2', 4);
insert into classes (title, teacherID)
values ('Philosophy 1', 5);
insert into classes (title, teacherID)
values ('Philosophy 2', 5);

insert into studentClasses (classID, studentID)
values (1, 1);
insert into studentClasses (classID, studentID)
values (1, 2);


-- some example queries

-- select all students
-- select * from students;

-- select certain columns from students
-- select id, name from students;

-- select all from students where name equals something
-- select * from students where name = 'Bethany Shaw';

-- select all from students where id is less than 2;
-- select * from students where id < 2;

-- select all from students where name contains Shaw;
-- select * from students where name like '%Shaw%';

-- select all from students order by name ;
-- select * from students order by name;

-- select * from students order by name desc;

-- GROUP BY

-- The GROUP BY statement groups rows that have the same values into summary rows

--  columns in a group by must be:
--  an expression used as one of the group by criteria , or ...
--  an aggregate function , or ...
--  a literal value

-- group a result set by state and then count the ids
-- select count(id) from studentAddresses group by state;

-- select * from students limit 2;

-- select * from students limit 2 offset 2;

-- relationships and joins

-- joins get data from two related table and the nature of
-- that relationship determines how we'll use the join

-- left join vs inner join

-- left selects all of the first table and any matches on the right
-- select * from teachers left join classes on teachers.id = classes.teacherID;

-- inner selects only matches, inner is default
-- select * from teachers join classes on teachers.id = classes.teacherID;

-- other joins

-- relationships

-- one to one
-- get the address of a student
-- select * from students join studentAddresses on students.id =

-- one to many
-- get a teachers classes


-- many to many
-- get all classes

-- SELECT
--     students.*,
--     studentClasses.id AS studentClassID,
--     classes.title AS classTitle
-- FROM
--     students
--         JOIN
--     studentClasses AS studentclasses ON students.id = studentClasses.studentID
--         JOIN
--     classes ON classes.id = studentClasses.classID


--     multiple table join


-- aliases
-- select name as studentName from students;


-- some portfolio selects

-- select all columns from projects order by endDate descending(highest value first)
-- select * from projects order by endDate desc;

-- select projects.*, skillTags.*
-- from projects
--          join skillTagProjects on skillTagProjects.projectID = projects.id
--          join skillTags on skillTags.id = skillTagProjects.skillTagID
-- where skillTags.title = 'PHP';


-- insert
-- insert into students

-- update

-- deleted

-- constraints