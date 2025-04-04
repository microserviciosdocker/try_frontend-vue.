<script lang="ts" setup>
import { Head } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Crear producto',
    href: '/products/create',
  },
];
</script>
<template>
    <head title="Crear nuevo producto"/>
    <AppLayout :breadcrumbs="breadcrumbs">

    </AppLayout>
</template>
