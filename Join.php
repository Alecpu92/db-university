Selezionare tutti gli studenti iscritti al Corso di Laurea in Economia

SELECT *
 FROM students
  JOIN degrees
   ON degree_id = students.degree_id
    WHERE students.name
     LIKE "Corso di Laurea in Economia";

Selezionare tutti i Corsi di Laurea Magistrale del Dipartimento di Neuroscienze

SELECT departments.name, degrees.name
FROM departments
JOIN degrees
ON departments.id = degrees.department_id
WHERE departments.name = 'Dipartimento di Neuroscienze';



Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)

SELECT teachers.name, teachers.surname, teachers.id, courses.name
FROM teachers
JOIN course_teacher
ON teachers.id = course_teacher.teacher_id
JOIN courses
ON courses.id = course_teacher.course_id
WHERE teachers.id = 44;


Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui
sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e
nome

SELECT students.surname, students.name, degrees.*, departments.name
FROM students
JOIN degrees
ON degrees.id = students.degree_id
JOIN departments
ON departments.id = degrees.department_id
ORDER BY students.surname
AND students.name;


Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti

SELECT *
 FROM degrees
  JOIN courses
   ON degrees.id = courses.degree_id
    JOIN course_teacher ON courses.id = course_teacher.course_id
     JOIN teachers ON course_teacher.teacher_id = teachers.id;

Selezionare tutti i docenti che insegnano nel Dipartimento di Matematica (54)

SELECT DISTINCT departments.name, teachers.surname, teachers.name
FROM departments
JOIN degrees
ON departments.id = degrees.department_id
JOIN courses
ON degrees.id = courses.degree_id
JOIN course_teacher
ON courses.id = course_teacher.course_id
JOIN teachers
ON teachers.id = course_teacher.teacher_id
WHERE departments.name = 'Dipartimento di Matematica'
ORDER BY teachers.surname, teachers.name;


Bonus


Selezionare per ogni studente il numero di tentativi sostenuti
per ogni esame, stampando anche il voto massimo. Successivamente,
filtrare i tentativi con voto minimo 18.

