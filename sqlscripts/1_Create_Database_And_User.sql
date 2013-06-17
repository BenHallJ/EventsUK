-- Create the Database --
CREATE DATABASE IF NOT EXISTS BenJHall;

-- Create a web user --
CREATE USER WebUser@localhost IDENTIFIED BY 'P5L=;71^#rKeBMlcj<!p';

-- Grant limited privileges --
GRANT SELECT, INSERT, UPDATE ON BenJHall.* TO WebUser@localhost;