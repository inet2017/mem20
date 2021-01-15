<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201231092602 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos ADD fabricante_id_id INT NOT NULL, ADD estado_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E6A9D60FEE FOREIGN KEY (fabricante_id_id) REFERENCES fabricante (id)');
        $this->addSql('ALTER TABLE productos ADD CONSTRAINT FK_767490E675BF18A5 FOREIGN KEY (estado_id_id) REFERENCES tipo_producto (id)');
        $this->addSql('CREATE INDEX IDX_767490E6A9D60FEE ON productos (fabricante_id_id)');
        $this->addSql('CREATE INDEX IDX_767490E675BF18A5 ON productos (estado_id_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E6A9D60FEE');
        $this->addSql('ALTER TABLE productos DROP FOREIGN KEY FK_767490E675BF18A5');
        $this->addSql('DROP INDEX IDX_767490E6A9D60FEE ON productos');
        $this->addSql('DROP INDEX IDX_767490E675BF18A5 ON productos');
        $this->addSql('ALTER TABLE productos DROP fabricante_id_id, DROP estado_id_id');
    }
}
