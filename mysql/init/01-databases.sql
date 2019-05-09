CREATE DATABASE IF NOT EXISTS `primary`;
CREATE DATABASE IF NOT EXISTS `secondary`;

# create root user and grant rights
CREATE USER 'angage'@'localhost' IDENTIFIED BY 'Angage@123';
GRANT ALL ON *.* TO 'angage'@'%';