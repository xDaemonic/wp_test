db:
	docker exec -i wp-mysql-test mysql -uroot -ppass  <<< "CREATE DATABASE wp_database COLLATE utf8mb3_general_ci"

wpi:
	docker exec -i wp-php-test bash <<< "cd /var/www/domains && wget https://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz -C ./ && mv ./wordpress/* ./wp/ && rm -rf ./wordpress && rm -rf ./latest.tar.gz"

upload:
	git add -A && git commit -m "batch update" && git pull && git push

dup:
	docker compose up -d

dde:
	docker compose down

pb:
	docker exec -it wp-php-test bash
