<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230622121842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "order" ADD delivery_price DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE "order" ADD is_paid BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE "order" ADD method VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "order" ADD reference VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE "order" ADD stripe_session_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE "order" ADD paypal_order_id VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE "order" DROP delivery_price');
        $this->addSql('ALTER TABLE "order" DROP is_paid');
        $this->addSql('ALTER TABLE "order" DROP method');
        $this->addSql('ALTER TABLE "order" DROP reference');
        $this->addSql('ALTER TABLE "order" DROP stripe_session_id');
        $this->addSql('ALTER TABLE "order" DROP paypal_order_id');
    }
}
