SELECT c.Name, (Select Name from task_2.employee where empid = c.Supervisor) as Supervisor, c.Salary, ca.Nbonus as Bonus FROM task_2.bonus as ca
INNER JOIN task_2.employee as c
on ca.empid = c.empid
Where ca.Nbonus > 100;


