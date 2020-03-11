CREATE TABLE `scottpa_db`.`diseases` ( 
`id` INT AUTO_INCREMENT , 
`name` VARCHAR(255) NOT NULL , 
`link` VARCHAR(255) , 
`symptoms` VARCHAR(1000) , 
`causes` VARCHAR(1000) , 
`risk_factor` VARCHAR(1000) ,
`overview` VARCHAR(1000) , 
`treatment` VARCHAR(1000) , 
`medication` VARCHAR(1000) , 
`home_remedies` VARCHAR(1000) ,  
PRIMARY KEY (`id`)) ENGINE = InnoDB;
