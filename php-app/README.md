# learndocker
uploading my basic project for the reference
#command to copy sql file to the db in the container 
manual cmd /c "docker exec -i 84e26e303757 mysql -uroot -pexample company1  < usersmain.sql"
#added new dockerfile for DB

Compose command 
docker compose up -d
To down
docker compose down 