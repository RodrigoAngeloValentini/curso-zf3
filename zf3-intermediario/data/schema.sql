CREATE TABLE post (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  title VARCHAR(255) NOT NULL,
  content TEXT NOT NULL
);

INSERT INTO post(title,content) VALUES('Post 1','Content 1');
INSERT INTO post(title,content) VALUES('Post 2','Content 2');
INSERT INTO post(title,content) VALUES('Post 3','Content 3');
INSERT INTO post(title,content) VALUES('Post 4','Content 4');

CREATE TABLE users (
  id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  username VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(60),
  full_name VARCHAR (150) NOT NULL
);

/*SENHA=123456*/
INSERT INTO users(username,password,full_name) VALUES ('user@user.com','$2y$10$T7HurkXzubrTuK3uD0ozS.4omZ7AZ7P3p.DTm4yRud4g0t3u1066i','User');