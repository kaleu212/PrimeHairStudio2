<?php

$servicos = [
    [
        "nome" => "Barba",
        "categoria" => "barba",
        "tempo" => "30 min",
        "preco" => 60
    ],
    [
        "nome" => "Cabelo e Barba",
        "categoria" => "cabelo",
        "tempo" => "60 min",
        "preco" => 115
    ],
    [
        "nome" => "Cabelo e Sobrancelha",
        "categoria" => "sobrancelha",
        "tempo" => "30 min",
        "preco" => 80
    ],
    [
        "nome" => "Cabelo, Barba e Sobrancelha",
        "categoria" => "cabelo",
        "tempo" => "60 min",
        "preco" => 135
    ]
];

function formatarPreco($preco)
{
    return "R$ " . number_format($preco, 2, ',', '.');
}

function filtrarPorCategoria($servicos, $categoria)
{
    $resultado = [];

    foreach ($servicos as $servico) {

        if ($servico["categoria"] == $categoria) {
            $resultado[] = $servico;
        }

    }

    return $resultado;
}