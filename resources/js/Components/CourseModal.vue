<script setup>
import { PlusIcon, PencilIcon } from '@heroicons/vue/24/outline'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import SecondaryButton from '@/Components/SecondaryButton.vue'
import CrudModal from './CrudModal.vue';
import { ref, computed } from 'vue';

const emit = defineEmits(['close', 'submit']);

const props = defineProps({
    modal: Object,
    curso: {
        type: Object,
        default: null,
    },
    lista_categorias: Object,
})


// =============================================
// Controle de IMG do OBJETO
const show_img = ref(props.curso.img);

const removeCursoImg = () => {
    props.curso.img = null
    show_img.value = ''
    if (props.curso.errors.hasOwnProperty("img")) delete props.curso.errors.img
    document.querySelector("input[type='file']").value = ''
}

const setCursoImg = (event) => {
    const file = event.target.files[0]

    if (file.size > 2097152) {
        props.curso.errors.img = "A imagem que você tentou inserir é maior do que o tamanho permitido (2MB)"
        return
    }

    removeCursoImg()
    props.curso.img = file

    const reader = new FileReader()
    reader.readAsDataURL(file)
    reader.onloadend = () => {
        show_img.value = reader.result
    }
}

const objetivos = ref("")
const addObjetivo = () => {
    props.curso.objetivos.push(objetivos.value)
    objetivos.value = ""
}
const rmObjetivo = (objetivo) => {
    props.curso.objetivos = props.curso.objetivos.filter((obj) => obj !== objetivo)
}

const close = () => {
    show_img.value = ""
    emit('close')
}

const submit = () => {
    emit('submit')
}

</script>
<template>
    <CrudModal :show="modal.show" @close="close">
        <template #icon>
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-blue-400 sm:mx-0 sm:h-10 sm:w-10"
                :class="{ 'bg-yellow-400': modal.mode !== 'create' }">
                <PlusIcon v-if="modal.mode == 'create'" class="w-5 h-5 text-white" />
                <PencilIcon v-else class="w-5 h-5 text-white" />
            </div>
        </template>

        <template #title>
            <div v-if="modal.mode === 'create'">{{ modal.title }}</div>
            <div v-else>{{ modal.title + "'" + curso.nome + "'" }}</div>
        </template>

        <template #content>
            <form @submit.prevent="submit">
                <div class="pb-12 space-y-12 divide-y-2">
                    <section class="py-4">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Informações Básicas</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Imagem representativa, nome, descrição, categoria e
                            cor, preço e atributos
                            do curso</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="sm:col-span-full">
                                <label for="item-profile-img"
                                    class="block text-sm font-medium leading-6 text-gray-900">Imagem do
                                    Curso</label>
                                <div class="mt-2">
                                    <label type="button" for="item-profile-img"
                                        class="w-full rounded-md bg-white text-center text-sm font-semibold text-gray-600 py-2 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 cursor-pointer">Inserir
                                        Imagem</label>
                                    <p class="text-gray-400 text-xs py-1">PNG ou JPG/JPEG até 2MB</p>
                                    <input id="item-profile-img" name="item-profile-img" type="file"
                                        accept="image/png,image/jpeg,image/jpg" maxSize="2MB" class="sr-only"
                                        @input="setCursoImg" />
                                </div>
                                <div v-if="curso.img && show_img" class="mt-2">
                                    <img :src="show_img" class="h-max-[200px] m-auto" />
                                    <p class="w-full text-center text-sm text-gray-500 py-2 font-mono">{{
                                        curso.img.nome
                                    }}</p>
                                </div>

                                <p v-if="curso.errors.img" class="w-full text-center text-red-500 font-mono py-2">{{
                                    curso.errors.img }}</p>

                                <button v-if="curso.img || curso.errors.img" type="button"
                                    class="w-full text-center text-red-700 hover:text-red-500 active:text-red-300 py-2"
                                    @click="removeCursoImg()">
                                    Remover Imagem</button>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="curso-nome"
                                    class="block text-sm font-medium leading-6 text-gray-900 required-input-label">Nome</label>
                                <div class="mt-2">
                                    <input type="text" name="curso-nome" id="curso-nome" autocomplete="on"
                                        class="simple-input" autofocus="true"
                                        placeholder="Insira um nome completo e de fácil pesquisa" v-model="curso.nome"
                                        required>
                                    <p v-if="curso.errors.nome" class="text-red-500 font-mono">{{
                                        curso.errors.nome }}</p>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="curso-descricao"
                                    class="block text-sm font-medium leading-6 text-gray-900 required-input-label">Descrição</label>
                                <div class="mt-2">
                                    <textarea type="text" name="curso-descricao" id="curso-descricao" autocomplete="on"
                                        class="simple-input" autofocus="true"
                                        placeholder="Insira um descrição completa do curso" v-model="curso.descricao"
                                        rows="4" required></textarea>
                                    <p v-if="curso.errors.descricao" class="text-red-500 font-mono">{{
                                        curso.errors.descricao }}</p>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="curso-categoria"
                                    class="block text-sm font-medium leading-6 text-gray-900 required-input-label">Categoria</label>
                                <div class="mt-2">
                                    <select id="curso-categoria" name="curso-categoria" class="simple-select"
                                        v-model="curso.categoria_id" required>
                                        <option v-for=" categoria  in  lista_categorias " :value="categoria.id">{{
                                            categoria.nome }}</option>
                                    </select>
                                    <p v-if="curso.errors.categoria_id" class="text-red-500 font-mono">{{
                                        curso.errors.categoria_id }}</p>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="curso-preco"
                                    class="block text-sm font-medium leading-6 text-gray-900 required-input-label">Preço</label>
                                <div class="mt-2">
                                    <input id="curso-preco" name="curso-preco" type="number" step="0.01" min="0"
                                        autocomplete="on" class="simple-input" v-model="curso.preco" required>
                                    <p v-if="curso.errors.preco" class="text-red-500 font-mono">{{
                                        curso.errors.preco }}</p>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="curso-objetivos"
                                    class="block text-sm font-medium leading-6 text-gray-900 required-input-label">Objetivos
                                    do curso</label>
                                <div class="mt-2">
                                    <input type="text" name="curso-objetivos" id="curso-objetivos" autocomplete="on"
                                        class="simple-input" autofocus="true"
                                        placeholder="Insira um objetivos completo e de fácil pesquisa" v-model="objetivos"
                                        required>
                                    <SecondaryButton @click="addObjetivo()" class="my-5">Adicionar Objetivo
                                    </SecondaryButton>
                                    <p v-if="curso.errors.objetivos" class="text-red-500 font-mono">{{
                                        curso.errors.objetivos }}</p>
                                </div>
                                <div>
                                    <ul v-if="curso.objetivos.length">
                                        <li class="group flex flex-row space-x-5" v-for="objetivo in curso.objetivos"
                                            :key="objetivo"> > {{ objetivo
                                            }}
                                            <span
                                                class="text-xs text-red-500 hidden group-hover:flex items-center justify-center ml-5 cursor-pointer"
                                                @click="rmObjetivo(objetivo)">[Remover]</span>
                                        </li>
                                    </ul>
                                    <p class="text-slate-500" v-else> > Nenhum objetivo adicionado</p>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </form>
        </template>

        <template #footer>
            <SecondaryButton :class="{ 'disabled': curso.processing }" @click="close()">Cancelar
            </SecondaryButton>
            <PrimaryButton :class="{ 'disabled': curso.processing }" @click="submit()">{{ modal.primary_button_txt
            }}</PrimaryButton>
        </template>
    </CrudModal>
</template>