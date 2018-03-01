-- Selects programming course(s) after year 2016
select * from course WHERE courseName LIKE 'prog%' and courseYear >= 2016


--counts average grade of all passed courses
SELECT avg(courseGrade) FROM `enroll` WHERE coursePassed is not null

--Counts the average grade of students which are 20-29 years old
SELECT avg(courseGrade) FROM `enroll` inner join person on person.StudentID=enroll.StudentID where person.age Like '2%'


--Count's average grade of each course
SELECT course.courseName, avg(enroll.courseGrade)
	FROM course
	LEFT JOIN enroll ON course.courseID = enroll.courseID
	group by courseName
	ORDER BY course.courseName



