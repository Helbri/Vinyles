<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230804070737 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cla_ent_artiste_cla_ent_style (cla_ent_artiste_id INT NOT NULL, cla_ent_style_id INT NOT NULL, INDEX IDX_5423FEFE33AA4A68 (cla_ent_artiste_id), INDEX IDX_5423FEFEFB24A042 (cla_ent_style_id), PRIMARY KEY(cla_ent_artiste_id, cla_ent_style_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cla_ent_artiste_cla_ent_style ADD CONSTRAINT FK_5423FEFE33AA4A68 FOREIGN KEY (cla_ent_artiste_id) REFERENCES cla_ent_artiste (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cla_ent_artiste_cla_ent_style ADD CONSTRAINT FK_5423FEFEFB24A042 FOREIGN KEY (cla_ent_style_id) REFERENCES cla_ent_style (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cla_ent_produit ADD price INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cla_ent_artiste_cla_ent_style DROP FOREIGN KEY FK_5423FEFE33AA4A68');
        $this->addSql('ALTER TABLE cla_ent_artiste_cla_ent_style DROP FOREIGN KEY FK_5423FEFEFB24A042');
        $this->addSql('DROP TABLE cla_ent_artiste_cla_ent_style');
        $this->addSql('ALTER TABLE cla_ent_produit DROP price');
    }
}
