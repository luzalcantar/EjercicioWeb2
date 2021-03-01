<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Resultados</h2>
    </div>
    <div class="panel-body table-responsive">
        <?php 
            foreach ($resultados as $dato) { 
                echo $dato['resultado'];
                echo "<br>";
                echo $dato['residuo'];
            } 
        ?>
        <p>Operación: </p>
    </div>
</div>