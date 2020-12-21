USE 251139226assign2db;

-- Create view 1
CREATE VIEW view1 AS 
SELECT outsideCourse.courseName AS 'Other Course Name', otherUniversity.name, otherUniversity.nickName, otherUniversity.city,
	westernCourse.courseName AS 'Western Course Name'
FROM outsideCourse, otherUniversity, equivalent, westernCourse
WHERE equivalent.universityID = outsideCourse.universityID
	and equivalent.courseCode = outsideCourse.courseCode
	and equivalent.courseNum = westernCourse.courseNum
	and otherUniversity.id = outsideCourse.universityID
	and outsideCourse.yearofstudent = '1';

-- Prove that your view works by selecting all the rows from it.
SELECT * FROM view1;

-- Create view2
CREATE VIEW view2 AS
SELECT * 
FROM view1
WHERE nickName = 'UofT'
ORDER BY 'Western Course Name' ASC;

-- Show all the university table information
SELECT * FROM otherUniversity;

-- Delete any university that has a nickname with the letters "cord" in it.
DELETE FROM otherUniversity WHERE nickName REGEXP 'cord?';

-- Show all the university table information again to make sure it was remove
SELECT * FROM otherUniversity;

-- Delete any university from Ontario
DELETE FROM otherUniversity WHERE province = 'ON';
-- The reason why: 
-- Because there are courses delivered by Ontario University 
-- which have equivalencies exist in the equivalent table, the
-- foreign key constraint constrain the deletion. 

-- Show everything in the university table again
SELECT * FROM otherUniversity;

-- Show all the information about the outside course and all the information the university they are associated with 
SELECT * FROM outsideCourse, otherUniversity WHERE otherUniversity.id = outsideCourse.universityID;

-- Delete all the courses that are offered from a university in the city of Waterloo. Make sure you use city = "Waterloo" in your delete statement. 
DELETE FROM outsideCourse WHERE universityID IN (SELECT id FROM otherUniversity WHERE city = 'Waterloo');

-- Show all the information about the outside course and all the information the university they are associated with to make sure those courses were deleted.
SELECT * FROM outsideCourse, otherUniversity WHERE otherUniversity.id = outsideCourse.universityID;

-- Run your view again and make sure that the equivalencies were also deleted from the view
SELECT * FROM view1;
SELECT * FROM view2;




