<?php

use Phinx\Migration\AbstractMigration;

class SeedUsersTable extends AbstractMigration
{
  public function up(){
      $password_hash = password_hash('verysecret', PASSWORD_DEFAULT);

      $this->execute("
        INSERT INTO users (first_name, last_name, email, pasword)
        VALUES
        ('Manus', 'Sweeney', 'myson@awesome.com', '$password_hash')
      ")
  }

  public function down(){
    
  }
}
