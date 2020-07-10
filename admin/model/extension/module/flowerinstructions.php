<?php
class ModelExtensionModuleFlowerinstructions extends Model
{
    // Creation de la table flower_instructions
    public function createTable()
    {
        $this->db->query('CREATE TABLE IF NOT EXISTS ' . DB_PREFIX . 'flower_instructions (
            flower_id int(11) NOT NULL AUTO_INCREMENT,
            flower_type varchar(46) DEFAULT NULL,
            flower_instruction TEXT DEFAULT NULL,
            PRIMARY KEY (flower_id)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;');
    }

    // Ajout de 3 entrées dans la table flower_instructions
    public function seedTable()
    {
        $this->db->query('INSERT INTO ' . DB_PREFIX . 'flower_instructions (flower_type, flower_instruction)
        VALUE
        ("lavande", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),
        ("violette", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),
        ("rose", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")');
    }

    // Desinstallation de la table flower_instructions
    public function dropTable()
    {
        $this->db->query("DROP TABLE " . DB_PREFIX . "flower_instructions");
    }
}
