# INTRODUÇÃO #
SCANNER INURL 1.0

É uma ferramenta feita em PHP, que utiliza o motor de busca GOOGLE, para filtrar resultadas de acordo com os parâmetros passados.
Deve ser usado em terminal se for a versão console.

BUSCA POSSÍVEIS VULNERABILIDADES

SQLI(MySQL,MS ACCESS,Microsoft SQL Server,ORACLE,POSTGRESQL) OU ERROS DE PROGRAMAÇÃO.

OPÇÕES PARA SETAR PROXY.

MUDAR O MOTOR DE BUSCA GOOGLE 202 DISPONÍVEIS.

SETAR EXPLOIT.

PERSONALIZAR PROCURA DE ERROS DENTRO DE CADA URL ENCONTRADA.

GRUPO GOOGLEINURL BRASIL - PESQUISA AVANÇADA.


Parâmetros para filtro (Dorks) de URL's utilisa-se operadores especiais do Google.

O operadores especiais google são parâmetros que dão mais controle ao usuário em suas pesquisas.

Exemplo:

### Filtro por domínio. ###
### site:Domínio ###
```
site:.gov.br //Filtro o domínio governo brasileiro.
site:.com.br //Filtro o domínio brasileiro.
```
### Filtro de URL. ###
### inurl:Na URL. ###
```
inurl:index.php?id= //Toda url que contenha "index.php?id="
inurl:/midia/index.php?id= //Toda url que contenha "/midia/index.php?id="
```

### Leia mais sobre: ###
  * [Operadores de pesquisa](https://support.google.com/websearch/answer/136861?hl=pt-BR)


  * [O que é Google Hacking ?](http://blog.inurl.com.br/2011/01/o-que-e-google-hacking.html)


  * [Usando o Google para se defender de ataques:](http://blog.inurl.com.br/2011/01/introducao-usando-o-google-para-se.html)


# Necessário para execução do aplicativo #

|Sistema operacional|	LINUX|
|:------------------|:-----|
|Versão PHP        |	5.4.7|
|versão cURL versão|	7.24.0|
|LIB                |	php5-curl|
|cURL suporte       |	enabled|
|PHP allow\_url\_fopen|	 On  |
|Permissão         |	Leitura & Escrita|

### Instalando pacotes. ###
$sudo apt-get update

Em seguida instale os seguintes programas:

$sudo apt-get install php5  php5-curl

OBS:_O script deve ser executado em um terminal._



```
    --host="www.google.com.br"
    --dork="sua dork"
    --arquivo="seusResultados.txt"
    --tipoerro="1 ou 2"
    --exploit="O que vai ser injetado no final de cada url" 
    --achar="Funciona com Tipoerro 2 para procurar strings personalizadas em cada URL"       
    --ipproxy="IP PROXY EX: 172.16.0.150"        
    --porta="PORTA do proxy"
```


> O PARÂMETRO --tipoerro tem duas opções:

  * 1 - O Scanner vai procurar erros padrões do script SQLI(MySQL,MS ACCESS,Microsoft SQL Server,ORACLE,POSTGRESQL) OU ERROS DE PROGRAMAÇÃO.
> > O mesmo vinculado com seu EXPLOIT que pode ser deixado vazio --exploit="" o exploit sempre será usado no final das URL'S,Padrão básico sqlinjection.

  * 2 - Opção para personalizar sua execução onde é habilitado o parâmetro --achar="",Achar funciona para procurar sua definição dentro das urls encontradas.


```

Ex[1]: --achar="WordPress" isso vai procurar a palavra WordPress em todas urls encontradas pelo scanner.
Ex[2]: --tipoerro="2" --exploit="wp-login.php"  --achar="WordPress";

php botConsole.php --host="www.google.com.br" --dork="site:.gov.br inurl:php id" --arquivo="resultado.txt" --tipoerro="1" --exploit="--´0x27;"
php botConsole.php --host="www.google.com.br" --dork="site:.gov.br inurl:php id" --arquivo="resultado.txt" --tipoerro="2" --exploit="/admin/index.php" --achar="version 4.1"
php botConsole.php --host="www.google.com.br" --dork="site:.gov.br inurl:php id" --arquivo="resultado.txt" --tipoerro="2" --exploit="/admin/index.php" --achar="version 4.1" --ipproxy="172.16.0.150" --porta="8080"
php botConsole.php ajuda";
php botConsole.php hosts #Lista de hosts do google.";


```


# Exemplo de execução #

### SCANNER INURL para encontrar falhas / Mybb Ajaxfs Plugin Sql Injection vulnerability. ###

http://blog.inurl.com.br/2013/11/usando-scanner-inurl-para-encontrar_27.html