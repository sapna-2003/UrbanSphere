CREATE TABLE events (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cm_id INT NOT NULL,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL,
    event_time TIME NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (cm_id) REFERENCES community_members(id) ON DELETE CASCADE
);
