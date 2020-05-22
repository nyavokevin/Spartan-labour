<?php 

namespace App\Repositories;

use App\Models\User;
use App\Models\Client;

interface Fonctionnality{


    /**
     * Saving Client
     *
     * @param $cient, $user
     */
    public function saveClient(User $user, Client $client);

}

?>