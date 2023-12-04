<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import ClientsList from '@/Components/ClientsList.vue';
import CoursesList from '@/Components/CoursesList.vue';
import { ref } from 'vue'
import ClientArea from '@/Components/ClientArea.vue';
const op = ref(0)

const props = defineProps({
    clientes: {
        type: Object,
        default: null,
    },
    categorias: {
        type: Object,
        default: null,
    },
    usuario_categorias: {
        type: Object,
        default: null,
    },
    lista_categorias: {
        type: Object,
        default: null,
    },
    user_id: {
        type: Number,
        default: null,
    },
})

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div v-if="$page.props.auth.user.id !== 1" class="p-20">
                        <ClientArea :categorias="categorias" :usuario_categorias="usuario_categorias" :user_id="user_id" />
                    </div>
                    <div v-else class="p-20">

                        <div class="w-full border-2 rouded-lg flex felx-row bg-white text-center">
                            <div class="w-1/2 cursor-pointer hover:bg-gray-300 active:bg-gray-400" @click="op = 0"
                                :class="{ 'bg-gray-200': op == 0, 'bg-white': op == 1 }">
                                Clientes</div>
                            <div class="w-1/2 cursor-pointer hover:bg-gray-300 active:bg-gray-400" @click="op = 1"
                                :class="{ 'bg-gray-200': op == 1, 'bg-white': op == 0 }">Cursos
                            </div>
                        </div>

                        <ClientsList :clientes="clientes" v-if="op == 0" />
                        <CoursesList :categorias="categorias" :lista_categorias="lista_categorias" v-else />
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
