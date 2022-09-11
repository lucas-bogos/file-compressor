## File Compressor

O File Compressor é um sistema para compressão de arquivos do tipo ``` .rar ```, ``` .zip ``` e ``` .tar ```, é construido usando o pattern Strategy, para melhor manutenção e qualidade de código.

### Afinal, o que é Padrão Strategy?

É um dos mais conhecidos padrão de projeto, feito pela __Gang of Four__. O Strategy é usado quando temos um caso em que os comportamentos entre algoritimos são semelhantes, sendo diferente a implementação do mesmo.

### Por que usar Padrão Strategy?

Simplesmente fácil manutenção, vamos supor que precisamos adicionar uma nova forma de compactação, ou trocar, fariámos poucas mudanças e já resolveria o problema.

### UML da aplicação

A construção é baseada no Strategy, para solução do problema de compressão de arquivos.

<img src="/docs/assets/file-compressor-strategy.jpeg">

### Como rodar a aplicação?

```

$ chmod +x $(pwd)/scripts/*

$ ./scripts/update-composer.sh && ./scripts/start-server.sh

```
