<?php

include './components/stacks.php';

$projetos = [
    [
        'titulo' => "Cubo Mágico",
        'descricao' => "É um projeto inspirado no famoso quebra-cabeça tridimensional, desenvolvido para explorar conceitos de design e interatividade.",
        'src' => './assets/img/carrossel.png',
        'stack' => ['CSS', 'HTML']
    ],
    [
        'titulo' => "N5 Telecom",
        'descricao' => "Uma plataforma para gerenciamento de serviços de telecomunicações, facilitando o controle de assinaturas e suporte ao cliente.",
        'src' => './assets/img/notices.png',
        'stack' => ['CSS', 'PHP', 'Javascript']
    ],
    [
        'titulo' => "Food Delivery App",
        'descricao' => "Aplicativo para pedidos de comida online, conectando restaurantes e clientes com um sistema de entrega eficiente.",
        'src' => './assets/img/receive.png',
        'stack' => ['React Native', 'Node.js', 'MongoDB', 'Expo', 'AWS']
    ],
    [
        'titulo' => "Sistema de Estoque",
        'descricao' => "Ferramenta para controle e organização de produtos em estoque, com monitoramento de entrada e saída de mercadorias.",
        'src' => './assets/img/busan.png',
        'stack' => ['PHP', 'Laravel', 'MySQL']
    ],
    [
        'titulo' => "Blog Tech Trends",
        'descricao' => "Blog sobre as últimas tendências em tecnologia, com artigos sobre desenvolvimento, IA e inovação digital.",
        'src' => './assets/img/refund.png',
        'stack' => ['WordPress', 'PHP', 'CSS', 'Postgres']
    ],
    [
        'titulo' => "Plataforma de Cursos Online",
        'descricao' => "Sistema para gerenciamento de cursos e aulas online, permitindo a criação de conteúdos educacionais interativos.",
        'src' => './assets/img/zingen.png',
        'stack' => ['React', 'Next.js', 'Firebase']
    ]
];

$contact_links = [
    [
        'media_social_name' => 'Linkedin',
        'media_social_logo' => 'ph ph-linkedin-logo',
    ],
    [
        'media_social_name' => 'Instagram',
        'media_social_logo' => 'ph ph-instagram-logo',
    ],
    [
        'media_social_name' => 'GitHub',
        'media_social_logo' => 'ph ph-github-logo',
    ],
    [
        'media_social_name' => 'Email',
        'media_social_logo' => 'ph ph-envelope-simple',
    ],
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wdth,wght@0,101.2,100..900;1,101.2,100..900&family=Inconsolata:wght@200..900&family=Maven+Pro:wght@400..900&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'red': '#E3646E',
                        'purple': '#BB72E9',
                        'blue': '#3996DB',
                        'green': '#82BC4F',
                        'yellow': '#EABD5F',
                        'gray-100': '#0D0E11',
                        'gray-200': '#16181D',
                        'gray-300': '#292C34',
                        'gray-400': '#878EA1',
                        'gray-500': '#C0C4CE',
                        'gray-600': '#E2E4E9',
                    },
                    fontFamily: {
                        heading: ['Asap'],
                        subtitle: ['Inconsolata'],
                        tag: ['Inconsolata'],
                        text: ['Maven Pro'],
                    },
                    backgroundImage: {
                        'header-bg': "url('/assets/img/bg_header.png')",
                        'footer-bg': "url('/assets/img/bg_footer.png')",
                    },
                }
            }
        }
    </script>

    <title>Meu Portifólio</title>
</head>

<body class="bg-gray-200">
    <header class="bg-header-bg bg-cover bg-center w-full h-[682px] flex items-center justify-between">
        <!-- info -->
        <div class="mx-auto max-w-screen-lg h-auto flex flex-col items-center space-y-20">
            <!-- header  -->
            <div class="flex flex-col items-center space-y-14 h-auto px-4 md:px-[180px]">
                <!-- avatar -->
                <div class="flex items-center justify-center h-20 w-20 md:h-24 md:w-24 border border-red rounded-full">
                    <img class="h-18 w-18 md:h-22 md:w-22 bg-cover bg-center rounded-full" src="./assets/img/avatar.png" alt="Imagem Avatar">
                </div>
                <!-- texto/descricao -->
                <div class="space-y-5">
                    <div class="flex flex-col items-center justify-center">
                        <span class="font-subtitle font-bold text-lg md:text-xl text-gray-500">
                            Hello World! Meu nome é <span class="text-red">Gabriel Adriano</span> e sou
                        </span>
                        <span class="font-heading font-bold text-[56px] text-gray-600">
                            Desenvolvedor PHP
                        </span>
                    </div>
                    <div class="font-text text-sm text-gray-400 text-center px-2 md:px-0">Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.</div>
                </div>
            </div>
            <!-- tags -->
            <div class="flex flex-wrap justify-center gap-3">
                <?php renderStacks($projetos, 'header'); ?>
            </div>
        </div>
    </header>

    <main class="w-full py-16 flex flex-col items-center px-4 md:px-20 pb-36">
        <!-- header -->
        <div class="w-full text-center">
            <span class="text-red font-subtitle">Meu trabalho</span>
            <h2 class="text-gray-600 text-xl font-heading font-bold">Veja os projetos em destaque</h2>
        </div>

        <!-- card projects -->
        <?php include('./components/main-card-project.php'); ?>
    </main>


    <footer class="w-full h-[787px] bg-footer-bg bg-cover bg-center flex flex-col items-center mx-30 pt-32 mb-50 gap-12">
        <!-- header -->
        <div class="flex flex-col items-center gap-2">
            <span class="text-purple font-subtitle text-[20px]">Contato</span>
            <span class="text-gray-600 font-heading font-bold text-[24px]">Gostou do meu trabalho?</span>
            <p class="text-gray-500 text-[16px] font-text">Entre em contato ou acompanhe minhas redes sociais!</p>
        </div>

        <!-- links -->
        <div class="w-[400px] flex flex-col gap-4">
            <!-- card -->
            <?php include('./components/footer-card-link.php'); ?>
        </div>
    </footer>
</body>

</html>