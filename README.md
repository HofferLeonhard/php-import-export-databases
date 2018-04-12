
# php-import-export-databases
Simple application to backup and restore a database with php

## How to use

#### Import the necessary classes

- export.php: To export the database. This file contains the exportBD class whose constructor takes as parameter database connection information, namely: the SGBD access URL, the user name, the password and the name of the database. data to save.
Its start () method starts the backup process, and returns the name of the saved file that is an SQL (.sql) file.

- import.php: To import a database from an SQL file. This file contains the importBD class whose constructor takes the database connection information, namely the SGBD access URL, the user name, the password and the name of the database. data in which to perform the restoration.
Its start () method is used to start the restore process, and takes as parameter the name of the backup SQL file.


#### supported SGBD
Currently, only the MYSQL SGBD is supported.

#### How to test
Run the index.php file for more information.

##### NB: 
Please specify the connection information to the BD, namely:

host, user, password, database_name

## License

[MIT] (LICENSE)


Enjoy it!