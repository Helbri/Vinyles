<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230803072502 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cla_ent_answer ADD prop_ans_is_question_id INT NOT NULL');
        $this->addSql('ALTER TABLE cla_ent_answer ADD CONSTRAINT FK_D808C1A544BD6BD6 FOREIGN KEY (prop_ans_is_question_id) REFERENCES cla_ent_question (id)');
        $this->addSql('CREATE INDEX IDX_D808C1A544BD6BD6 ON cla_ent_answer (prop_ans_is_question_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cla_ent_answer DROP FOREIGN KEY FK_D808C1A544BD6BD6');
        $this->addSql('DROP INDEX IDX_D808C1A544BD6BD6 ON cla_ent_answer');
        $this->addSql('ALTER TABLE cla_ent_answer DROP prop_ans_is_question_id');
    }
}
