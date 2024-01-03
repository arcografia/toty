<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Rentabilidad from '@/Components/Rentabilidad.vue';
</script>

<template>
    <AppLayout title="Rentabilidad">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Rentabilidad
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-300 overflow-hidden shadow-xl sm:rounded-lg">
                    <Rentabilidad />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
