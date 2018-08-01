
/*授权用户格式*/
GRANT PRIVILEGES ON  databasename.tablename  TO  ‘username’@‘host’;

GRANT ALL ON * TO ‘test’@‘localhost’;
SET GLOBAL character_set_database=utf8`user`;
SHOW VARIABLES LIKE ‘%CHAR%;

INSERT INTO message(title,content,created_at,user_name) VALUES('赵','中',1533095727,'豪');