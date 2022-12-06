CREATE DATABASE riasec_test ;
USE riasec_test;

CREATE TABLE statements(
 statement_id integer(3),
 statement_content varchar(255) not null,
 statement_category varchar(5),
 PRIMARY KEY (statement_category,statement_id)
);

CREATE TABLE personality_test_scores(
	id integer PRIMARY KEY AUTO_INCREMENT,
	stem float(5,2),
	abm float(5,2), 
	humss float(5,2), 
	ict float(5,2), 
	ia float(5,2), 
	he float(5,2),
	result varchar(5) not null
);

CREATE TABLE fb(
 fb_id integer(11),
 fb_name varchar(255),
 fb_message text(),
 PRIMARY KEY (statement_id)
);


-- STEM = S , ABM = A, HUMSS = H, ICT = C, IA = I, HE = E

-- STEM
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"I can do complex calculations",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"I wonder about the future technology",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"I can read a blueprint",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"I like building things",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"I love watching or doing science experiments",'S'); 

-- ABM 
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"I can sell things or promote ideas",'ABM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"I like operating a home business",'ABM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"I like reading business journals",'ABM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"I can see myself running a business in the future",'ABM');

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"I like budgeting my money",'ABM'); 

-- HUMSS
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"I love writing stories, poems, etc.",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"I like volunteering with social action groups",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"I join campus or community activities",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"I like Giving talks or speeches",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"I like Discussing about Politics",'HUMSS'); 

-- ICT
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"I am interested to know about animation",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"I enjoy trying to figure out how things work on computers.",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"I am interested in programming and game design.",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"I like creating artwork for different graphic projects, like posters, advertisements, and covers.",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"Im interested in robotics.",'ICT'); 

-- IA
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"I am mechanically inclined",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2," I can Fix electrical things",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"I can Operate tools and machinery",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"I like Refinishing furniture",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"I like Repairing cars, equipment, etc",'IA'); 

-- HE
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"I like baking and cooking",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"I like fashion designing",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"I enjoy travelling in different places",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"I like taking care of my face and body",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"I love helping and assisting people.",'HE'); 

