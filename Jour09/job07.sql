SELECT * FROM étudiants WHERE naissance <= DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
 --curdate to take a date of a current day, interval to chose 18 years ago??