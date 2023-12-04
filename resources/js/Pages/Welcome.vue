<script setup>
import { Head, Link } from '@inertiajs/vue3';
import Hero from '@/Components/Hero.vue';
import { CheckIcon } from '@heroicons/vue/24/outline'

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <Hero />

    <section class="p-32 bg-white space-y-10">
        <div>
            <h2 class="text-slate-700 text-5xl font-extrabold text-center">Trilhe sua "Code Journey"</h2>
            <p class="text-slate-400 text-lg text-center">Temos diversos cursos para diferentes ramos de programação. Seja
                livre
                para esolher o seu</p>
        </div>
        <div class="grid grid-flow-col auto-cols-1/4 space-x-5">
            <div class="space-y-5">
                <div
                    class="w-full h-[175px] bg-[url('https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/252841186/original/3236862ffb3ba040c4be4ae43e648de6ec4b5917/add-custom-html-css-and-js-code-to-website.jpg')] bg-cover bg-center bg-no-repeat">
                </div>
                <h3 class="text-slate-700 font-extrabold text-3xl">Web</h3>
                <ul>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> HTML + CSS
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Javascript & Typescript
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> PHP 8
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> NojeJS
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> SQL básico
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Frameworks e Bibliotecas
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> E mais...
                    </li>
                </ul>
            </div>
            <div class="space-y-5">
                <div
                    class="w-full h-[175px] bg-[url('https://blog.rocketseat.com.br/content/images/2018/12/3-passos-para-aprender-react-native.png')] bg-cover bg-center bg-no-repeat">
                </div>
                <h3 class="text-slate-700 font-extrabold text-3xl">Mobile</h3>
                <ul>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Java + Kotlin
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Swift
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Objectve-C
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Android Studio
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Reactive Native
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Cordova & Phonegap
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> E mais...
                    </li>
                </ul>
            </div>
            <div class="space-y-5">
                <div
                    class="w-full h-[175px] bg-[url('https://as1.ftcdn.net/v2/jpg/05/68/43/24/1000_F_568432405_XFcMG3gOylx7gUjwKBXtbzQcFBiACIY0.jpg')] bg-cover bg-center bg-no-repeat">
                </div>
                <h3 class="text-slate-700 font-extrabold text-3xl">Database</h3>
                <ul>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> SQL (básico ao avançado)
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> NoSQL
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> MariaDB & Postgres
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> MongoDB & Redis
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> BD Distribuídos
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Automação de BD
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> E mais...
                    </li>
                </ul>
            </div>
            <div class="space-y-5">
                <div
                    class="w-full h-[175px] bg-[url('https://static.vecteezy.com/system/resources/thumbnails/004/272/477/small/automation-software-background-gears-icons-made-with-binary-code-iot-and-automation-concept-digital-binary-data-and-streaming-digital-code-matrix-background-with-digits-1-0-illustration-vector.jpg')] bg-cover bg-center bg-no-repeat">

                </div>
                <h3 class="text-slate-700 font-extrabold text-3xl">Automação</h3>
                <ul>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Apps Script
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> IP's de Automação
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Geração de renda
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Integrando Automações
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> Bubble.io
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> FlutterFLow
                    </li>
                    <li class="items-center flex">
                        <CheckIcon class="w-4 h-4 inline-block text-gray-700 mr-2" /> E mais...
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="p-32 bg-gray-100 space-y-10 text-center">
        <div>
            <h2 class="text-slate-700 text-5xl font-extrabold text-center">Por que somos os melhores? </h2>
        </div>
        <div class="grid grid-flow-col auto-cols-1/4 space-x-5">
            <div class="space-y-5 p-10 bg-slate-200">
                <h4 class="text-slate-700 font-extrabold text-2xl">Conteúdo De Alta Qualidade</h4>
                <div class="w-5 h-1 bg-slate-900 m-auto"></div>
                <p class="text-slate-500">O conteúdo dos nossos cursos é atualizado e relevante para o mercado de
                    trabalho.</p>
            </div>
            <div class="space-y-5 p-10 bg-slate-200">
                <h4 class="text-slate-700 font-extrabold text-2xl">Metodologia De Ensino Eficaz</h4>
                <div class="w-5 h-1 bg-slate-900 m-auto"></div>
                <p class="text-slate-500">Oferececemos uma metodologia de ensino eficaz, que ajuda os alunos a aprender
                    de forma rápida e eficiente.</p>
            </div>
            <div class="space-y-5 p-10 bg-slate-200">
                <h4 class="text-slate-700 font-extrabold text-2xl">Suporte Ao Aluno</h4>
                <div class="w-5 h-1 bg-slate-900 m-auto"></div>
                <p class="text-slate-500">Oferecemos suporte ao aluno para que ele possa tirar dúvidas e receber ajuda
                    quando necessário.</p>
            </div>
            <div class="space-y-5 p-10 bg-slate-200">
                <h4 class="text-slate-700 font-extrabold text-2xl">Preço Acessível</h4>
                <div class="w-5 h-1 bg-slate-900 m-auto"></div>
                <p class="text-slate-500">Oferecemos cursos a preços acessíveis para que mais pessoas tenham acesso à
                    educação em programação.</p>
            </div>
        </div>

    </section>


    <section class="p-32 bg-gray-50 flex flex-row space-x-10">
        <div
            class="w-1/2 bg-[url('https://www.sydle.com/blog/assets/post/e-business-e-e-commerce-62448aa7b820e763c7216e67/e-business-e-e-commerce.jpg')] bg-cover bg-center bg-no-repeat">
        </div>
        <div class="w-1/2 space-y-10">
            <h2 class="text-slate-700 text-5xl font-extrabold">E quem somos?</h2>
            <div class=" space-y-5 text-slate-500 text-lg">
                <p>Código Mestre é uma plataforma de cursos de programação online que
                    oferece conteúdo de alta qualidade, metodologia de ensino eficaz, suporte ao aluno e preços acessíveis.
                </p>
                <p>A empresa oferece cursos em diversas áreas da programação, como
                    desenvolvimento web, desenvolvimento mobile, desenvolvimento de jogos, ciência de dados e Automação. Os
                    cursos são ministrados por professores experientes e qualificados.</p>
                <p>A Código Mestre também oferece suporte ao aluno através de fóruns,
                    chats e atendimento personalizado. A empresa oferece ainda descontos e promoções para estudantes e
                    profissionais.</p>
                <p>Com a Código Mestre, você pode aprender a programar e se tornar um
                    profissional de sucesso.</p>
            </div>
        </div>
    </section>

    <section class="p-32 bg-gray-100 space-y-10 text-left">
        <div>
            <h2 class="text-slate-700 text-5xl font-extrabold text-center">Veja o que nossos clientes estão dizendo...</h2>
        </div>
        <div class="grid grid-flow-col auto-cols-1/4 space-x-5">
            <div class="space-y-5 p-10">
                <p class="text-slate-500 text-2xl">"Em poucos meses, aprendi tudo o que precisava para começar a trabalhar
                    como
                    desenvolvedor web. Estou muito satisfeito com o resultado."</p>
                <div class="flex flex-row space-x-5 items-center">
                    <div
                        class="w-14 h-14 rounded-full bg-[url('https://d1ih8jugeo2m5m.cloudfront.net/2020/04/Luiz-nuvem-menor-221x300.png')] bg-cover bg-center bg-no-repeat">
                    </div>
                    <p class="text-slate-900 italic">João da Silva</p>
                </div>
            </div>
            <div class="space-y-5 p-10">
                <p class="text-slate-500 text-2xl">"Os cursos são muito práticos e os professores são muito experientes.
                    Estou muito satisfeita com o resultado e já estou trabalhando no meu primeiro aplicativo.
                    "</p>
                <div class="flex flex-row space-x-5 items-center">
                    <div
                        class="w-14 h-14 rounded-full bg-[url('https://s1.eestatic.com/2023/06/08/vivir/salud-mental/769933690_233804290_1706x960.jpg')] bg-cover bg-center bg-no-repeat">
                    </div>
                    <p class="text-slate-900 italic">Maria Souza</p>
                </div>
            </div>
            <div class="space-y-5 p-10">
                <p class="text-slate-500 text-2xl">"A Código Mestre me ajudou a aprender os fundamentos da ciência de dados
                    de forma rápida e eficiente. Eu já estou criando meus projetos acadêmicos."</p>
                <div class="flex flex-row space-x-5 items-center">
                    <div
                        class="w-14 h-14 rounded-full bg-[url('https://img.freepik.com/fotos-gratis/homem-barbudo-sorridente-na-camisa-aparecendo-polegar_171337-5020.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1698969600&semt=aishttps://img.freepik.com/fotos-gratis/homem-barbudo-sorridente-na-camisa-aparecendo-polegar_171337-5020.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1698969600&semt=ais')] bg-cover bg-center bg-no-repeat">
                    </div>
                    <p class="text-slate-900 italic">Pedro Santos</p>
                </div>
            </div>
        </div>

    </section>

    <section class="p-32 w-full">

        <a :href="route('register')">
            <div
                class=" select-none w-full p-5 font-mono text-center bg-blue-700 rounded-lg text-white m-auto hover:bg-blue-800 active:bg-blue-900 text-4xl shadow-xl shadow-gray-300 hover:shadow-gray-400 cursor-pointer">
                Cadastre-se
                Agora!</div>
        </a>

    </section>

    <section class="w-full p-5 text-white bg-black text-center text-lg">
        © 2023 Todos os direitos reservados

    </section>
</template>
