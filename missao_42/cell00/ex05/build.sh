#!/bin/bash

# Verifica se foram passados argumentos para o script
if [ $# -eq 0 ]; then
    echo "No arguments supplied"
else
    # Para cada argumento, cria o diretório com o prefixo "ex"
    for arg in "$@"; do
        mkdir "ex$arg"
    done
fi