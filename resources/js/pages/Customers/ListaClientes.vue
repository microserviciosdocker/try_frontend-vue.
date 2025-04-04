<script lang="ts" setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Lista clientes',
        href: '/customers',
    },
];
</script>
<template>
    <Head title="Lista clientes" />
    <AppLayout :breadcrumbs="breadcrumbs">

    </AppLayout>
</template>
