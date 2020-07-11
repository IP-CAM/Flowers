<?php
class ModelCatalogInstructions extends Model
{
    /**
     * Retourne toute les les entrées de la table flower_instructions.
     *
     * @return rows
     */
    public function getAllInstructions()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "flower_instructions");
        return $query->rows;
    }
}
