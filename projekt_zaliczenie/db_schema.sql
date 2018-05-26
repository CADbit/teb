CREATE TABLE `users` (
	`id` varchar(15) NOT NULL AUTO_INCREMENT,
	`firstname` varchar(20) NOT NULL,
	`lastname` varchar(20) NOT NULL,
	`email` varchar(20) NOT NULL,
	`created` TIMESTAMP NOT NULL,
	`modified` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `product_categories` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `products` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`platform_id` INT NOT NULL,
	`category_id` INT NOT NULL,
	`name` varchar(20) NOT NULL,
	`description` varchar(100) NOT NULL,
	`stock_amount` INT NOT NULL,
	`price` FLOAT NOT NULL,
	`created` TIMESTAMP NOT NULL,
	`modified` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`user_id` varchar(15) NOT NULL,
	`total_price` FLOAT NOT NULL,
	`status` varchar(1) NOT NULL,
	`created` TIMESTAMP NOT NULL,
	`modified` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders_list` (
	`id` INT NOT NULL,
	`product_id` INT NOT NULL,
	`amount` INT NOT NULL,
	`price` FLOAT NOT NULL
);

CREATE TABLE `product_platforms` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `products` ADD CONSTRAINT `products_fk0` FOREIGN KEY (`platform_id`) REFERENCES `product_platforms`(`id`);

ALTER TABLE `products` ADD CONSTRAINT `products_fk1` FOREIGN KEY (`category_id`) REFERENCES `product_categories`(`id`);

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);

ALTER TABLE `orders_list` ADD CONSTRAINT `orders_list_fk0` FOREIGN KEY (`id`) REFERENCES `orders`(`id`);

ALTER TABLE `orders_list` ADD CONSTRAINT `orders_list_fk1` FOREIGN KEY (`product_id`) REFERENCES `products`(`id`);
