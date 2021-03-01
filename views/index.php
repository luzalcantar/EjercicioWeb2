<div class="panel panel-default">
    <div class="panel-heading">
        <h2>División</h2>
    </div>
    <div class="panel-body table-responsive">
        <form action='index.php?a=get_datos' method='post'>
            <div class="in_div">
                <label for="in_dividendo">Dividendo:</label>   
                <input type="number" class="form-control" name="in_dividendo" value="" min="1" step="0.01" required>
                <label for="in_divisor">Divisor:</label>
                <input type="number" class="form-control" name="in_divisor" value="" min="1" step="0.01" required>
            </div>
            <input type='submit' class='btn btn-primary form-control btn-dividir' value='Dividir'>
        </form>
    </div>
</div>
