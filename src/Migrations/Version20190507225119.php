<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190507225119 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contato (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(25) NOT NULL, telefone VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE endereco (id INT AUTO_INCREMENT NOT NULL, quadra VARCHAR(25) NOT NULL, numero VARCHAR(10) NOT NULL, observacao VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');

        // Adding seeds...
        $this->addSql('INSERT INTO contato(nome, telefone) VALUES(\'Ana\',   \'61982567348\')');
        $this->addSql('INSERT INTO contato(nome, telefone) VALUES(\'João\',  \'61998762233\')');
        $this->addSql('INSERT INTO contato(nome, telefone) VALUES(\'José\',  \'61982436589\')');
        $this->addSql('INSERT INTO contato(nome, telefone) VALUES(\'Maria\', \'61982436567\')');
        $this->addSql('INSERT INTO contato(nome, telefone) VALUES(\'Paulo\', \'61999762376\')');

        $this->addSql('INSERT INTO endereco(quadra, numero, observacao) VALUES(\'SCS Quadra 1\',         \'1\', \'Localizado no Setor Comercial Sul\')');
        $this->addSql('INSERT INTO endereco(quadra, numero, observacao) VALUES(\'SCIA Quadra 8\',        \'8\', \'Localizado no SIA\')');
        $this->addSql('INSERT INTO endereco(quadra, numero, observacao) VALUES(\'SOF Sul Quadra 9\',     \'9\', \'Localizado no SOF Sul\')');
        $this->addSql('INSERT INTO endereco(quadra, numero, observacao) VALUES(\'Guará Quadra Qe 20\',  \'20\', \'Localizado no Guará\')');
        $this->addSql('INSERT INTO endereco(quadra, numero, observacao) VALUES(\'Asa Sul CLS 114\',    \'114\', \'Localizado na Asa Sul\')');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contato');
        $this->addSql('DROP TABLE endereco');
    }
}
