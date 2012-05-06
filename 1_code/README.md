### Code

Under this directory you'll see a directory containing the flash source code. You'll also notice a directory called web. Within the web directory is a deployable version of the website written in the CodeIgniter framework and in PHP. 

1. Install a standard LAMP setup, nothing special.
2. Create a username/password and database in MySQL.
3. Write database credentials in `code/web/application/config/database.php`
4. View the directory `code/web` in your web browser.
5. In MySQL, add a `section_key` into the table `sections`
6. Create a user account for yourself using that `section_key`.
7. If you want user account to be a professor, edit that user in the database table `users`, Change `student` to `professor.
