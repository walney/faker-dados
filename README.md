# Geração de um milhão de registros sql aleatórios para testes

Generation of one million sql registers random to tests.

Pesquisei várias alternativas para geração de dados/registros de bancos/sql aleatórios para testes.

Fui desde o generatedata.com, passei por stored procedures, pela criação de arquivos sql usando funções do php para gerar strings e datas aleatórias.

O generatedata.com é muito bom mas online somente gera 100 registros e eu quero gerar um milhão.
Stored procedures e funções do php geram dados bem longe de parecer com dados reais.

Acontece que alguém já havia pensado e investido muito neste assunto e foi a melhor alternativa encontrada, a biblioteca Faker:
https://github.com/fzaninotto/Faker

Muitos recursos para o assunto. Ela já tem variáveis e objetos para vários tipos de dados: nome, email, data, endereço, cidade, estado, pais, etc. 

Sem contar que gera dados localizados, bem aprecidos com dados reais, com nomes brasileiros, por exemplo.
É tanto que esta bibliteca atualmente é utilizada por diversos frameworks.

## Instalação do Faker

Requer o composer instalado globalmente

mkdir /var/www/html/faker

cd /var/www/html/faker

composer require fzaninotto/faker

Agora crie o arquivo acima como index.php na pasta onde instalou o faker, contendo o código para geração dos registros.

Demora para criar o arquivo com um milhão de registros, dependendo do computador demora mais ou menos
Num micro com 4GB de RAM, core i3 ele demorou 20 minutos para gerar o arquivo.

Quanto alterei para usar pt_BR o tempo aumentou para 26 minutos e o tamanho do arquivo de 76MB para 86MB.
Mas valeu a pena pois a opção localizada gera dados mais parecidos com os nossos reais no Brasil.

Para dar uma ideia: para abrir o arquivo no gedit levou 4 minutos.

Veja os exemplos de uso:

million.php - https://raw.githubusercontent.com/ribafs/data-testes/master/million.php

anothers.php - https://raw.githubusercontent.com/ribafs/data-testes/master/anothers.php

## Licença

MIT
