<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251210084940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE imagen CHANGE nombre nombre VARCHAR(50) NOT NULL, CHANGE categoria categoria INT NOT NULL, CHANGE descripcion descripcion VARCHAR(100) NOT NULL, CHANGE num_visualizaciones num_visualizaciones INT NOT NULL, CHANGE num_likes num_likes INT NOT NULL, CHANGE num_descargas num_descargas INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE imagen CHANGE nombre nombre VARCHAR(50) DEFAULT NULL, CHANGE categoria categoria INT DEFAULT NULL, CHANGE descripcion descripcion VARCHAR(100) DEFAULT NULL, CHANGE num_visualizaciones num_visualizaciones INT DEFAULT NULL, CHANGE num_likes num_likes INT DEFAULT NULL, CHANGE num_descargas num_descargas INT DEFAULT NULL');
    }
}
