USE 251139226assign2db;

SELECT * FROM otherUniversity;
LOAD DATA LOCAL INFILE 'loaddatafall2020.txt' INTO TABLE otherUniversity FIELDS TERMINATED BY ',' LINES TERMINATED BY '\r\n';
INSERT INTO otherUniversity VALUES ('99', 'Simon Fraser University', 'Burnaby', 'BC', 'SFU');
SELECT * FROM otherUniversity;


SELECT * FROM westernCourse;
INSERT INTO westernCourse VALUES ('cs1026', 'Computer Science Fundamentals I', '0.5', 'A/B');
INSERT INTO westernCourse VALUES ('cs1027', 'Computer Science Fundamentals II', '0.5', 'A/B');
INSERT INTO westernCourse VALUES ('cs2210', 'Algorithms and Data Structures', '1.0', 'A/B');
INSERT INTO westernCourse VALUES ('cs3319', 'Databases I', '0.5', 'A/B');
INSERT INTO westernCourse VALUES ('cs2120', 'Morden Survival SkillsI: Coding Essentials', '0.5', 'A/B');
INSERT INTO westernCourse VALUES ('cs4490', 'Thesis', '0.5', 'Z');
INSERT INTO westernCourse VALUES ('cs0020', 'Intro to Coding using Pascal and Fortran', '1.0', '');
INSERT INTO westernCourse VALUES ('cs4999', 'Computational Complexity', '1.0', 'Z');
SELECT * FROM westernCourse;


SELECT * FROM outsideCourse;
INSERT INTO outsideCourse VALUES ('CompSci022', 'Introduction to Programming', '1', '0.5', '2');
INSERT INTO outsideCourse VALUES ('CompSci033', 'Intro to Programming for Med Students', '3', '0.5', '2');
INSERT INTO outsideCourse VALUES ('CompSci021', 'Packages', '1', '0.5', '2');
INSERT INTO outsideCourse VALUES ('CompSci222', 'Introduction to Databases', '2', '1.0', '2');
INSERT INTO outsideCourse VALUES ('CompSci023', 'Advanced Programming', '1', '0.5', '2');

INSERT INTO outsideCourse VALUES ('CompSci011', 'Introduction to Computer Science', '2', '0.5', '4');
INSERT INTO outsideCourse VALUES ('CompSci123', 'Using Unix', '2', '0.5', '4');

INSERT INTO outsideCourse VALUES ('CompSci021', 'Intro Programming', '1', '1.0', '66');
INSERT INTO outsideCourse VALUES ('CompSci022', 'Advanced Programming', '1', '0.5', '66');
INSERT INTO outsideCourse VALUES ('CompSci319', 'Using Databases', '3', '0.5', '66');

INSERT INTO outsideCourse VALUES ('CompSci333', 'Graphics', '3', '0.5', '55');
INSERT INTO outsideCourse VALUES ('CompSci444', 'Networks', '4', '0.5', '55');

INSERT INTO outsideCourse VALUES ('CompSci022', 'Using Packages', '1', '0.5', '77');
INSERT INTO outsideCourse VALUES ('CompSci101', 'Intro to Using Data Structures', '2', '0.5', '77');

INSERT INTO outsideCourse VALUES ('CompSci021', 'Intro Programming I', '1', '1.0', '99');
INSERT INTO outsideCourse VALUES ('CompSci022', 'Intro Programming II', '2', '1.0', '99');
SELECT * FROM outsideCourse;

SELECT * FROM equivalent;
INSERT INTO equivalent Values ('cs1026','CompSci022','2','2015-5-12');
INSERT INTO equivalent Values ('cs1026','CompSci033','2','2013-1-2');
INSERT INTO equivalent Values ('cs1026','CompSci011','4','1997-2-9');
INSERT INTO equivalent Values ('cs1026','CompSci021','66','2010-1-12');
INSERT INTO equivalent Values ('cs1027','CompSci023','2','2017-6-22');
INSERT INTO equivalent Values ('cs1027','CompSci022','66','2019-9-1');
INSERT INTO equivalent Values ('cs2210','CompSci101','77','1998-7-12');
INSERT INTO equivalent Values ('cs3319','CompSci222','2','1990-9-13');
INSERT INTO equivalent Values ('cs3319','CompSci319','66','1987-9-21');
INSERT INTO equivalent Values ('cs2120','CompSci022','2','2018-12-10');
INSERT INTO equivalent Values ('cs0020','CompSci022','2','1999-9-17');
SELECT * FROM equivalent;


UPDATE equivalent SET date='2018-9-19' WHERE courseNum = 'cs0020' and courseCode = 'CompSci022' and universityID = '2';
SELECT * FROM equivalent;

SELECT * FROM outsideCourse;
UPDATE outsideCourse SET yearofstudent='1' WHERE courseName REGEXP 'Intro*';
SELECT * FROM outsideCourse;


