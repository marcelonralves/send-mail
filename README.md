
# Enviar email usando PHPMailer e SendGrid

Eu desenvolvi esse código após ver uma publicação em um grupo do Facebook, usando o PHPMailer e o SendGrid para enviar emails, abaixo tem o passo a passo de como usar

## É necessário!
- Composer instalado
- Git instalado
- Conta no SendGrid (abaixo tem explicando o passo a passo de como criar a conta)

## Instalação

1 - Dê um clone no projeto

```
git clone https://github.com/marcelonralves/send-mail
```
2 - Após o clone, acesse a pasta que teve o 'clone' e use o comando composer install (para instalar as dependências como o PHPMailer)

```
composer install
```

3 - Vá até a pasta config e terá um arquivo chamado 'config-example.php', basta alterar para 'config.php'

4 - Crie uma conta no site SendGrid (https://sendgrid.com/)

5 - Após ter sua conta criada, você irá se deparar com esse painel, basta clicar na opção abaixo!
![App Screenshot](https://i.imgur.com/p82Jcu0.png)

6 - Depois de clicar em "Choose" basta escolher um nome aleatório em API KEY e clicar em "Create Key"

![App Screenshot](https://i.imgur.com/m5nHzMT.png)
![App Screenshot](https://i.imgur.com/QjSjnKi.png)

7 - Copie os dados gerados e cole no arquivo config.php (o que você renomeou)

8 - Agora tudo configurado! Para testar, basta preencher as variáveis na index.php com o email que você quer enviar e toda vez que você acessar esse index.php pelo navegador ele irá enviar um email!
