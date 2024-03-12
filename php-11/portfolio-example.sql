CREATE TABLE `projects`
(
    `id`          int(11) NOT NULL AUTO_INCREMENT,
    `url`         varchar(254) NOT NULL,
    `title`       varchar(254) NOT NULL,
    `description` varchar(254) NOT NULL,
    `imageURL`    varchar(254) NOT NULL,
    `startDate`   varchar(254) NOT NULL,
    `endDate`     varchar(254) NOT NULL,
    primary key (`id`)
);



CREATE TABLE `skillTags`
(
    `id`    int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(80) NOT NULL,
    primary key (`id`)
);


-- join table
CREATE TABLE `skillTagProjects`
(
    `id`         int(11) NOT NULL AUTO_INCREMENT,
    `skillTagID` int(11) NOT NULL,
    `projectID`  int(11) NOT NULL,
    primary key (`id`)
);

insert into projects (url, title, description, imageURL, startDate, endDate)
values ('cisc3300.com', 'class site', 'a class website', 'https://cdn-icons-png.flaticon.com/512/25/25231.png', '2023',
        '2024');

insert into projects (url, title, description, imageURL, startDate, endDate)
values ('wayfinder.dev', 'work site', 'a project', 'https://cdn-icons-png.flaticon.com/512/25/25231.png', '2020',
        '2021');

insert into skillTags (title)
values ('PHP');

insert into skillTags (title)
values ('HTML');

insert into skillTagProjects (projectID, skillTagID)
values (1, 1);
insert into skillTagProjects (projectID, skillTagID)
values (1, 2);

select *
from projects order by endDate desc;

select *
from projects
         join skillTagProjects on skillTagProjects.projectID = projects.id
         join skillTags on skillTags.id = skillTagProjects.skillTagID
where skillTags.title = 'PHP';