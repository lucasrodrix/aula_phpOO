<?php
declare(strict_types=1);

// Crie uma data com a Classe DateTime com a data e hora atuais.
// Em seguida subtraia 5dias, 10 horas e 50 minutos dessta data 
// O resultado dessa data deve ser exibida no formato dia/mes/ano - hora:minuto:segundo
date_default_timezone_set('America/Sao_Paulo');

$data = new \DateTime();
echo "Data e Horas Atuais: ".$data->format('d/m/Y - H:i:s')."<br/>";

$data->sub(new \DateInterval("P5DT10H50M"));
echo "Data e Hora -(-5dias, -10horas, -50min): ".$data->format('d/m/Y - H:i:s');
