<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240806074259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, gender VARCHAR(10) NOT NULL, name JSON NOT NULL COMMENT \'(DC2Type:json)\', location JSON NOT NULL COMMENT \'(DC2Type:json)\', email VARCHAR(255) NOT NULL, login JSON NOT NULL COMMENT \'(DC2Type:json)\', dob JSON NOT NULL COMMENT \'(DC2Type:json)\', registered JSON NOT NULL COMMENT \'(DC2Type:json)\', phone VARCHAR(20) NOT NULL, cell VARCHAR(20) NOT NULL, identification JSON NOT NULL COMMENT \'(DC2Type:json)\', picture JSON NOT NULL COMMENT \'(DC2Type:json)\', nat VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE customers');
    }
}
