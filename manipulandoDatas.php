<?php

$data = new DateTime();

/*
    -> P Representação de período: vem antes de dia, mes, ano e semana
    Y->Anos / M->meses / D->Dias / W->stream_context_set_params

    ->T representação de Tempo: vem antes de Horas, Minutos e Segundos
    H->Horas / M->Minutos / S->Segundos
*/

$intervalo = new DateInterval('P5YT5M');
$data->add($intervalo);
$data->sub($intervalo);
print_r($data);