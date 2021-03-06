# Task 1
Files can be found here [Git task1 file](https://github.com/dachamf/Phone-book/tree/master/Other_Tasks/task1).

## Task 1 answers

1. Did you write that as if you were writing production code?

  -- Yes it is writen like is production.
2. What assumptions does your implementation make about the input parameter?

  -- Input parameter should be an array.
3. What is the algorithmic complexity ("big O") of your function?

  -- Algoritmic complexity of the function is "o(log n)"
  
  
# Task 2

Files can be found here [Git task2 file](https://github.com/dachamf/Phone-book/tree/master/Other_Tasks/task2).

1) Execute task2dump.sql this will create a database with all necessary data. 

## Task 2 answers

1) execute script task-2-1.sql or execute this code.

```
SELECT c.Name, (Select Name from task-2.employee where empid = c.Supervisor) as Supervisor, c.Salary, ca.Nbonus as Bonus FROM task-2.bonus as ca
 INNER JOIN task-2.employee as c
 on ca.empid = c.empid
 Where ca.Nbonus > 1000;
```

2) execute script task-2-2.sql or execute this code.

```
select c.Name,c.Location, c.Salary, ca.Nbonus as Bonus, (c.Salary + ca.Nbonus) as Total 
from task-2.employee as c
inner join task-2.bonus as ca
on ca.empid = c.empid
where (c.Salary + ca.Nbonus)  in (Select max(d.Salary + da.Nbonus) from task-2.employee as d inner join task-2.bonus as da on da.empid = d.empid group by Location)
order by (c.Salary + ca.Nbonus) desc
```

# Task 3

## Task 3 instalation:

#### Setup sever environment

Follow instructins [for windows](http://www.sitepoint.com/how-to-install-apache-on-windows/)

Follow instructins [for linux](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu)

Follow instructins [for osx](https://coolestguidesontheplanet.com/get-apache-mysql-php-phpmyadmin-working-osx-10-10-yosemite/)

#### Setup a new database for the project.

Create new empty database for the project 


#### Install composer :
Laravel utilizes Composer to manage its dependencies. First, download a copy of the composer.phar. Once you have the PHAR archive, 
you can either keep it in your local project directory or move to usr/local/bin to use it globally on your system.
On Windows, you can use the Composer Windows installer.
You can read documentation [here](https://getcomposer.org/).

---

#### Download project:


Use the `Download ZIP` button (upper right corner) to download the file and unpack it into the destination directory(root of the project), or run command `git clone git@github.com:dachamf/Phone-book.git` in the desired directory(root of the project).

Once unpacked or cloned use the console and navigate to the root directory of the given project and run the 
`composer update.`

Optionally you can remove Other_Tasks folder but this is not necessary, which is the directory of first two tasks.  

Also, the following content should be modified, rename `.env.example` in `.env` and change parameters (previously created database parameters).

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

#### Running application:

Now application should be ready.

If you have an error with following message

```
RuntimeException in EncryptionServiceProvider.php line 45:
No supported encrypter found. The cipher and / or key length are invalid.
```

you should run `php artisan key:generate` in root directory of project.


#### Setup application:

We now have to set up database by executing following command in console `php artisan migrate`.

Now we will be able to run our application without any record in database.

You can add records by clicking `Add new contact` link, or u can execute `php artisan db:seed` command which will add records into database.

#### Running application:

You can now search, update, delete contacts.

have a fun!


---

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
