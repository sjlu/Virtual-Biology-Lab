#Virtual Biology Lab

## Introduction

The Virtual Biology Lab is intended to inform and teach students certain aspects of Biology in a virtual environment. Each and every lab also entails a quiz at the end, testing students to see if they have grasped the pertinent information. Labs include Cell Division, Biological Molecules, Enzyme State Diagram, and Meiosis Activity.

This project was created for Software Engineering (332-452) at Rutgers University under professor Ivan Marsic.

This project was created by:
- Steven Lu (sjlu)
- Mike DiLalo (mvd366)
- Nick Guida
- Cady Motyka
- Kevin Miller

## Organization

Within this Github repository, you'll notice three main folders.

### Code

Under this directory you'll see a directory containing the flash source code. You'll also notice a directory called web. Within the web directory is a deployable version of the website written in the CodeIgniter framework and in PHP. You'll need a standard LAMP setup in order to properly run the web server. You'll need to create a MySQL username and database in order for the website to be dynamic. Once you've created it you'll need to add these credentials to `web/application/config/database.php`. Don't worry about setting up the database, the website will automatically add the necessary tables. To start creating accounts, you'll need to add a section key in the database table, `sections`.

### Other

All of our report documentation is listed in the `doc` directory. Our `design` directory includes graphics, diagrams and more that were created and can be found in our documentation. Please refer to `docs` for any UML diagrams as they are the most up to date.
