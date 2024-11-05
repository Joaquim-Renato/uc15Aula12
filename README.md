# Formulário Simplificado e Conexão com Banco de Dados


Este projeto contém um formulário HTML que coleta informações de usuários, como nome, e-mail e um comentário. O formulário utiliza o método `POST` para enviar esses dados para um arquivo PHP (`acessoBD.php`), onde eles podem ser processados e armazenados em um banco de dados.

## Estrutura do Formulário

- **Nome**: Campo de texto obrigatório para inserir o nome do usuário.
- **E-mail**: Campo de entrada para o e-mail do usuário, com validação de formato de e-mail.
- **Comentário**: Área de texto onde o usuário pode inserir seu comentário ou feedback, também obrigatória.
- **Botões**:
  - **Enviar**: Envia os dados do formulário para o arquivo PHP.
  - **Limpar**: Reseta o formulário para os valores iniciais.

## Funcionalidades Adicionais

- O formulário está centralizado na página para melhor apresentação visual.
- Um link para "Voltar" é exibido no final da página para facilitar a navegação.

