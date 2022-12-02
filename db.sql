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


-- STEM = S , ABM = A, HUMSS = H, ICT = C, IA = I, HE = E

-- STEM
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I can do complex calculations",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I wonder about the future technology",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I can read a blueprint",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like building things",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I love watching or doing science experiments",'S'); 

-- ABM 
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I can sell things or promote ideas",'ABM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like operating a home business",'ABM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like reading business journals",'ABM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I can see myself running a business in the future",'ABM');

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like budgeting my money",'ABM'); 

-- HUMSS
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I love writing stories, poems, etc.",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like volunteering with social action groups",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I join campus or community activities",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I join campus or community activities",'HUMSS'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like Discussing about Politics",'HUMSS'); 

-- ICT
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I am interested to know about animation",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I enjoy trying to figure out how things work on computers.",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I am interested in programming and game design.",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like creating artwork for different graphic projects, like posters, advertisements, and covers.",'ICT'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"Im interested in robotics.",'ICT'); 

-- IA
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I am mechanically inclined",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5," I can Fix electrical things",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I can Operate tools and machinery",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like Refinishing furniture",'IA'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like Repairing cars, equipment, etc",'IA'); 

-- HE
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like baking and cooking",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like fashion designing",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I enjoy travelling in different places",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I like taking care of my face and body",'HE'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,3,0,-3,-5,"I love helping and assisting people.",'HE'); 
