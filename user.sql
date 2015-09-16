CREATE USER 'clinica'@'%' IDENTIFIED BY 'clinica';
GRANT ALL PRIVILEGES ON clinica.* TO 'clinica'@'%';
FLUSH PRIVILEGES;
