# Lab Grim (Site)
Desenvolvimento do site em WordPress 5.2.1 para o Grupo de Pesquisa da Relação Infância, Juventude e Mídia, da Universidade Federal do Ceará. Nesse Reposiório consta o tema do site. 


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

### Plugins utilizados
* [**Easy Social Icons**](https://br.wordpress.org/plugins/easy-social-icons/) por *cybernetikz*

### Documentação
> Toda documentação de uso do site e explicações de instalação mais completa do tema, plugins etc. deve ser colocada na wiki do projeto. Essas informações servirão de base para o manual a ser entregue para o responsável depois. Essa documentação deve ser feita pelo projetista responsável pela implentação de determinada parte.

[Wiki do Projeto](https://github.com/PassaroRoxo/site-lab-grim/wiki)

## Task List
> Para esse projeto estamo nos organizando usando um Kanban simples criado com template que deve ser atualizado com as atividades que cada membro da equipe vai fazer vai fazer.

[Kanban](https://github.com/PassaroRoxo/site-lab-grim/projects/1)

## Equipe
* [Gabriely Rodrigues](https://github.com/gabyrodrigues)
* [Henrique Artur](https://github.com/PassaroRoxo)
