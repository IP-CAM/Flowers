<?php
class ModelCatalogInstructions extends Model
{
    public function getAllInstructions()
    {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "flower_instructions ORDER BY date DESC");
        return $query->rows;
    }
}