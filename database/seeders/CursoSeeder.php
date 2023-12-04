<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('cursos')->insert([
            [
                'categoria_id' => 1,
                'nome' => 'HTML + CSS',
                'descricao' => 'Curso de HTML e CSS para iniciantes e profissionais.',
                'objetivos' => json_encode(['Aprender todas as tags HTML', 'Desenvolver habilidades profissionais em HTML e CSS', 'Evitar más práticas de codificação', 'Criar layouts atraentes com CSS']),
                'cor' => 'orange',
                'preco' => 1500.00,
                'img' => 'https://jmvstream.com/wp-content/uploads/2023/07/HTML-CSS.jpeg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 1,
                'nome' => 'JavaScript & TypeScript',
                'descricao' => 'Aprenda a programar em JavaScript e TypeScript.',
                'objetivos' => json_encode(['Dominar os conceitos de JavaScript', 'Desenvolver aplicativos robustos com TypeScript', 'Manipular o DOM', 'Trabalhar com APIs']),
                'cor' => 'blue',
                'preco' => 1800.00,
                'img' => 'https://tsh.io/wp-content/uploads/2020/09/typescript-vs-javascript-comparison_.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 1,
                'nome' => 'PHP 8',
                'descricao' => 'Desenvolvimento web com PHP 8.',
                'objetivos' => json_encode(['Aprender a programar em PHP', 'Construir aplicativos web dinâmicos', 'Trabalhar com bancos de dados', 'Desenvolver aplicações web seguras']),
                'cor' => 'green',
                'preco' => 1700.00,
                'img' => 'https://www.php.net/images/php8/php_8_released.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 1,
                'nome' => 'Node.js',
                'descricao' => 'Desenvolvimento de aplicativos com Node.js.',
                'objetivos' => json_encode(['Aprender Node.js', 'Construir servidores e aplicativos escaláveis', 'Usar JavaScript no lado do servidor', 'Trabalhar com módulos e pacotes Node.js']),
                'cor' => 'purple',
                'preco' => 1900.00,
                'img' => 'https://blog.geekhunter.com.br/wp-content/uploads/2021/02/1_mp91A9RzagntGGjBnwu4Yw.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 1,
                'nome' => 'SQL Básico',
                'descricao' => 'Introdução ao SQL para gerenciamento de bancos de dados.',
                'objetivos' => json_encode(['Aprender os fundamentos do SQL', 'Realizar consultas em bancos de dados', 'Trabalhar com dados', 'Compreender as instruções SQL básicas']),
                'cor' => 'teal',
                'preco' => 1500.00,
                'img' => 'https://arquivo.devmedia.com.br/marketing/img/artigo_sql-basico_28877.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 1,
                'nome' => 'Frameworks e Bibliotecas',
                'descricao' => 'Explorando frameworks e bibliotecas populares para desenvolvimento web.',
                'objetivos' => json_encode(['Dominar frameworks e bibliotecas populares', 'Acelerar o desenvolvimento web', 'Escolher as melhores ferramentas para o seu projeto', 'Criar aplicativos web modernos']),
                'cor' => 'red',
                'preco' => 1600.00,
                'img' => 'https://kruschecompany.com/wp-content/uploads/2022/02/Cover-image-for-blog-post-defining-the-difference-1280x595.png',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 2,
                'nome' => 'Java + Kotlin',
                'descricao' => 'Desenvolvimento de aplicativos Android com Java e Kotlin.',
                'objetivos' => json_encode(['Aprender programação Android com Java', 'Dominar Kotlin para desenvolvimento Android', 'Construir aplicativos Android de qualidade', 'Trabalhar com o Android Studio']),
                'cor' => 'green',
                'preco' => 1700.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 2,
                'nome' => 'Swift',
                'descricao' => 'Desenvolvimento de aplicativos iOS com Swift.',
                'objetivos' => json_encode(['Aprender a linguagem Swift', 'Criar aplicativos iOS elegantes e eficazes', 'Publicar na App Store', 'Usar Xcode']),
                'cor' => 'purple',
                'preco' => 1900.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 2,
                'nome' => 'Objective-C',
                'descricao' => 'Programação de aplicativos iOS com Objective-C.',
                'objetivos' => json_encode(['Aprender Objective-C para desenvolvimento iOS', 'Trabalhar com a plataforma Apple', 'Desenvolver aplicativos compatíveis com dispositivos iOS', 'Usar Xcode']),
                'cor' => 'blue',
                'preco' => 1850.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 2,
                'nome' => 'React Native',
                'descricao' => 'Desenvolvimento de aplicativos móveis com React Native.',
                'objetivos' => json_encode(['Dominar o desenvolvimento de aplicativos com React Native', 'Criar aplicativos multiplataforma', 'Reutilizar código entre Android e iOS', 'Usar bibliotecas JavaScript populares']),
                'cor' => 'orange',
                'preco' => 1600.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 2,
                'nome' => 'Cordova & Phonegap',
                'descricao' => 'Criação de aplicativos híbridos com Cordova & Phonegap.',
                'objetivos' => json_encode(['Desenvolver aplicativos híbridos para várias plataformas', 'Usar tecnologias web (HTML, CSS, JavaScript)', 'Acessar recursos nativos do dispositivo', 'Testar em vários dispositivos']),
                'cor' => 'teal',
                'preco' => 1750.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 3,
                'nome' => 'SQL (básico ao avançado)',
                'descricao' => 'Domine a linguagem SQL para gerenciar bancos de dados.',
                'objetivos' => json_encode(['Aprender SQL desde o básico até conceitos avançados', 'Trabalhar com bancos de dados relacionais', 'Otimizar consultas SQL', 'Gerenciar bancos de dados']),
                'cor' => 'red',
                'preco' => 1600.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 3,
                'nome' => 'NoSQL',
                'descricao' => 'Explorando bancos de dados NoSQL e suas aplicações.',
                'objetivos' => json_encode(['Compreender bancos de dados NoSQL', 'Trabalhar com MongoDB e Redis', 'Escolher a melhor solução de banco de dados para seu projeto', 'Modelar dados NoSQL']),
                'cor' => 'teal',
                'preco' => 1750.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 3,
                'nome' => 'MariaDB & Postgres',
                'descricao' => 'Gerenciamento de bancos de dados relacionais com MariaDB e Postgres.',
                'objetivos' => json_encode(['Aprender MariaDB e Postgres', 'Desenvolver habilidades em bancos de dados relacionais', 'Garantir a integridade dos dados', 'Realizar otimização de consultas']),
                'cor' => 'blue',
                'preco' => 1850.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 3,
                'nome' => 'MongoDB & Redis',
                'descricao' => 'Trabalhando com bancos de dados NoSQL MongoDB e Redis.',
                'objetivos' => json_encode(['Dominar o MongoDB e Redis', 'Armazenar e recuperar dados NoSQL eficazmente', 'Utilizar estruturas de dados em memória', 'Integrar bancos de dados NoSQL em aplicativos']),
                'cor' => 'orange',
                'preco' => 1700.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 3,
                'nome' => 'Bancos de Dados Distribuídos',
                'descricao' => 'Explorando o mundo dos bancos de dados distribuídos.',
                'objetivos' => json_encode(['Compreender bancos de dados distribuídos', 'Escalabilidade e tolerância a falhas', 'Consistência e particionamento', 'Implementar soluções de alta disponibilidade']),
                'cor' => 'purple',
                'preco' => 2000.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 3,
                'nome' => 'Automação de Bancos de Dados',
                'descricao' => 'Automatizando tarefas de gerenciamento de bancos de dados.',
                'objetivos' => json_encode(['Automatizar backups e manutenção', 'Implementar políticas de segurança', 'Monitorar o desempenho', 'Orquestrar implantações de bancos de dados']),
                'cor' => 'green',
                'preco' => 1950.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 4,
                'nome' => 'Apps Script',
                'descricao' => 'Automatize tarefas com o Google Apps Script.',
                'objetivos' => json_encode(['Criar automações no G Suite', 'Desenvolver scripts para planilhas, formulários e documentos', 'Integrar serviços do Google', 'Melhorar a produtividade']),
                'cor' => 'yellow',
                'preco' => 1400.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 4,
                'nome' => "IP's de Automação",
                'descricao' => 'Aprenda a criar automações com IP (Internet Protocol).',
                'objetivos' => json_encode(['Automatizar dispositivos e processos com IP', 'Utilizar protocolos de comunicação', 'Integração de sistemas baseados em IP', 'Geração de relatórios']),
                'cor' => 'pink',
                'preco' => 2000.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 4,
                'nome' => 'Geração de Renda',
                'descricao' => 'Descubra estratégias para gerar renda com automações.',
                'objetivos' => json_encode(['Explorar oportunidades de geração de renda', 'Monetizar seus conhecimentos em automação', 'Criar serviços e produtos automatizados', 'Desenvolver modelos de negócios sustentáveis']),
                'cor' => 'teal',
                'preco' => 1750.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 4,
                'nome' => 'Integrando Automações',
                'descricao' => 'Aprenda a integrar diferentes automações e sistemas.',
                'objetivos' => json_encode(['Conectar sistemas e processos automatizados', 'Integração de API', 'Automatizar fluxos de trabalho complexos', 'Melhorar a eficiência operacional']),
                'cor' => 'green',
                'preco' => 1600.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 4,
                'nome' => 'Bubble.io',
                'descricao' => 'Desenvolvimento rápido de aplicativos com Bubble.io.',
                'objetivos' => json_encode(['Construir aplicativos sem codificação', 'Desenvolver aplicativos da web interativos', 'Integrar APIs externas', 'Implantar aplicativos na nuvem']),
                'cor' => 'purple',
                'preco' => 1900.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 4,
                'nome' => 'FlutterFlow',
                'descricao' => 'Desenvolvimento de aplicativos com FlutterFlow.',
                'objetivos' => json_encode(['Construir aplicativos nativos para iOS e Android', 'Criar interfaces de usuário atraentes', 'Colaboração de equipe em tempo real', 'Implantação contínua']),
                'cor' => 'orange',
                'preco' => 1700.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 5,
                'nome' => 'Low Code Essentials',
                'descricao' => 'Introdução aos conceitos essenciais de Low Code.',
                'objetivos' => json_encode(['Compreender os fundamentos do Low Code', 'Desenvolver aplicativos com rapidez', 'Minimizar a codificação manual', 'Acelerar o ciclo de vida do desenvolvimento']),
                'cor' => 'blue',
                'preco' => 1500.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 5,
                'nome' => 'No Code for Beginners',
                'descricao' => 'No Code para iniciantes: Construindo sem programação.',
                'objetivos' => json_encode(['Explorar ferramentas No Code', 'Criar aplicativos sem habilidades de programação', 'Construir interfaces de usuário intuitivas', 'Iniciar projetos rapidamente']),
                'cor' => 'green',
                'preco' => 1200.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 5,
                'nome' => 'Advanced Low Code Development',
                'descricao' => 'Desenvolvimento avançado com Low Code.',
                'objetivos' => json_encode(['Dominar técnicas avançadas de Low Code', 'Integrar com sistemas externos', 'Customizar lógica de negócios complexa', 'Implementar automações sofisticadas']),
                'cor' => 'purple',
                'preco' => 1800.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 5,
                'nome' => 'No Code App Deployment',
                'descricao' => 'Implantação de aplicativos No Code em ambientes de produção.',
                'objetivos' => json_encode(['Entender processos de implantação No Code', 'Configurar ambientes de produção', 'Garantir escalabilidade', 'Manter a segurança']),
                'cor' => 'orange',
                'preco' => 1600.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 6,
                'nome' => 'Testes Automatizados com Selenium',
                'descricao' => 'Aprenda a realizar testes automatizados de UI com Selenium.',
                'objetivos' => json_encode(['Compreender os fundamentos do Selenium', 'Automatizar testes de interface do usuário', 'Criar scripts de teste eficazes', 'Integrar testes ao processo de CI/CD']),
                'cor' => 'blue',
                'preco' => 1700.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 6,
                'nome' => 'Test-Driven Development (TDD)',
                'descricao' => 'Desenvolvimento orientado a testes para construir código robusto.',
                'objetivos' => json_encode(['Entender os princípios do TDD', 'Escrever testes antes do código', 'Melhorar a qualidade do software', 'Reduzir bugs e aumentar a manutenibilidade']),
                'cor' => 'green',
                'preco' => 1600.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 6,
                'nome' => 'Performance Testing com JMeter',
                'descricao' => 'Avalie o desempenho do seu aplicativo com Apache JMeter.',
                'objetivos' => json_encode(['Realizar testes de desempenho', 'Identificar gargalos de desempenho', 'Simular carga de usuários', 'Otimizar o desempenho da aplicação']),
                'cor' => 'purple',
                'preco' => 1800.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 6,
                'nome' => 'Testes de Segurança com OWASP ZAP',
                'descricao' => 'Garanta a segurança da sua aplicação com testes automatizados.',
                'objetivos' => json_encode(['Identificar vulnerabilidades de segurança', 'Realizar testes de penetração automatizados', 'Mitigar riscos de segurança', 'Integrar testes de segurança ao processo de desenvolvimento']),
                'cor' => 'orange',
                'preco' => 1900.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 7,
                'nome' => 'Introdução ao Arduíno',
                'descricao' => 'Aprenda os conceitos básicos e comece a programar com Arduíno.',
                'objetivos' => json_encode(['Compreender os componentes do Arduíno', 'Programar utilizando a IDE do Arduíno', 'Criar projetos simples', 'Conectar sensores e atuadores']),
                'cor' => 'blue',
                'preco' => 1200.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 7,
                'nome' => 'Projetos Avançados com Arduíno',
                'descricao' => 'Desenvolva projetos mais complexos e explore recursos avançados.',
                'objetivos' => json_encode(['Utilizar módulos adicionais', 'Integrar sensores avançados', 'Criar dispositivos controlados por smartphone', 'Desenvolver sistemas embarcados']),
                'cor' => 'green',
                'preco' => 1500.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 7,
                'nome' => 'IoT com Arduíno',
                'descricao' => 'Conecte seu Arduíno à Internet das Coisas (IoT).',
                'objetivos' => json_encode(['Entender os princípios da IoT', 'Conectar Arduíno à internet', 'Desenvolver projetos de monitoramento remoto', 'Integrar com plataformas IoT']),
                'cor' => 'purple',
                'preco' => 1700.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'categoria_id' => 7,
                'nome' => 'Robótica com Arduíno',
                'descricao' => 'Explore o mundo da robótica utilizando Arduíno.',
                'objetivos' => json_encode(['Construir robôs simples', 'Programar movimentos e interações', 'Utilizar sensores para navegação', 'Integrar com motores e servos']),
                'cor' => 'orange',
                'preco' => 1600.00,
                'img' => 'https://www.sejus.df.gov.br/wp-conteudo/uploads/2019/08/d3f5ca4a-d817-4f21-a562-c9546305e013.jpg',
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }
}
