<?php

function sexo(){
   
    ?>
    <p class="input_sexo" id="sexo" align="left">Sexo
    <?php include "../config/conectardb.php.php"; 
        $query_sexo = pg_query($db,"SELECT * FROM sexo ORDER BY idsexo ASC");
        pg_close($db);
        $result_sexo = pg_num_rows($query_sexo);
    ?>
        <select class="select_sexo" name="sexo" >            
        <?php 
            if ($result_sexo > 0) 
            {
                while ($sexo = pg_fetch_array($query_sexo)) {
        ?>
            <option value="<?php echo $sexo["idsexo"]; ?>"><?php echo $sexo["sexo"] ?></option>
        <?php 
                }
            }
        ?>  
        </select>
    </p>
    <?php 
    }   
    ?> 
            