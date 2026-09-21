DROP TABLE IF EXISTS films;
CREATE TABLE films (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    year SMALLINT UNSIGNED NOT NULL,
    duration SMALLINT UNSIGNED NOT NULL,
    CONSTRAINT chk_title
        CHECK (CHAR_LENGTH(TRIM(title)) > 0),
    CONSTRAINT chk_year
        CHECK (year BETWEEN 1888 AND 2100),
    CONSTRAINT chk_duration
        CHECK (duration BETWEEN 1 AND 1000)
);

INSERT INTO films (id, title, year, duration)
VALUES
    (NULL, 'The Shawshank Redemption', 1994, 142),
    (NULL, 'The Matrix', 1999, 136),
    (NULL, 'Jaws', 1975, 124),
    (NULL, 'Jurassic Park', 1993, 127),
    (NULL, 'Interstellar', 2014, 169);