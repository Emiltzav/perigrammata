MySQL cheatsheet: 
https://gist.github.com/hofmannsven/9164408

Export database backup:   
mysqldump -u [username] -p [database] > db_backup_name.sql 

Copy database backup (.sql file) from container to host: 
sudo docker cp mmf13122021_final_db_1:/db_backup_200422.sql .

Import a database dump (more info here): 
mysql -u [username] -p -h localhost [database] < db_backup.sql
