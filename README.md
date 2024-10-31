DISCLAMER
this git project is lacking a composer router and somme nginx configuration please dont use it as refference

# PHP-server
wellcome to my PHP server repo

this repository run on a docker with nginx 
for it to run you need to make a .env file 
in the docker file with the folowing keys

      MYSQL_ROOT_PASSWORD: "your_password"
      MYSQL_DATABASE: "your_db_name"

in the database.php file replace

        $db_pass = "your_password";
        $db_name = "your_db_name";

you will also need to instal either Docker desktop or the terminal vertion in the project