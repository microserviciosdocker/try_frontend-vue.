<script lang="ts" setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem, type SharedData } from '@/types';
import { Head, usePage, Link } from '@inertiajs/vue3';
import Button from '@/components/ui/button/Button.vue';
import Input from '@/components/ui/input/Input.vue';
const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Editar producto',
    href: '/products/{product}/edit',
  },
];
</script>
<template>
  <Head title="Editar producto" />
  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="w-full">
      <!-- <div class="flex items-center justify-between m-2">
        <Input placeholder="Buscar producto" class="mr-2" />
        <Button>
          <Upload /> Nuevo producto
        </Button>
      </div> -->
      <section class="mx-2 bg-blueGray-50">
        <div class="block w-full ">
          <div class="my-2 rounded-xl">

          </div>
        </div>
      </section>
    </div>
  </AppLayout>
</template>
