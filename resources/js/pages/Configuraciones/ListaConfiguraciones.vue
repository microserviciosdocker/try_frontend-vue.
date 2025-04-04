<script lang="ts" setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Configuraciones',
        href: '/configs.index',
    },
];
</script>
<template>
    <Head title="Configuraciones" />
    <AppLayout :breadcrumbs="breadcrumbs">

    </AppLayout>
</template>
