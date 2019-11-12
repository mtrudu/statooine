<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191112162049 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE draw_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE number_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE draw (id INT NOT NULL, date VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE number (id INT NOT NULL, draw_id INT DEFAULT NULL, value INT NOT NULL, position INT NOT NULL, is_star BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_96901F546FC5C1B8 ON number (draw_id)');
        $this->addSql('ALTER TABLE number ADD CONSTRAINT FK_96901F546FC5C1B8 FOREIGN KEY (draw_id) REFERENCES draw (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE number DROP CONSTRAINT FK_96901F546FC5C1B8');
        $this->addSql('DROP SEQUENCE draw_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE number_id_seq CASCADE');
        $this->addSql('DROP TABLE draw');
        $this->addSql('DROP TABLE number');
    }
}
