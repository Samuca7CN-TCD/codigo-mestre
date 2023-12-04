<script setup>
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/20/solid'
import { CheckBadgeIcon, CheckCircleIcon, ListBulletIcon, MagnifyingGlassIcon } from '@heroicons/vue/24/outline';

import { ref, computed } from 'vue'
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'

const props = defineProps({
    clientes: Object,
})

const search_cliente_term = ref("")
const clientes_filtrados = computed(() => {
    return props.clientes.filter((el) => {
        const nomeMatch = el.name.toLowerCase().includes(search_cliente_term.value.toLowerCase());
        const emailMatch = el.email.toLowerCase().includes(search_cliente_term.value.toLowerCase());
        const cursosMatch = el.cursos.some((curso) => curso.nome.toLowerCase().includes(search_cliente_term.value.toLowerCase()));

        return nomeMatch || emailMatch || cursosMatch;
    })
})

const frase_qtd_clientes = computed(() => {
    return props.clientes.length === 1 ? ' cliente cadastrado' : ' clientes cadastrados'
})

const frase_qtd_clientes_filtrados = computed(() => {
    return clientes_filtrados.value.length === 1 ? ' cliente' : ' clientes'
})

const open = ref(false)

const selected_client = ref(null)
</script>
<template>
    <div class="flex flex-row space-x-5 items-baseline my-5">
        <label for="client_search" class="cursor-pointer mx-auto text-sm font-medium leading-6 text-right text-gray-900">
            <MagnifyingGlassIcon class="w-5 h-5" />
        </label>
        <div class="w-full relative mt-2 rounded-md">
            <input type="text" name="client_search" id="client_search"
                class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                placeholder="Filtrar cliente" v-model="search_cliente_term" />
            <div class="py-2 text-xs text-slate-500">O filtro aceita nome ou email do cliente ou nome dos cursos que o
                cliente
                adquiriu</div>
        </div>
    </div>

    <div v-if="!search_cliente_term.length" class="w-full text-right text-lg text-indigo-700">{{ clientes.length }}{{
        frase_qtd_clientes }}</div>
    <div v-else class="w-full text-right text-lg text-indigo-700">Resultado do filtro: {{ clientes_filtrados.length }}{{
        frase_qtd_clientes_filtrados }}</div>

    <ul v-if="clientes_filtrados.length" courses_amount="list" class="divide-y divide-gray-100">
        <li v-for="cliente in clientes_filtrados" :key="cliente.email" class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" :src="cliente.profile_photo_path" alt="" />
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ cliente.name }}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ cliente.email }}</p>
                </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">{{ cliente.cursos.length + (cliente.cursos.length == 1 ?
                    ' curso adquirido' : ' cursos adquiridos') }}</p>
                <div v-if="cliente.cursos.length > 0"
                    class="cursor-pointer mt-1 text-xs leading-5 text-gray-700 hover:text-gray-800 active:text-gray-900"
                    @click="() => { selected_client = cliente; open = true }">
                    Ver cursos >
                </div>
            </div>
        </li>
    </ul>
    <div v-else class="w-full rounded-lg bg-slate-200 text-slate-500 text-xl text-center p-5">Sem registros</div>

    <TransitionRoot as="template" :show="open">
        <Dialog as="div" class="relative z-10" @close="open = false">
            <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100"
                leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" />
            </TransitionChild>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <TransitionChild as="template" enter="ease-out duration-300"
                        enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200"
                        leave-from="opacity-100 translate-y-0 sm:scale-100"
                        leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                        <DialogPanel
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <ListBulletIcon class="h-6 w-6 text-blue-600" aria-hidden="true" />
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <DialogTitle as="h3" class="text-base font-semibold leading-6 text-gray-900">
                                            Cursos de {{ selected_client.name }}</DialogTitle>
                                        <div class="mt-2">
                                            <ul class="p-3">
                                                <li v-for="curso in selected_client.cursos"
                                                    class="flex flex-row space-x-3 items-center py-3">
                                                    <CheckCircleIcon class="w-5 h-5 text-blue-500" />
                                                    <span>{{ curso.nome }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="button"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto"
                                    @click="open = false" ref="cancelButtonRef">Fechar</button>
                            </div>
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>