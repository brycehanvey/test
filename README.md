# test

### Requirements:
>
* Apache or NGINX web server
* PHP 7.0
* Bootstrap
* Javascript

## Technologies Used:
> 
* PHP 
* MySQL 
* Bootstrap 
* Javascript


--- 
 
 
* **Step 1 : CREATE DATABASE** 


CREATE DATABASE test;
CREATE TABLE IF NOT EXISTS `test`.`repositories` ( `id` INT AUTO_INCREMENT , ` repository_id` VARCHAR(255) NOT NULL , ` repository_name` VARCHAR(255) NOT NULL , `repository_url` VARCHAR(255) NOT NULL , ` repository_created_date` VARCHAR(255) NOT NULL , `repository_last_push_date` VARCHAR(255) NOT NULL , ` repository_description` VARCHAR(255) NOT NULL , ` number_of_stars` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`) ) ENGINE = InnoDB;

* **Step 2 : Create and run File api.php **
 Uses curl and iterates through projects to load in browser and insert into db
 
 * **Step 3 : Create and run File repolist.php **
 
 Lists the data from the database
 
 * **Step 4 : Create and run File repo_update_form.php and repo_update.php **
 repo_update form displays interface using repo_update that updates db
 
 
 
 
 
