CREATE TABLE `clientes`.`compras` (`id` INT NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(255) NOT NULL , `lastname` VARCHAR(255) NOT NULL , `quantity` INT NOT NULL , `value` DOUBLE NOT NULL , `product` VARCHAR(255) NOT NULL , `details` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `compras` (`id`, `firstname`, `lastname`, `quantity`, `value`, `product`, `details`) VALUES ('1', 'David', 'Santos', '10', '100', 'Smartphone', 'Preto'), ('2', 'Maria', 'DB', '20', '10', 'dados', 'branco')

INSERT INTO `compras` (`id`, `firstname`, `lastname`, `quantity`, `value`, `product`, `details`) VALUES ('3', 'João', 'Reis', '50', '10', 'Smartphone', 'Branco'), ('4', 'Rosana', 'Silva', '30', '100', 'Controle', 'Azul')

