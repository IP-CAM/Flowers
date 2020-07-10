<?php
class ModelExtensionModulesFlowerinstructions extends Model
{
    // Creation de la table flower_instructions
    public function createTable()
    {
        $this->db->query('CREATE TABLE IF NOT EXISTS ' . DB_PREFIX . 'flower_instructions (
            flower_id int(11) NOT NULL AUTO_INCREMENT,
            flower_type varchar(46) DEFAULT NULL,
            flowe_instruction TEXT DEFAULT NULL,
            PRIMARY KEY (flower_id)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;');
    }

    // Desinstallation de la table flower_instructions
    public function dropTable()
    {
        $this->db->query("DROP TABLE " . DB_PREFIX . "flower_instructions");
    }
}
