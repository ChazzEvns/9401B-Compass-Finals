We used netbeans for running the web application as well for the web server (Apache Tomcat) and MySQL database

Setting up project folder
	Open up netbeans and click File > Open Project
	Select the project folder to where it's located in your device

Installing apache Tomcat
	An installer is provided.
	just run the installer and select where you want to install apache tomcat

Setting up the apahce tomcat server
	Go to services in th left panel of netbeans and locate "Servers"
	To add apache tomcat right click "Server" and select Add Server
	Select "Apache Tomcat or TomEE"
	For server location browse through where you isntalled apache tomcat
	Put in the credentials for admin
	Click Finish and start apache tomcat

MySQL server
	Run the MySQL server to be able to connect in netbeans
	Note: your credentials for MySQL server should match when connecting to database in netbeans
	Import created database for storing data.

Connecting MySQL with Netbeans
	Go to services in th left panel of netbeans and locate "Servers"
	To MySQL just right click "Databases" and select New Connection
	For Driver select "MySQL (Connector/J driver)" and click next
	Check if your Host, Database, and Port match with you MySQL server properties
	For username and password it is best to keep it the same a what you have with MySQL credentials
	Remove this in "?zeroDateTimeBehavior=convertToNull" JDBC URL. Proceeding with this will cause an error
	Click next and Finish
	