

***************** Details of file's uploaded in GITHUB ***********************

1) home.php - It is a main file which contains PHP script of all the "5" queries
2) query1.php- It is a supporting file for 1st query in home.php file
3) query2.php- It is a supporting file for 2nd query in home.php file
4) query3.php- It is a supporting file for 3rd query in home.php file
5) query4.php- It is a supporting file for 4th query in home.php file
6) query5.php- It is a supporting file for 5th query in home.php file
7) triggers.txt - It contains SQL syntax's of "2" triggers along with the screenshots
8) Readme.txt-  It contains how to execute the PHP scripts and the rationale behind the triggers


********** Execution of PHP Scripts **************

1) In order to execute PHP program we use a software bundle called as WAMP. When you install WAMP you don't have to install Apache, PHP,MYSQL separately and use them to run the PHP code
2) Now open a text editor like notepad or notepad++
3) Write the PHP code in the text editor.
   
 Sample Example: <?PHP
                 echo 'I know how to run a PHP Program in XAMPP! <br />';
                 ?>

save it has "test.php"

4) save the file in WAMP installation directory

   path: C:\wamp64\www\DBMS project\test.php

5) Now, go to WAMP installation folder and then select wampmanager option by double clicking on it

6) Now go to any web browser and type http://localhost/DBMS%20project/test.php

7) If your test PHP file is working properly, then you should see content written in the test.php file



********** Execution of Triggers **************

1) Open In order to execute PHP program we use a software bundle called as WAMP. When you install WAMP you don't have to install Apache, PHP,MYSQL separately and use them to run the PHP code
2) Now, go to WAMP installation folder and then select wampmanager option by double clicking on it
3) click on Wamp server icon at the bottom of the desktop screen
4) select phpmyadmin.Thus, Phpmyadmin webpage is opened in the browser.
5) Set the username as "root" and make empty password column and hit go
6) Create a new database by clicking on "new" option at the right side of the catalog
7) The admin page window will be opened
8) After the page opens on your right side window, click database and choose to create database
9) Now your database is displayed on the left side of your php mydmin page
10) Choose your database and create tables and insert the data into those tables
11) Now, we have to create triggers

sample example: CREATE TRIGGER `ordertab` BEFORE INSERT ON `order` FOR EACH ROW 
                BEGIN
                DECLARE msg varchar(255);
                IF (NEW.items<1)
                THEN
                SET msg=concat('check constraint- rank should not be less than 1 violated as rank in the entry is  ',cast(NEW.items as char));
                SIGNAL sqlstate 'CK001' SET message_text=msg;
                END IF;
                End

12)The above trigger is activated when we insert data into the table "orders".
13) while inserting a record in the order table, if items value in the table is given less than zero then the trigger is activated and a error message is displayed.
14) If the value of items is above zero then no error message is displayed then the new record is succesfully created


   



