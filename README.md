# Pride of Lombok
Pride of Lombok can be called an e commerce website which sells many marchendises from Lombok Island. This website has been made for completing platform based application course project.

# Features
1. Login, Logout and Register
2. Authentication
3. Search Product
4. Save to Favorite
5. Purchase marchendise (At the moment this feature not implementing the payment process)
6. View purchase history
7. Edit profile
8. Create, Update, Delete Product (Admin, the default admin account is viewed in installation section)

# Installation and Usage
At the beginning, you can clone this repository and you have to make sure that your machine has been installed with PHP (8.2.4), composer (2.5.8) and database (This project used XAMPP as a server). After that you can update this repository by using
```bash
composer update
```
Generate the env file for this project (Command bellow used in linux, in windows probably you can use .env-example file and copy it as .env file)

```bash
cp .env-example .env
```

in the project itself (.env file), you can then change the database connection based on yours. Mine used this
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pride_of_lombok
DB_USERNAME=root
DB_PASSWORD=
```
And then you can make a migration and seed the database using this
```bash
php artisan migrate
php artisan db:seed
```

You can serve the laravel by using
```bash
php artisan serve
```

The default admin account is in the seeder file at ./database/seeder/DatabaseSeeder.php. You can login by that in login menu and you can do the Create, Update and Delete products.
```bash
'username' => 'admin123'
'email' => "admin123@gamil.com"
'password'=> bcrypt("admin123")
```

# Screenshots 
![image](https://github.com/ismarapw/pride-of-lombok/assets/76652264/8df1f2ed-90a1-4616-a8b4-b8e5e9e8ce85)
![image](https://github.com/ismarapw/pride-of-lombok/assets/76652264/ad293b42-ac3a-4eec-9604-ce2cee43c83c)
![image](https://github.com/ismarapw/pride-of-lombok/assets/76652264/31608b55-8b1f-4a6c-95d2-6e768f2f5b40)
![image](https://github.com/ismarapw/pride-of-lombok/assets/76652264/ce056833-e200-43d1-995e-d410d77f3450)
![image](https://github.com/ismarapw/pride-of-lombok/assets/76652264/62045280-e49b-4c31-9d02-626c26404b3c)
![image](https://github.com/ismarapw/pride-of-lombok/assets/76652264/5bb36b78-433d-4b7a-89ef-5369dbe00a10)




