<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    //
    public function getNpChauffeurAttribute() {

        return "{$this->prenom} {$this->nom}";
    }
}
