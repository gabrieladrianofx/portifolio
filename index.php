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
            <div class="flex flex-wrap justify-center gap-2">
                <div class="hover:animate-bounce delay-700 inline-flex items-center px-3 py-1 text-gray-200 text-tag text-[16px] font-bold rounded-full bg-green">
                    <span>GitHub</span>
                </div>
                <div class="hover:animate-bounce inline-flex items-center px-3 py-1 text-gray-200 text-tag text-[16px] font-bold rounded-full bg-purple">
                    <span>PHP</span>
                </div>
                <div class="hover:animate-bounce inline-flex items-center px-3 py-1 text-gray-200 text-tag text-[16px] font-bold rounded-full bg-blue">
                    <span>CSS</span>
                </div>
                <div class="hover:animate-bounce inline-flex items-center px-3 py-1 text-gray-200 text-tag text-[16px] font-bold rounded-full bg-red">
                    <span>HTML</span>
                </div>
                <div class="hover:animate-bounce inline-flex items-center px-3 py-1 text-gray-200 text-tag text-[16px] font-bold rounded-full bg-yellow">
                    <span>Javascript</span>
                </div>
            </div>
        </div>
    </header>

    <section class="w-full py-16 flex flex-col items-center px-4 md:px-20 pb-36">
        <!-- header -->
        <div class="w-full text-center">
            <span class="text-red font-subtitle">Meu trabalho</span>
            <h2 class="text-gray-600 text-xl font-heading font-bold">Veja os projetos em destaque</h2>
        </div>

        <!-- card -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
            <div class="w-full bg-gray-300 rounded-[12px] flex flex-row gap-4 p-4 outline-0 hover:outline hover:outline-1 hover:outline-gray-400 transition">
                <img class="w-[224px] h-[156px] rounded-[8px]" src="./assets/img/carrossel.png" alt="Imagem Travelgram">
                <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
                    <div class="space-y-2">
                        <span class="font-heading font-bold text-sm text-gray-600">Travelgram</span>
                        <p class="font-text text-sm text-gray-500">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
                    </div>
                    <div class="flex flex-wrap w-full gap-2">
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-[12px] font-bold rounded-full bg-purple">PHP</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-[12px] font-bold rounded-full bg-blue">CSS</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-[12px] font-bold rounded-full bg-red">HTML</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-[12px] font-bold rounded-full bg-red bg-yellow">
                            Javascript
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-300 rounded-[12px] flex flex-row gap-4 p-4 outline-0 hover:outline hover:outline-1 hover:outline-gray-400 transition">
                <img class="w-[224px] h-[156px] rounded-[8px]" src="./assets/img/carrossel.png" alt="Imagem Travelgram">
                <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
                    <div class="space-y-2">
                        <span class="font-heading font-bold text-sm text-gray-600">Travelgram</span>
                        <p class="font-text text-sm text-gray-500">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
                    </div>
                    <div class="flex flex-wrap w-full gap-2">
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-purple">PHP</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-blue">CSS</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red">HTML</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red bg-yellow">
                            Javascript
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-300 rounded-[12px] flex flex-row gap-4 p-4 outline-0 hover:outline hover:outline-1 hover:outline-gray-400 transition">
                <img class="w-[224px] h-[156px] rounded-[8px]" src="./assets/img/carrossel.png" alt="Imagem Travelgram">
                <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
                    <div class="space-y-2">
                        <span class="font-heading font-bold text-sm text-gray-600">Travelgram</span>
                        <p class="font-text text-sm text-gray-500">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
                    </div>
                    <div class="flex flex-wrap w-full gap-2">
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-purple">PHP</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-blue">CSS</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red">HTML</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red bg-yellow">
                            Javascript
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-300 rounded-[12px] flex flex-row gap-4 p-4 outline-0 hover:outline hover:outline-1 hover:outline-gray-400 transition">
                <img class="w-[224px] h-[156px] rounded-[8px]" src="./assets/img/carrossel.png" alt="Imagem Travelgram">
                <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
                    <div class="space-y-2">
                        <span class="font-heading font-bold text-sm text-gray-600">Travelgram</span>
                        <p class="font-text text-sm text-gray-500">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
                    </div>
                    <div class="flex flex-wrap w-full gap-2">
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-purple">PHP</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-blue">CSS</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red">HTML</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red bg-yellow">
                            Javascript
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-300 rounded-[12px] flex flex-row gap-4 p-4 outline-0 hover:outline hover:outline-1 hover:outline-gray-400 transition">
                <img class="w-[224px] h-[156px] rounded-[8px]" src="./assets/img/carrossel.png" alt="Imagem Travelgram">
                <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
                    <div class="space-y-2">
                        <span class="font-heading font-bold text-sm text-gray-600">Travelgram</span>
                        <p class="font-text text-sm text-gray-500">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
                    </div>
                    <div class="flex flex-wrap w-full gap-2">
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-purple">PHP</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-blue">CSS</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red">HTML</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red bg-yellow">
                            Javascript
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-300 rounded-[12px] flex flex-row gap-4 p-4 outline-0 hover:outline hover:outline-1 hover:outline-gray-400 transition">
                <img class="w-[224px] h-[156px] rounded-[8px]" src="./assets/img/carrossel.png" alt="Imagem Travelgram">
                <div class="flex flex-col justify-between w-full space-y-2 px-1 py-2">
                    <div class="space-y-2">
                        <span class="font-heading font-bold text-sm text-gray-600">Travelgram</span>
                        <p class="font-text text-sm text-gray-500">Rede social onde as pessoas mostram os registros de suas viagens pelo mundo</p>
                    </div>
                    <div class="flex flex-wrap w-full gap-2">
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-purple">PHP</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-blue">CSS</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red">HTML</span>
                        <span class="w-auto h-auto px-2 py-1 text-gray-200 text-tag text-sm font-bold rounded-full bg-red bg-yellow">
                            Javascript
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
            <div class="bg-gray-300 rounded-[8px] w-full flex items-center justify-between px-5 py-5 gap-3 outline-0 hover:outline hover:outline-1 hover:outline-blue transition group">
                <span class="text-gray-400 text-[28px] group-hover:text-blue"><i class="ph ph-linkedin-logo"></i></span>
                <span class="flex-1 font-text text-[16px] text-gray-500 font-medium">Linkedin</span>
                <span class="text-blue text-[20px]"><i class="ph ph-arrow-up-right"></i></span>
            </div>
            <div class="bg-gray-300 rounded-[8px] w-full flex items-center justify-between px-5 py-5 gap-3 outline-0 hover:outline hover:outline-1 hover:outline-blue transition group">
                <span class="text-gray-400 text-[28px] group-hover:text-blue"><i class="ph ph-instagram-logo"></i></span>
                <span class="flex-1 font-text text-[16px] text-gray-500 font-medium">Instagram</span>
                <span class="text-blue text-[20px]"><i class="ph ph-arrow-up-right"></i></span>
            </div>
            <div class="bg-gray-300 rounded-[8px] w-full flex items-center justify-between px-5 py-5 gap-3 outline-0 hover:outline hover:outline-1 hover:outline-blue transition group">
                <span class="text-gray-400 text-[28px] group-hover:text-blue"><i class="ph ph-github-logo"></i></span>
                <span class="flex-1 font-text text-[16px] text-gray-500 font-medium">GitHub</span>
                <span class="text-blue text-[20px]"><i class="ph ph-arrow-up-right"></i></span>
            </div>
            <div class="bg-gray-300 rounded-[8px] w-full flex items-center justify-between px-5 py-5 gap-3 outline-0 hover:outline hover:outline-1 hover:outline-blue transition group">
                <span class="text-gray-400 text-[28px] group-hover:text-blue"><i class="ph ph-envelope-simple"></i></i></span>
                <span class="flex-1 font-text text-[16px] text-gray-500 font-medium">Email</span>
                <span class="text-blue text-[20px]"><i class="ph ph-arrow-up-right"></i></span>
            </div>
        </div>
    </footer>
</body>

</html>