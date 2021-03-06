select c.Name,c.Location, c.Salary, ca.Nbonus as Bonus, (c.Salary + ca.Nbonus) as Total 
from task-2.employee as c
inner join task-2.bonus as ca
on ca.empid = c.empid
where (c.Salary + ca.Nbonus)  in (Select max(d.Salary + da.Nbonus) from task-2.employee as d inner join task-2.bonus as da on da.empid = d.empid group by Location)
order by (c.Salary + ca.Nbonus) desc
;