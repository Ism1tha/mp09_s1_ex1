<?php 

use App\Helpers\HistoryHelper; 

?>


<form id="string-calculator-form" method="POST" onsubmit="onSubmitString(event)">
    <input type="text" id="string" name="string" value="" placeholder="Introduce una cadena de text" required>
    <input type="text" id="string2" name="string2" value="" placeholder="Introduce una segona cadena de text" required>
    <label for="concat">Concatenar</label>
    <input type="radio" id="concat" name="operation" value="concat" required>
    <label for="remove">Eliminar</label>
    <input type="radio" id="remove" name="operation" value="remove">
    <button type="submit">Calcular</button>
    <button type="reset">Limpiar</button>
</form>
<?php if($request['request_method'] == 'POST'): ?>
    <div class="result">
        <h2>Resultado de la operación</h2>
        <p>
            <?php echo $result->getExpression(); ?> = <?php echo $result->getResult(); ?>
        </p>
    </div>
<?php endif; ?>

<?php
HistoryHelper::renderHistory(2);
?>