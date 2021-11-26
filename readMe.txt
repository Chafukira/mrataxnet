------------------------------------------------------------------------------------------
		  MRA-TaxNet - Deployment
------------------------------------------------------------------------------------------
Application Folder structure:

		mrataxnet      
		    |--app folder  
		    |--public
		    |--.htaccess

- mrataxnet is the root application folder.
- app folder contains the application configuration folders and files.
- public folder contains application views (css, js, etc).

-------------------------------------------------------------------------------------------
Deployment on a local server:

- Download the zipped folder from Github.
- Copy/move the file to local server root folder (htdocs in xampp and www in wampp).
- Make sure the appplication root folder is not inside another folder, after the extraction.

NOTE: if you change the application root folder name please make sure you also modify the 
      following configuration files inside the application root folder.

      1. app/config/config.php
		- change the URLROOT eg: define('URLROOT', 'http://localhost/newname')
      2. public/.htaccess
		- change RewriteBase to: /newname/public

- if the extraction and the modifications are done correctly, then the application can
  be accessed throught any browser:
		http://localhost/appname  	  
---------------------------------------------------------------------------------------------

Optional:: Windows OS based and using xampp.

Setting up a virtual host site. The virtual host site will allow users to access the system
using the system’s custom domain ‘www.mrataxnet.com’. Follow the steps below to create a virtual 
host for the system.
i.	Navigate to xampp installation folder and open the httpd-vhosts.confi file. The file
	is located in the apache\conf\extra\
ii.	Scroll down to the end of the file and add the following lines:

		<VirtualHost *:80>
			##this is a fallback in case the custom domain is not ##available. 
       			DocumentRoot "C:/xampp/htdocs/"
       			ServerName localhost
		</VirtualHost>

		<VirtualHost *:80>
      			DocumentRoot "C:/xampp/htdocs/mrataxnet"
      			ServerName www.mrataxnet.com
			ErrorLog"C:/xampp/htdocs/mrataxnet/logs/ims-error.log"
       			CustomLog"C:/xampp/htdocs/mrataxnet/logs/ims-access.log" common
		</VirtualHost>

iii.	Now map the custom domain (the system domain) to the local IP address of the server. Navigate
	to: C:\windows\system32\drivers\etc\ and open the hosts file as an administrator. Add the 
	following line at the end of file.

 	127.0.0.1           www.mrataxnet.com 
 
iv.	Save and exit the file.
v.	Restart the xampp server.



