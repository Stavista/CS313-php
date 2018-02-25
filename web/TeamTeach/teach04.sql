CREATE TABLE note
(
	note_ID 	  SERIAL  NOT NULL PRIMARY KEY,
	user_ID 	  INTEGER NOT NULL REFERENCES _user(user_ID),
	talk_ID 	  INTEGER NOT NULL REFERENCES talk(talk_ID),
	note_content  VARCHAR(300) 
);

CREATE TABLE _user
(
	user_ID        SERIAL NOT NULL PRIMARY KEY,
	username       VARCHAR(20),
	password       VARCHAR(20)
);

CREATE TABLE speaker
(
	speaker_ID     SERIAL NOT NULL PRIMARY KEY,
	name 	       VARCHAR(20),
	position       VARCHAR(20)
);

CREATE TABLE conference
(
	conference_ID  SERIAL NOT NULL PRIMARY KEY,
	month          INTEGER,
	year	       INTEGER
);

CREATE TABLE talk
(
	talk_ID        SERIAL  NOT NULL PRIMARY KEY,
	speaker_ID     INTEGER NOT NULL REFERENCES speaker(speaker_ID),
	conference_ID  INTEGER NOT NULL REFERENCES conference(conference_ID)
);