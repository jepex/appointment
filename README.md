https://1601558au.azurewebsites.net/

<u><br> GETTING STARTED </br></u>
to use this app at your own compucter you have to clone project files to XAMP folder and run folowing scripts to make tables. Database are created automatically

CREATE TABLE user (
id INT NOT NULL AUTO_INCREMENT,
   First_name VARCHAR(100) NOT NULL,
   Last_name VARCHAR(100) NOT NULL,
   Email VARCHAR(40) NOT NULL,
   Phone VARCHAR(40) NOT NULL,
   PRIMARY KEY (id )
)

CREATE TABLE reservation (
id INT NOT NULL AUTO_INCREMENT,
   Date VARCHAR(100) NOT NULL,
   Time VARCHAR(100) NOT NULL,
	PRIMARY KEY (id )
)

<u>USING APP </u>
1. Insert infos to the app
![img](https://i.imgur.com/sJE9EA3.png)

2. Check out your infos from database
![img](https://i.imgur.com/v0fE7Lf.png)

3. Delete your infos from database
![img](https://i.imgur.com/BUsSmcm.png)

4. Update your infos from database
![img](https://i.imgur.com/CxztXF7.png)
