<?php 

use App\Helpers\HistoryHelper; 

?>

<!-- Calculator Form -->
<form id="numeric-calculator-form" method="POST" onsubmit="onSubmitNumeric(event)">
    <!-- Input for expression -->
    <input type="text" id="expression" name="expression" placeholder="Introduzca una expresión" required
        autocomplete="off" autofocus readonly>
    <!-- Grid template for buttons -->
    <div class="grid-container">
        <button type="button" onclick="addElementToNumericExpression('1')">1</button>
        <button type="button" onclick="addElementToNumericExpression('2')">2</button>
        <button type="button" onclick="addElementToNumericExpression('3')">3</button>
        <button type="button" onclick="addElementToNumericExpression('+')">+</button>
        <button type="button" onclick="addElementToNumericExpression('4')">4</button>
        <button type="button" onclick="addElementToNumericExpression('5')">5</button>
        <button type="button" onclick="addElementToNumericExpression('6')">6</button>
        <button type="button" onclick="addElementToNumericExpression('-')">-</button>
        <button type="button" onclick="addElementToNumericExpression('7')">7</button>
        <button type="button" onclick="addElementToNumericExpression('8')">8</button>
        <button type="button" onclick="addElementToNumericExpression('9')">9</button>
        <button type="button" onclick="addElementToNumericExpression('*')">*</button>
        <button type="button" onclick="addElementToNumericExpression('0')">0</button>
        <button type="button" onclick="addElementToNumericExpression('.')">.</button>
        <button type="button" onclick="addElementToNumericExpression('/')">/</button>
        <button type="button" onclick="addElementToNumericExpression('('">(</button>
        <button type="button" onclick="addElementToNumericExpression(')')">)</button>
        <button type="button" onclick="addElementToNumericExpression('^')">^</button>
        <button type="button" onclick="addElementToNumericExpression('!')">!</button>
    </div>
    <button type="submit">Calcular</button>
    <button type="reset">Limpiar</button>
</form>
<!-- Result -->
<?php if($request['request_method'] == 'POST'): ?>
    <div class="result">
        <h2>Resultado de la operación</h2>
        <p>
            <?php echo $result->getExpression(); ?> = <?php echo $result->getResult(); ?>
        </p>
    </div>
<?php endif; ?>

<?php
HistoryHelper::renderHistory(1);
?>