CREATE TABLE IF NOT EXISTS Competitions 
(
	`id` int AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(240) not null,
	`duration` int DEFAULT 1,
	`expires` TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL `duration` DAY)),
    `current_reward` int DEFAULT (`starting_reward`),
	`starting_reward` int DEFAULT 1,
	`join_fee` int DEFAULT 0,
	`current_participants` int DEFAULT 0,
	`min_participants` int DEFAULT 3,
	`paid_out` boolean DEFAULT false,
	`did_calc` boolean DEFAULT false,
	`min_score` int DEFAULT 1,
    `first_place_per` int DEFAULT 60,
	`second_place_per` int DEFAULT 30,
	`third_place_per` int DEFAULT 10,
	`cost_to_create` int DEFAULT 0,
    `created_by` int,  
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
	FOREIGN KEY (`created_by`) REFERENCES Users(`id`),
    check (`min_score` >= 1),
    check (`starting_reward` >= 1),
    check (`current_reward` >= `starting_reward`),
    check (`min_participants` >= 3),
    check (`current_participants` >= 0),
    check (`join_fee` >= 0),
	check (`first_place_per` + `second_place_per` + `third_place_per` = 100)
)