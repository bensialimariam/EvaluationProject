0-Create database with name:evaluation
1- php artisan cache:clear
2-php artisan config:clear
3-php artisan migrate
4-go to phpMyAdmin and execute this query :
INSERT INTO `users` (`id`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES ('1', 'mariam@gmail.com', '$2y$10$WSG0yXFFc1FVPqAoGFASnO3lB6v/a160uHEtnEiCuCWQJHzV1h70.', 'administration', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC91c2VyXC9sb2dpbiIsImlhdCI6MTU3OTc5MDk5MCwiZXhwIjoxNTc5Nzk0NTkwLCJuYmYiOjE1Nzk3OTA5OTAsImp0aSI6InpQTU5FT3J3OU43VllQemMiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.ylrM7Pp65k-F8z2unmmEGoausL1R8T1dibG4xRM7VIY', '2020-01-23 13:50:30', '2020-01-23 14:49:50')
5-now you can log to the API with  this cridentiels 
email :mariam@gmail.com 
password :password 
as an administration
6-ENJOY :D
PS For Samira and Hanae  :To create new student/professor/administration you've to create a user then use the created user_id to create student/professor/administration.
PS to all of us : REMEMBER try and catch for errors using numbers of each error (ex:404,503... ) ,use scops in models.
WE hope that we'll finish the backend before the first Saturday after vacation :).