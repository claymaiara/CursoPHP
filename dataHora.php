<?php

$data = new DateTime("2013-02-12 16:42:33");
echo $data->format("d/m/Y h:i");


/**
 * Data e hora atual
 */
echo '<br />';
$data = new DateTime("now");
echo $data->format("d/m/Y H:i:s");

/**
 * Data de amanh�
 */

echo '<br />';
$data = new DateTime("+1 day"); // Retorna a data de amanh�
echo $data->format("d/m/Y");


/**
 * Outros exemplos de datas textuais
 * 
 * "20 August 2006" - 20/05/2006
 * "+2 day" - A data de depois de amanh�
 * "-1 day" - A data de ontem
 * "+1 week" - A data atual + 1 semana
 * "today" - A data de hoje
 * "tomorrow" - A data de amanh�
 * "2013-01-25 - 5day" - 20/01/2013
 */