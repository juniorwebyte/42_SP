#!/bin/bash

# Verifica se nenhum argumento foi passado
if [ $# -eq 0 ]; then
    echo "No arguments supplied"
else
    count=0
    # Loop para percorrer os argumentos
    for arg in "$@"; do
        # Verifica se o número de argumentos não excede 3
        if [ $count -lt 3 ]; then
            echo "$arg"
            ((count++))
        fi
    done
fi
