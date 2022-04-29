CREATE TABLE IF NOT EXISTS CreditsHistory
(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int,
    credit_diff int,
    reason varchar(30) not null,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)