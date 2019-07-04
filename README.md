# Lab Grim (Site)
Desenvolvimento do site para o Grupo de Pesquisa da Relação Infância, Juventude e Mídia, da Universidade Federal do Ceará.


### Instalação
Deve ser clonado no lugar da pasta `themes` no diretório de instalação do WP. Na pasta `wp-content`:

```
$ git clone https://github.com/PassaroRoxo/site-lab-grim.git themes
```
Os stylesheets do projeto estão escritos em SCSS, por isso é preciso compilar para CSS padrão para funcionar. Está configurado para usar a biblioteca [node-sass](https://github.com/sass/node-sass), portanto também precisa do [Node.js](https://nodejs.org) instalado.

Instale as dependências na pasta `themes`:
```
$ npm install
```
Agora quando for desenvolver execute na mesma pasta:
```
$ npm run watch
```
Assim vai ficar compilando os stylesheets na pasta `/scss` em tempo real e salvando tudo no arquivo `style.css`.

### Documentação
> Toda documentação de uso do site e explicações de instalação mais completa do tema, plugins etc. deve ser colocada na wiki do projeto. Essas informações servirão de base para o manual a ser entregue para o cliente depois. Essa documentação deve ser feita pelo projetista responsável pela implentação de determinada parte.

[Wiki do Projeto](https://github.com/PassaroRoxo/site-lab-grim/wiki)

## Equipe
* [Gabriely Rodrigues](https://github.com/gabyrodrigues)
* [Henrique Artur](https://github.com/PassaroRoxo)
* [João]() 
