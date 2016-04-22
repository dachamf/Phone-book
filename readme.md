# Task 1
Files can be found here [Git task1 file](http://laravel.com/docs).

## Task 1 answers

1. Did you write that as if you were writing production code?
  -- Yes it is writen like is production.
2. What assumptions does your implementation make about the input parameter?
  -- Input parameter should be an array.
3. What is the algorithmic complexity ("big O") of your function?
  -- Algoritmic complexity of the function is "o(log n)"
  
  
# Task 2

Files can be found here [Git task2 file](http://laravel.com/docs).

1) Create empty db-table
2) You should import dump-task-2db.sql file into empty db table

## Task 2 answers
1) import script task-2-1.sql or paste this execution code.

`SELECT c.Name, (Select Name from zend.employee where empid = c.Supervisor) as Supervisor, c.Salary, ca.Nbonus as Bonus FROM zend.bonus as ca
 INNER JOIN zend.employee as c
 on ca.empid = c.empid
 Where ca.Nbonus > 100;`

2) import script task-2-2.sql or paste this execution code.

`select c.Name,c.Location, c.Salary, ca.Nbonus as Bonus, (c.Salary + ca.Nbonus) as Total 
 from zend.employee as c
 inner join zend.bonus as ca
 on ca.empid = c.empid
 where (c.Salary + ca.Nbonus)  in (Select max(d.Salary + da.Nbonus) from zend.employee as d inner join zend.bonus as da on da.empid = d.empid group by Location)
 order by (c.Salary + ca.Nbonus) desc`


# Task 3

# Laravel PHP Framework
[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
