#Virtual Biology Lab

## Introduction

The Virtual Biology Lab is intended to inform and teach students certain aspects of Biology in a virtual environment. Each and every lab also entails a quiz at the end, testing students to see if they have grasped the pertinent information. Labs include Cell Division, Biological Molecules, Enzyme State Diagram, and Meiosis Activity.

This project was created for Software Engineering (332-452) at Rutgers University under professor Ivan Marsic.

This project was created by:
- Steven Lu (sjlu) - Developed web interface
- Mike DiLalo (mvd366) - Developed flash modules
- Nick Guida
- Ryan Cullinane
- Cady Motyka
- Kevin Miller

## Organization

Within this Github repository, you'll notice three main folders.

### Code

Under this directory you'll see a directory containing the flash source code. You'll also notice a directory called web. Within the web directory is a deployable version of the website written in the CodeIgniter framework and in PHP. 

1. Install a standard LAMP setup, nothing special.
2. Create a username/password and database in MySQL.
3. Write database credentials in `code/web/application/config/database.php`
4. View the directory `code/web` in your web browser.
5. In MySQL, add a `section_key` into the table `sections`
6. Create a user account for yourself using that `section_key`.
7. If you want user account to be a professor, edit that user in the database table `users`, Change `student` to `professor.

### Other

All of our report documentation is listed in the `doc` directory. Our `design` directory includes graphics, diagrams and more that were created and can be found in our documentation. Please refer to `docs` for any UML diagrams as they are the most up to date.
