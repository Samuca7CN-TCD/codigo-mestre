<script setup>
import { PencilIcon, XMarkIcon, CheckCircleIcon, ListBulletIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/outline';

import { ref } from 'vue'
import { router, useForm } from '@inertiajs/vue3';

const props = defineProps({
    categorias: Object,
    usuario_categorias: Object,
    user_id: Number,
})

const open = ref(false)

const comprar = (curso_id) => {
    router.post(route('curso.comprar', curso_id), {
        preventDefault: true,
    })
}

</script>
<template>
    <h1 class="text-5xl my-10">Meus Cursos</h1>
    <div class="grid grid-flow-col auto-cols-1/4 space-x-5">
        <div v-for="curso in usuario_categorias" :key="curso.id" class="">
            <div class="space-y-5 p-5 bg-slate-100 rounded-xl">
                <img :src="curso.img" class="w-full" />
                <div class="flex flex-col space-y-5">
                    <p class="text-lg font-extrabold">{{ curso.nome }}</p>
                    <p class="text-gray-400 text-sm">{{ curso.descricao }}</p>
                    <button class="p-1 bg-green-700 text-white rounded-full">Acessar</button>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-5xl my-10">Outros Cursos</h1>
    <div v-for="categoria in categorias" class="space-y-5">
        <h2 class=" text-3xl my-10">{{ categoria.nome }}</h2>
        <div class="flex flex-row space-x-5">
            <div v-for="curso in categoria.cursos" class="w-1/4 p-5 bg-slate-100 rounded-xl">
                <img :src="curso.img" class="space-y-5" />
                <div class="space-y-5">
                    <p class="text-lg font-extrabold">{{ curso.nome }}</p>
                    <p class="text-gray-400 text-sm">{{ curso.descricao }}</p>
                    <p class="font-bold">R$ {{ curso.preco }},00</p>
                    <button class="w-full p-1 bg-indigo-700 text-white rounded-full"
                        @click="comprar(curso.id)">Comprar</button>
                </div>
            </div>
        </div>
    </div>
</template>