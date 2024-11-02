<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241102164520 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alumno ADD COLUMN foto VARCHAR(255)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__alumno AS SELECT id, nombre, apellidos, grado, edad, seccion FROM alumno');
        $this->addSql('DROP TABLE alumno');
        $this->addSql('CREATE TABLE alumno (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nombre VARCHAR(75) NOT NULL, apellidos VARCHAR(75) NOT NULL, grado VARCHAR(255) NOT NULL, edad INTEGER NOT NULL, seccion VARCHAR(75) DEFAULT NULL)');
        $this->addSql('INSERT INTO alumno (id, nombre, apellidos, grado, edad, seccion) SELECT id, nombre, apellidos, grado, edad, seccion FROM __temp__alumno');
        $this->addSql('DROP TABLE __temp__alumno');
    }
}
