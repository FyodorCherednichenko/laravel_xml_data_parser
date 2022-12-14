<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
##Задание

Stack: PHP 7.4+, MySQL 5.7+
Frameworks: Нативный PHP, либо Laravel;<br>
Задача:<br> 
На ftp сервер проекта раз в сутки выгружается XML-файл с данными по стоку. <br>
С каждой новой выгрузкой данные меняются - одни данные могут обновиться, другие добавиться, третьи удалиться (их не
будет в новом XML-файле).<br>
Необходимо разработать архитектуру БД на основе XML-выгрузки и написать парсер XML-файла.<br>
Парсер должен:<br>
добавлять в базу записи, которых в ней еще нет;<br>
обновлять записи, которые пришли в XML и уже есть в базе;<br>
удалять записи из базы, которых нет в XML (чистить таблицу перед парсингом нельзя).<br>
Парсер должен запускаться через консольную команду. <br>
При вызове консольной команды должна быть возможность указать путь до локального файла выгрузки, при этом, если путь до файла не указан, то
берется дефолтный файл.<br>
При проектировании архитектуры БД необходимо учитывать, что по всем полям, кроме id и
generation_id , будет происходить фильтрации данных.

Критерии оценки реализации:
1. Выполени всех требований в задании;
2. Соблюдение стандартов PSR и чистота кода;
3. Naming классов, методов и переменных;
4. Набор принципов программирования, используемых для реализации задания;
5. Структура таблиц, типы данных колонок и naming в БД.
