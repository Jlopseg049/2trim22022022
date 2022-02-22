<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220213143013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE author_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE canal_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE reserva_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE roles_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE rutina_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE author (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE canal (id INT NOT NULL, author_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, precio DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_E181FB59F675F31B ON canal (author_id)');
        $this->addSql('CREATE TABLE reserva (id INT NOT NULL, cliente_id INT NOT NULL, canal_id INT NOT NULL, fecha_inicio TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fecha_fin TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, precio DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_188D2E3BDE734E51 ON reserva (cliente_id)');
        $this->addSql('CREATE INDEX IDX_188D2E3B68DB5B2E ON reserva (canal_id)');
        $this->addSql('CREATE TABLE roles (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE rutina (id INT NOT NULL, cliente_id INT NOT NULL, canal_id INT NOT NULL, fecha_inicio TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fecha_fin TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, precio DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_A48AB255DE734E51 ON rutina (cliente_id)');
        $this->addSql('CREATE INDEX IDX_A48AB25568DB5B2E ON rutina (canal_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(40) NOT NULL, name VARCHAR(255) NOT NULL, ap1 VARCHAR(255) NOT NULL, ap2 VARCHAR(255) DEFAULT NULL, foto VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON "user" (username)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
        $this->addSql('ALTER TABLE canal ADD CONSTRAINT FK_E181FB59F675F31B FOREIGN KEY (author_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3BDE734E51 FOREIGN KEY (cliente_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3B68DB5B2E FOREIGN KEY (canal_id) REFERENCES canal (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE rutina ADD CONSTRAINT FK_A48AB255DE734E51 FOREIGN KEY (cliente_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE rutina ADD CONSTRAINT FK_A48AB25568DB5B2E FOREIGN KEY (canal_id) REFERENCES canal (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE reserva DROP CONSTRAINT FK_188D2E3B68DB5B2E');
        $this->addSql('ALTER TABLE rutina DROP CONSTRAINT FK_A48AB25568DB5B2E');
        $this->addSql('ALTER TABLE canal DROP CONSTRAINT FK_E181FB59F675F31B');
        $this->addSql('ALTER TABLE reserva DROP CONSTRAINT FK_188D2E3BDE734E51');
        $this->addSql('ALTER TABLE rutina DROP CONSTRAINT FK_A48AB255DE734E51');
        $this->addSql('DROP SEQUENCE author_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE canal_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE reserva_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE roles_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE rutina_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE canal');
        $this->addSql('DROP TABLE reserva');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE rutina');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
