1. Selezionare tutti gli studenti nati nel 1990 `(160)`

SELECT *
 FROM students
  WHERE YEAR(date_of_birth) = 1990;

2. Selezionare tutti i corsi che valgono più di 10 crediti `(479)`

SELECT *
 FROM courses
  WHERE cfu > 10,

3. Selezionare tutti gli studenti che hanno più di 30 anni

SELECT *
 FROM students
  WHERE YEAR(date_of_birth) < 1993;

4. Selezionare tutti i corsi del primo semestre del primo anno di un qualsiasi corso di laurea `(286)`



5. Selezionare tutti gli appelli d'esame che avvengono nel pomeriggio (dopo le 14) del 20/06/2020 `(21)`

SELECT *
 FROM exams
  WHERE hour > 14:00:00 AND date = 2020-06-20;

6. Selezionare tutti i corsi di laurea magistrale `(38)`

SELECT * FROM degrees WHERE level LIKE 'm%';

7. Contare il numero di dipartimenti di cui e' composta l'università `(12)`

SELECT * FROM departments;

8. Contare gli insegnanti che non hanno un numero di telefono `(50)`

SELECT *
 FROM teachers
  WHERE phone IS NULL;

#### GROUP BY
1. Contare quanti iscritti ci sono stati ogni anno

SELECT YEAR(enrolment_date), COUNT(*)
 FROM students
GROUP BY YEAR(enrolment_date);

2. Contare gli insegnanti che hanno l'ufficio nello stesso edificio

SELECT (office_adress), COUNT(*)
FROM teachers
GROUP BY (office_adress);

3. Calcolare la media dei voti di ogni appello d'esame


4. Contare quanti corsi di laurea ci sono per ogni dipartimento

