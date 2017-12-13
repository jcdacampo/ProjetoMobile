### :point_right: Documentação em breve. :point_left:
### Ionic View OK

Para iniciar a utilização deste projeto é necessário algumas configurações:

1 - Atualize o projeto com o comando:

npm install

Caso de algum erro:
Exclua a pasta node_modules e execute o comando npm install novamente,
isso irá atualizar as dependencias do nodejs para a versão do seu sistema operacional.

2 - Entre dentro da pasta apigility e execute o comando:

composer install

Isso irá atualizar o composer para você poder utilizar o apigility para linkar seu banco de dados.

3 - Após iniciar as configurações ainda dentro da pasta do apigility entre dentro da pasta public
e inicie o servidor com o comando:

php -S localhost:8080 ou a porta que você desejar.

Agora você pode acessar sua API, vá ate o navegador e cole a URL-> http://localhost:8080 .

Com sua API rodando, vá até database e no seu adaptador configure o adaptador.
Para nossa aplicação será adotada esse padrão abaixo:
#---------------------------#
DRIVER: PDO_Pgsql
DATABASE: ProjetoMobile
USERNAME: postgres
PASSWORD: senha_banco_dados
HOSTNAME: localhost
PORT: 5432
#---------------------------#

#---------------------------#
Exemplo:
DRIVER: PDO_Pgsql, PDO_Mysql
DATABASE: nome_banco_dados
USERNAME: usuario_banco_dados
PASSWORD: senha_banco_dados
HOSTNAME: localhost ou endereço_base_dados
PORT: porta ex: Pgsql = 5432, Mysql = 3306
#---------------------------#

Após estas configurações você poderá startar seu servidor ionico:

ionic serve


