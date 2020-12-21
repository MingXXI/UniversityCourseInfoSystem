SHOW DATABASES;

DROP DATABASE IF EXISTS 251139226assign2db;

CREATE DATABASE 251139226assign2db;

USE 251139226assign2db;

GRANT USAGE ON *.* TO 'ta'@'localhost';
DROP USER 'ta'@'localhost';
CREATE USER 'ta'@'localhost' IDENTIFIED BY 'cs3319';
GRANT ALL PRIVILEGES ON 251139226assign2db.* TO 'ta'@'localhost';
FLUSH PRIVILEGES;

SHOW TABLES;

CREATE TABLE westernCourse (courseNum VARCHAR(6) NOT NULL, courseName VARCHAR(50) NOT NULL, weight VARCHAR(5) NOT NULL, suffix VARCHAR(5), PRIMARY KEY(courseNum));
DESC westernCourse;
CREATE TABLE otherUniversity (id VARCHAR(2) NOT NULL, name VARCHAR(50) NOT NULL, city VARCHAR(50) NOT NULL, province VARCHAR(50) NOT NULL, nickName VARCHAR(20) NOT NULL, PRIMARY KEY (id));
DESC otherUniversity;
CREATE TABLE outsideCourse (courseCode VARCHAR(10) NOT NULL, courseName VARCHAR(50) NOT NULL, yearofstudent VARCHAR(1) NOT NULL, weight VARCHAR(5) NOT NULL, universityID VARCHAR(2) NOT NULL, PRIMARY KEY(courseCode, universityID), FOREIGN KEY(universityID) REFERENCES otherUniversity(id));
DESC outsideCourse;
CREATE TABLE equivalent (courseNum VARCHAR(6) NOT NULL, courseCode VARCHAR(10) NOT NULL, universityID VARCHAR(2) NOT NULL, date DATE NOT NULL, PRIMARY KEY (courseCode, universityID, courseNum), FOREIGN KEY (courseCode) references outsideCourse(courseCode) ON DELETE CASCADE, CONSTRAINT univeristy_deletion FOREIGN KEY (universityID) REFERENCES otherUniversity(id), FOREIGN KEY (courseNum) REFERENCES westernCourse(courseNum) ON DELETE CASCADE);
DESC equivalent;
SHOW TABLES;
