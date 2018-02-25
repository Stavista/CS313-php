CREATE DATABASE team7;


CREATE TABLE _user (
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(20),
	password VARCHAR(250)
);

CREATE USER temp WITH LOGIN PASSWORD 'pass';
GRANT SELECT, INSERT, UPDATE ON _user TO temp;