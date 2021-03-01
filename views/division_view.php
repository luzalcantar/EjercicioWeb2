<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Resultados</h2>
    </div>
    <div class="panel-body table-responsive">
        <?php 
            foreach ($resultados as $dato) { 
                echo "<p>Operación: <strong>".$dato['dividendo']."/".$dato['divisor']."</strong></p>";
                echo "<p>Resultado: <strong>".$dato['resultado']."</strong></p>";
                echo "<p>Residuo: <strong>".$dato['residuo']."</strong></p>";

                if($dato['residuo']>0){
                    echo "<p class='mensaje'>El numero <strong>".$dato['dividendo']."</strong> no es divisible entre el número <strong>".$dato['divisor']."</strong></p>";
                }else{
                    echo "<p class='mensaje'>El numero <strong>".$dato['dividendo']."</strong> si es divisible entre el número <strong>".$dato['divisor']."</strong></p>";
                }
            } 
        ?>
        
        <a href="index.php" class="btn btn-primary btn-return">Volver al Inicio</a>
    </div>
</div>