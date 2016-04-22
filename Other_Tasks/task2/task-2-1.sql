SELECT c.Name, (Select Name from zend.employee where empid = c.Supervisor) as Supervisor, c.Salary, ca.Nbonus as Bonus FROM zend.bonus as ca
INNER JOIN zend.employee as c
on ca.empid = c.empid
Where ca.Nbonus > 100;


