CREATE DATABASE satrs_db ;
USE satrs_db;

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

CREATE TABLE IF NOT EXISTS `reviews` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`page_id` int(11) NOT NULL,
	`name` varchar(255) NOT NULL,
	`content` text NOT NULL,
	`rating` tinyint(1) NOT NULL,
	`submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(1, 1, ' Christine Cion', 'Syempre Gawa Ko To Dapat 5 Star To', 5, '2023-01-09 20:43:02'),
(2, 1, 'Ziencute', 'Syempre Gawa Ni Cion To Kaya Dapat 5 Star To!', 5, '2023-01-09 21:00:41'),
(3, 1, 'Rimuru Tempest', 'Sugoi!', 4, '2023-01-09 21:10:16'),
(4, 1, 'Kwizzz', 'Oks na oks', 5, '2023-01-09 23:51:05'),
(5, 1, 'Alliah Banut', 'Thank You For This! It’s So Nice !', 5, '2023-01-14 21:54:24'),
(6, 1, 'Frances Candado', '10 Stars Sana Ibibigay Kaso 5 Lang Ang Pwede!', 5, '2023-01-16 17:34:27'),
(7, 1, 'Samantha Nicole Toribio', 'I Am Truly Impressed!', 5, '2023-01-16 17:35:12'),
(8, 1, 'Christine Mojeno', 'Keep It Up!!!', 5, '2023-01-16 17:36:03'),
(9, 1, 'Kim', 'I’m Really Impressed!!! To Those Who’s Behind, I Know You’ve Showcased Your Skills And Attributes Which Is Really Excellent. Thankyou For Giving Me The Chance To Experience It, And I Really Enjoyed Answering The Questions And They Recommend The Best Track Which Is Really Amazing!!!! Kudos!!! I Will Give 100 Stars!!! Hahahaha Kidding!', 5, '2023-01-16 17:36:34'),
(10, 1, 'Zyrone Navarro', 'The Strand Recommended To Me Is Exactly Right! Luv It <3', 5, '2023-01-16 17:37:48'),
(11, 1, 'Shierhein', 'SUPER NICE AND NAKAKAGULAT DIN KASI HINDI KO MINSAN NAISIP GANON LALABAS NA RESULT SA’KIN :O', 5, '2023-01-16 17:39:17'),
(12, 1, 'Shouiee', 'Galing :)', 5, '2023-02-16 17:40:28'),
(13, 1, 'Ziennn', 'Precise!', 5, '2023-02-16 19:34:08'),
(14, 1, 'Dave', 'Sheeeshh', 5, '2023-02-29 18:40:36');


-- STEM = S , ABM = A, HUMSS = H, ICT = C, IA = I, HE = E

-- STEM
INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(1,"I can do complex calculations",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(2,"I wonder about the future technology",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(3,"I can read a blueprint",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(4,"I like building things",'STEM'); 

INSERT INTO statements(statement_id ,statement_content ,statement_category)VALUES(5,"I love watching or doing science experiments",'STEM'); 

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

