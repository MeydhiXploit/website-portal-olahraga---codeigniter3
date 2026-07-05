CREATE TABLE IF NOT EXISTS `foul_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sport_type` int NOT NULL,
  `foul_name` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sport_type` (`sport_type`),
  CONSTRAINT `foul_type_ibfk_1` FOREIGN KEY (`sport_type`) REFERENCES `sport_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS `foul` (
  `id` int NOT NULL AUTO_INCREMENT,
  `minute` time NOT NULL,
  `foul_type` int NOT NULL,
  `match_id` int NOT NULL,
  `athlete_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `foul_type` (`foul_type`),
  KEY `match_id` (`match_id`),
  KEY `athlete_id` (`athlete_id`),
  CONSTRAINT `foul_ibfk_1` FOREIGN KEY (`foul_type`) REFERENCES `foul_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `foul_ibfk_2` FOREIGN KEY (`match_id`) REFERENCES `sport_match` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `foul_ibfk_3` FOREIGN KEY (`athlete_id`) REFERENCES `sport_athlete` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
