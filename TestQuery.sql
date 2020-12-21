USE 251139226assign2db;

-- Query 1
SELECT courseName FROM westernCourse;

-- Query 2
SELECT DISTINCT courseCode FROM outsideCourse;

-- Query 3
SELECT * FROM westernCourse ORDER BY courseName ASC;

-- Query 4
SELECT courseNum, courseName FROM westernCourse WHERE weight = '0.5';

-- Query 5
SELECT courseName, courseCode FROM otherUniversity, outsideCourse WHERE outsideCourse.universityID = otherUniversity.id and otherUniversity.name = 'University of Toronto';

-- Query 6
SELECT courseName, nickName FROM outsideCourse,otherUniversity WHERE outsideCourse.courseName REGEXP 'Introduction?' and outsideCourse.universityID = otherUniversity.id;

-- Query 7
SELECT outsideCourse.courseName, otherUniversity.name, westernCourse.courseName, equivalent.date 
FROM outsideCourse, otherUniversity, westernCourse, equivalent 
WHERE (DATE_SUB(CURDATE(), INTERVAL 5 YEAR) < equivalent.date 
	and equivalent.universityID = otherUniversity.id 
	and equivalent.courseNum = westernCourse.courseNum
	and equivalent.courseCode = outsideCourse.courseCode); 

-- Query 8
SELECT outsideCourse.courseName, otherUniversity.nickName 
FROM outsideCourse, otherUniversity, equivalent
WHERE equivalent.universityID = otherUniversity.id
	and equivalent.coursenum = 'cs1026'
	and equivalent.courseCode = outsideCourse.courseCode;

-- Query 9
SELECT COUNT(*)
FROM equivalent
WHERE equivalent.courseNum = 'cs1026';

-- Query 10
SELECT westernCourse.courseName, outsideCourse.courseName, otherUniversity.nickName
FROM westernCourse,outsideCourse,equivalent,otherUniversity
WHERE westernCourse.courseNum=equivalent.courseNum
	and outsideCourse.courseCode = equivalent.courseCode
	and equivalent.universityID = otherUniversity.id
	and otherUniversity.city = 'Waterloo'
	and otherUniversity.province = 'ON';

-- Query 11
SELECT otherUniversity.name 
FROM otherUniversity
WHERE otherUniversity.id NOT IN (SELECT universityID FROM equivalent);

-- Query 12
SELECT westernCourse.courseName, westernCourse.courseNum, outsideCourse.yearofstudent
FROM westernCourse, outsideCourse, equivalent
WHERE equivalent.courseNum = westernCourse.courseNum
	and equivalent.courseCode = outsideCourse.courseCode
	and (outsideCourse.yearofstudent = '3' OR outsideCourse.yearofstudent = '4');

-- Query 13
SELECT westernCourse.courseName
FROM westernCourse, equivalent
WHERE equivalent.courseNum = westernCourse.courseNum
GROUP BY westernCourse.courseNum
HAVING count(*) > 1;

-- Query 14
SELECT westernCourse.courseNum AS 'Western Course Num', westernCourse.courseName AS 'Western Course Name', westernCourse.weight AS 'Course Weight', 
	outsideCourse.courseName AS 'Other University Course Name', otherUniversity.name AS 'University Name', outsideCourse.weight AS 'Outside Weight'
FROM westernCourse, outsideCourse, otherUniversity, equivalent
WHERE equivalent.courseCode = outsideCourse.courseCode
	and equivalent.courseNum = westernCourse.courseNum
	and equivalent.universityID = otherUniversity.id
	and outsideCourse.weight != westernCourse.weight;



