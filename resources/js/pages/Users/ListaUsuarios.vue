<script lang="ts" setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Lista usuarios',
        href: '/users',
    },
];
</script>
<template>
    <Head title="Lista usuarios" />
    <AppLayout :breadcrumbs="breadcrumbs">

    </AppLayout>
</template>
