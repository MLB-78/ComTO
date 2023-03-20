
<br><br>


<div class="container">
    
    
    <div class="accueil2">
        
        <!-- Image TO.php bamenda , douala , autre  -->
    
    </div>

    <br><br>

    
    <table class="table table-striped table-light">

        <thead>
            <tr>
                <th scope="col">Numéro</th>
                <th scope="col">Tours Opérateurs</th>
                <th scope="col">Pays Cibles</th>
            </tr>
        </thead>

        <tbody>  
        <?php 

        foreach($TO as $To){
            
            
        // Tu as séléctionnez toutes la table tours donc tu as juste  
        // à préciser à ta variable qui contient tout plus le nom de ta tables existantes

                echo"
                    
                    <tr>
                    <th scope='row'>$To->num</th>
                    <td>$To->tours</td>
                    <td>$To->pays_cible</td>
                    </tr>
                    
                ";

        }

        ?>
        </tbody>
        
    </table>

</div>

<br><br>

