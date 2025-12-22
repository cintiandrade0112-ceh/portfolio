# 🌟 Portfólio Web Profissional – Cíntia de Oliveira Andrade

<div align="center">

![Status](https://img.shields.io/badge/Status-Ativo-success)
![Licença](https://img.shields.io/badge/Licen%C3%A7a-MIT-blue)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)

**Portfólio profissional moderno e responsivo para apresentação de competências técnicas e projetos**

 • [📖 Documentação](#-índice) • [🚀 Começar](#-como-executar-o-projeto) • [📧 Contato](#-contato)

</div>

---

## 📋 Índice

- [Sobre o Projeto](#-sobre-o-projeto)
- [Características](#-características)
- [Tecnologias Utilizadas](#️-tecnologias-utilizadas)
- [Estrutura do Projeto](#-estrutura-do-projeto)
- [Como Executar o Projeto](#-como-executar-o-projeto)
- [Configuração do Banco de Dados](#-configuração-do-banco-de-dados)
- [Funcionalidades](#-funcionalidades)
- [Design e Interface](#-design-e-interface)
- [Responsividade](#-responsividade)
- [Roadmap](#-roadmap)
- [Contribuição](#-contribuição)
- [Autora](#-autora)
- [Licença](#-licença)

---

## 📌 Sobre o Projeto

Este projeto consiste em um **portfólio web pessoal profissional**, desenvolvido para apresentar o perfil acadêmico, profissional e técnico de **Cíntia de Oliveira Andrade**, licenciada em Engenharia Informática pela Universidade de Santiago.

O portfólio foi projetado para servir como:
- 💼 Cartão de visita digital profissional
- 📝 Suporte para candidaturas a estágios e empregos
- 🎓 Apresentação de projetos acadêmicos
- 🤝 Facilitador de networking profissional
- 📊 Demonstração prática de competências técnicas

### 🎯 Objetivos

- ✅ Apresentar informações profissionais de forma clara, organizada e atrativa
- ✅ Demonstrar domínio prático em **HTML5, CSS3, JavaScript e PHP**
- ✅ Disponibilizar portfólio de projetos acadêmicos e profissionais
- ✅ Facilitar o contato direto com recrutadores, professores e parceiros
- ✅ Criar uma identidade visual profissional e memorável

---

## ✨ Características

### 🎨 Design Moderno
- Interface escura sofisticada com gradientes vibrantes
- Animações suaves e elegantes em todos os elementos
- Efeitos hover interativos para melhor experiência do usuário
- Hero section impactante com efeitos visuais dinâmicos

### ⚡ Performance
- Carregamento rápido e otimizado
- Código limpo e bem estruturado
- Animações com performance otimizada
- Imagens e recursos otimizados

### 📱 Responsividade
- Design totalmente responsivo para todos os dispositivos
- Layout adaptativo para mobile, tablet e desktop
- Navegação otimizada para telas touch
- Experiência consistente em diferentes resoluções

### 🔒 Segurança
- Validação de dados no frontend e backend
- Proteção contra SQL Injection com prepared statements
- Sanitização de inputs do usuário
- Tratamento adequado de erros

---

## 🛠️ Tecnologias Utilizadas

### Frontend

| Tecnologia | Versão | Descrição |
|------------|--------|-----------|
| **HTML5** | 5.0 | Estruturação semântica do conteúdo |
| **CSS3** | 3.0 | Estilização avançada com animações e gradientes |
| **JavaScript** | ES6+ | Interatividade e funcionalidades dinâmicas |

### Backend

| Tecnologia | Versão | Descrição |
|------------|--------|-----------|
| **PHP** | 7.4+ | Processamento do formulário de contato |
| **MySQL** | 8.0+ | Armazenamento de mensagens de contato |

### Ferramentas de Desenvolvimento

- **VS Code** - Editor de código
- **Git** - Controle de versão
- **WAMP** - Servidor local (opcional)
- **PHP Built-in Server** - Servidor de desenvolvimento

---

## 📂 Estrutura do Projeto

```
portfolio/
│
├── 📄 index.html              # Página principal do portfólio
├── 📄 enviar.php              # Backend para processamento do formulário
├── 📄 README.md               # Documentação do projeto
│
├── 📁 css/
│   └── 📄 style.css           # Folha de estilos principal
│
├── 📁 js/
│   └── 📄 script.js           # Scripts JavaScript
│
├── 📁 assets/                 # (Opcional) Imagens e recursos
│   ├── 📁 images/
│   └── 📁 icons/
│
└── 📁 database/               # (Opcional) Scripts SQL
    └── 📄 schema.sql          # Estrutura do banco de dados
```

---

## 🚀 Como Executar o Projeto

### Pré-requisitos

Antes de começar, você precisa ter instalado em sua máquina:

- **PHP** 7.4 ou superior ([Download](https://www.php.net/downloads.php))
- **MySQL** 8.0 ou superior ([Download](https://dev.mysql.com/downloads/))
- **Navegador Web** moderno (Chrome, Firefox, Safari, Edge)
- **Git** (opcional, para clonar o repositório)

### Instalação

#### 1️⃣ Clone o repositório (ou baixe o ZIP)

```bash
git clone https://github.com/seu-usuario/portfolio-cintia-andrade.git
cd portfolio-cintia-andrade
```

#### 2️⃣ Configure o banco de dados

Execute o script SQL no MySQL:

```sql
CREATE DATABASE portfolio_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE portfolio_db;

CREATE TABLE mensagens_contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_data_envio (data_envio)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

#### 3️⃣ Configure as credenciais do banco

Edite o arquivo `enviar.php` e ajuste as credenciais:

```php
$host = "localhost";
$dbname = "portfolio_db";
$user = "seu_usuario";      // Altere conforme necessário
$pass = "sua_senha";        // Altere conforme necessário
```

#### 4️⃣ Inicie o servidor

**Opção A: PHP Built-in Server (Recomendado para desenvolvimento)**

```bash
php -S localhost:8000
```

**Opção B: XAMPP/WAMP**

1. Copie a pasta do projeto para `htdocs/` (XAMPP) ou `www/` (WAMP)
2. Inicie o Apache e MySQL
3. Acesse: `http://localhost/portfolio-cintia-andrade`

#### 5️⃣ Acesse no navegador

Abra seu navegador e acesse:

```
http://localhost:8000
```

---

## 🗄️ Configuração do Banco de Dados

### Estrutura da Tabela `mensagens_contato`

| Campo | Tipo | Descrição |
|-------|------|-----------|
| `id` | INT (PK, AI) | Identificador único |
| `nome` | VARCHAR(255) | Nome do remetente |
| `email` | VARCHAR(255) | Email do remetente |
| `mensagem` | TEXT | Conteúdo da mensagem |
| `data_envio` | TIMESTAMP | Data e hora do envio |

### Script SQL Completo

```sql
-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS portfolio_db 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE portfolio_db;

-- Criar tabela de mensagens
CREATE TABLE IF NOT EXISTS mensagens_contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    lida BOOLEAN DEFAULT FALSE,
    INDEX idx_email (email),
    INDEX idx_data_envio (data_envio)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserir mensagem de teste (opcional)
INSERT INTO mensagens_contato (nome, email, mensagem) 
VALUES ('Teste', 'teste@email.com', 'Mensagem de teste');
```

---

## 📄 Funcionalidades

### ✅ Implementadas

- [x] **Hero Section** - Apresentação impactante com animações
- [x] **Navegação Fixa** - Menu sticky com scroll suave
- [x] **Sobre Mim** - Apresentação profissional detalhada
- [x] **Formação Acadêmica** - Cards interativos com timeline
- [x] **Experiência Profissional** - Histórico detalhado com hover effects
- [x] **Skills Técnicas** - Grid visual com tecnologias
- [x] **Projetos** - Portfólio de projetos com tags
- [x] **Certificados** - Seção de qualificações
- [x] **Formulário de Contato** - Com validação e backend PHP
- [x] **Footer** - Informações de copyright
- [x] **Botão Scroll to Top** - Navegação rápida
- [x] **Animações on Scroll** - Elementos aparecem ao rolar
- [x] **Design Responsivo** - Mobile-first approach

### 🔄 Em Desenvolvimento

- [ ] Modo claro/escuro (theme switcher)
- [ ] Blog integrado
- [ ] Galeria de imagens dos projetos
- [ ] Download de CV em PDF
- [ ] Integração com redes sociais
- [ ] Painel administrativo
- [ ] Sistema de newsletter

---

## 🎨 Design e Interface

### Paleta de Cores

```css
--primary: #6366f1        /* Roxo/Índigo principal */
--primary-dark: #4f46e5   /* Roxo escuro */
--secondary: #06b6d4      /* Ciano/Turquesa */
--dark: #0f172a           /* Background principal */
--dark-lighter: #1e293b   /* Background secundário */
--light: #f8fafc          /* Texto claro */
--gray: #64748b           /* Texto secundário */
```

### Tipografia

- **Fonte Principal**: Inter, -apple-system, BlinkMacSystemFont, 'Segoe UI'
- **Tamanhos**: Sistema responsivo com `clamp()` para melhor adaptação

### Animações

- **fadeInUp**: Entrada suave dos elementos
- **pulse**: Efeitos de fundo pulsante
- **hover effects**: Transições suaves em cards e botões
- **smooth scroll**: Navegação fluida entre seções

---

## 📱 Responsividade

O portfólio é totalmente responsivo e otimizado para:

### 📱 Mobile (< 768px)
- Menu de navegação em coluna
- Cards em coluna única
- Tipografia redimensionada
- Espaçamentos otimizados
- Touch-friendly buttons

### 💻 Tablet (768px - 1024px)
- Grid de 2 colunas para skills e projetos
- Menu horizontal compacto
- Imagens otimizadas

### 🖥️ Desktop (> 1024px)
- Layout completo com múltiplas colunas
- Efeitos visuais aprimorados
- Animações complexas
- Máxima utilização do espaço

---

### Live Demo

🌐 **[Ver Demo Online](#)** *(adicione o link quando publicar)*

---

## 🗺️ Roadmap

### Versão 1.0 (Atual) ✅
- [x] Estrutura HTML básica
- [x] Estilização CSS moderna
- [x] JavaScript interativo
- [x] Formulário funcional
- [x] Design responsivo

### Versão 2.0 (Próxima)
- [ ] Modo escuro/claro
- [ ] Animações avançadas com GSAP
- [ ] Galeria de projetos com filtros
- [ ] Blog integrado
- [ ] Otimização SEO avançada

### Versão 3.0 (Futuro)
- [ ] Painel administrativo
- [ ] CMS para gestão de conteúdo
- [ ] API REST
- [ ] PWA (Progressive Web App)
- [ ] Integração com Google Analytics

---

## 🤝 Contribuição

Contribuições são bem-vindas! Se você quiser melhorar este projeto:

1. Faça um Fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

### Diretrizes de Contribuição

- Mantenha o código limpo e bem comentado
- Siga os padrões de estilo existentes
- Teste suas alterações antes de submeter
- Documente novas funcionalidades

---

## 👩‍💻 Autora

<div align="center">

### **Cíntia de Oliveira Andrade**

*Licenciada em Engenharia Informática*  
*Universidade de Santiago – Cabo Verde*

[![Email](https://img.shields.io/badge/Email-fabriciandrade2907@gmail.com-red?style=for-the-badge&logo=gmail)](mailto:fabriciandrade2907@gmail.com)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-blue?style=for-the-badge&logo=linkedin)](https://www.linkedin.com/in/c%C3%ADntia-de-oliveira-andrade-6130a839a/)
[![GitHub](https://img.shields.io/badge/GitHub-Follow-black?style=for-the-badge&logo=github)](https://github.com/fabriciandrade2907-dot)

📍 **Localização:** Assomada, Cabo Verde  
🗣️ **Idiomas:** Criolo (nativo) | Português | Inglês (A2)

</div>

---

## 📧 Contato

Tem alguma dúvida ou sugestão? Entre em contato:

- **Email**: fabriciandrade2907@gmail.com
- **Localização**: Assomada, Cabo Verde
- **Formulário**: Use o formulário de contato no site

---

## 📜 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

```
MIT License

Copyright (c) 2025 Cíntia de Oliveira Andrade

É concedida permissão, gratuitamente, a qualquer pessoa que obtenha uma cópia
deste software e dos arquivos de documentação associados, para usar o Software
sem restrições, incluindo, sem limitação, os direitos de usar, copiar, modificar,
mesclar, publicar, distribuir, sublicenciar e/ou vender cópias do Software.
```

---

## 🙏 Agradecimentos

- Universidade de Santiago pelo suporte acadêmico
- Comunidade de desenvolvedores por inspiração
- Todos que contribuíram com feedback

---

## 📊 Estatísticas do Projeto

![GitHub Stars](https://img.shields.io/github/stars/seu-usuario/portfolio?style=social)
![GitHub Forks](https://img.shields.io/github/forks/seu-usuario/portfolio?style=social)
![GitHub Issues](https://img.shields.io/github/issues/seu-usuario/portfolio)
![GitHub Last Commit](https://img.shields.io/github/last-commit/seu-usuario/portfolio)

---

<div align="center">

### ⭐ Se este projeto te ajudou, considere dar uma estrela!

**Feito com ❤️ por Cíntia Andrade**

[↑ Voltar ao topo](#-portfólio-web-profissional--cíntia-de-oliveira-andrade)

</div>
