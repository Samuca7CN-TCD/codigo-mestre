<script setup>
import { PencilIcon, XMarkIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/outline';

import { ref, computed } from 'vue'
import CourseModal from './CourseModal.vue';
import { router, useForm } from '@inertiajs/vue3';
import SecondaryButton from './SecondaryButton.vue';

const props = defineProps({
    categorias: Object,
    lista_categorias: Object,
})

const search_categoria_term = ref("")

const categorias_filtradas = computed(() => {
    return props.categorias.map((categoria) => {
        const cursosFiltrados = categoria.cursos.filter((curso) => {
            const nomeMatch = curso.nome.toLowerCase().includes(search_categoria_term.value.toLowerCase());
            const precoMatch = curso.preco.toString().includes(search_categoria_term.value.toLowerCase());

            return nomeMatch || precoMatch;
        });

        // Criando uma cópia da categoria original e substituindo os cursos filtrados
        return { ...categoria, cursos: cursosFiltrados };
    });
});

const qtd_cursos = computed(() => {
    return props.categorias.reduce((total, cat) => total + cat.cursos.length, 0);
});

const qtd_cursos_filtrados = computed(() => {
    return categorias_filtradas.value.reduce((total, cat) => total + cat.cursos.length, 0);
})

const frase_qtd_cursos = computed(() => {
    return qtd_cursos.value === 1 ? ' curso cadastrado' : ' cursos cadastrados'
})

const frase_qtd_cursos_filtrados = computed(() => {
    return qtd_cursos_filtrados.value === 1 ? ' curso' : ' cursos'
})

const curso_data = useForm({
    categoria_id: 1,
    nome: "",
    descricao: "",
    objetivos: [],
    cor: "indigo",
    preco: 0,
    img: "",
})

const resolve_curso_img = (curso_img) => {
    if (curso_img.startsWith('public/')) {
        return curso_img.replace(/^public\//, 'storage/');
    }
    return curso_img;
}

// =============================================
// Controle de Modal
const modal = ref({
    mode: 'create',
    show: false,
    get title() {
        return this.mode === 'create' ? "Criar curso" : "Editar o curso "
    },
    get primary_button_txt() {
        return this.mode === 'create' ? "Cadastrar" : "Atualizar"
    }
})

const openModal = (mode, categoria_id = null, curso_id = null) => {
    if (mode == 'update') {
        const categoria = props.categorias.find(categoria => categoria.id === categoria_id)
        if (!categoria) {
            alert("Categoria do curso não encontrada!")
            return
        }

        const curso = categoria.cursos.find(curso => curso.id === curso_id)
        if (!curso) {
            alert("Curso não encontrado. Informar o Técnico.")
            return
        }
        curso_data.id = curso.id
        curso_data.categoria_id = curso.categoria_id
        curso_data.nome = curso.nome
        curso_data.descricao = curso.descricao
        curso_data.objetivos = JSON.parse(curso.objetivos)
        curso_data.cor = curso.cor
        curso_data.preco = curso.preco
        curso_data.img = resolve_curso_img(curso.img)
    }

    modal.value.mode = mode
    modal.value.show = true
}

const criar_curso = () => {
    curso_data.post(route('curso.store'), {
        preserveScroll: true,
        onSuccess: () => closeModal()
    })
}

const editar_curso = () => {
    curso_data.post(route('curso.update', curso_data.id), {
        _method: 'put',
        preserveScroll: true,
        onSuccess: () => closeModal()
    })
}

const deletar_curso = (curso_id) => {
    router.delete(route('curso.destroy', curso_id), {
        preserveScroll: true,
        onSuccess: () => { closeModal() }
    })
}

const submit = () => {
    if (modal.value.mode === 'create') {
        criar_curso()
    } else {
        editar_curso()
    }
}

const closeModal = () => {
    curso_data.reset()
    modal.value.show = false
}

</script>
<template>
    <div class="flex flex-row space-x-5 items-baseline my-5">
        <label for="search_course" class=" cursor-pointer text-sm font-medium leading-6 text-right text-gray-900">
            <MagnifyingGlassIcon class="w-5 h-5" />
        </label>
        <div class="w-full relative mt-2 rounded-md">
            <input type="text" title="search_course" id="search_course"
                class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                placeholder="Filtrar curso" v-model="search_categoria_term" />
            <div class="py-2 text-xs text-slate-500">O filtro aceita nome ou preço do curso</div>
        </div>
    </div>

    <div v-if="!search_categoria_term.length" class="w-full text-right text-lg text-indigo-700">{{ qtd_cursos }}{{
        frase_qtd_cursos }}</div>
    <div v-else class="w-full text-right text-lg text-indigo-700">Resultado do filtro: {{ qtd_cursos_filtrados }}{{
        frase_qtd_cursos_filtrados }}</div>

    <div class="my-5 text-right cursor-pointer text-indigo-500 hover:text-indigo-700 active:text-indigo-900 select-none"
        @click="() => openModal('create')">
        + Cadastrar novo curso
    </div>

    <ul v-for="categoria in categorias_filtradas" class="divide-y divide-gray-100">
        <h2 class="text-3xl text-slate-700 font-extrabold">{{ categoria.nome }}</h2>
        <li v-if="categoria.cursos.length" v-for="curso in categoria.cursos" key="item.name"
            class="flex justify-between gap-x-6 p-5 m-5 rounded-xl bg-slate-50">
            <div class="flex min-w-0 gap-x-4  space-x-10">
                <img class="h-32 w-52 flex-none rounded-lg bg-indigo-300" :src="resolve_curso_img(curso.img)" alt="" />
                <div class="min-w-0 flex-auto  space-y-5">
                    <p class="text-xl font-semibold leading-6 text-gray-900">{{ curso.nome }}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ curso.descricao }}</p>
                    <p class="mt-1 truncate text-sm leading-5 text-gray-700 font-extrabold">
                    <ul>
                        <li v-for="objective in JSON.parse(curso.objetivos)"> + {{ objective }}</li>
                    </ul>
                    </p>
                    <p class="mt-1 truncate text-lg leading-5 text-gray-800">R$ {{ curso.preco }},00</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <div class="flex flex-row space-x-3 items-center">
                    <PencilIcon :title="'Editar curso: ' + curso.nome"
                        class="w-5 h-5 cursor-pointer text-gray-700 hover:text-yellow-700 active:hover:text-yellow-900"
                        @click="openModal('update', categoria.id, curso.id)" />
                    <XMarkIcon :title="'Deletar curso: ' + curso.nome"
                        class="w-5 h-5 cursor-pointer text-gray-700 hover:text-red-700 active:hover:text-red-900"
                        @click="deletar_curso(curso.id)" />
                </div>
            </div>
        </li>
        <li v-else class="w-full rounded-lg bg-slate-200 text-slate-500 text-xl text-center p-3 my-5 mx-3">Sem registros
        </li>
    </ul>

    <CourseModal :show="modal.show" :modal="modal" :curso="curso_data" :lista_categorias="lista_categorias" @submit="submit"
        @close="closeModal" />
</template>