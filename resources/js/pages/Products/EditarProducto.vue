<script lang="ts" setup>
import { BreadcrumbItem } from '@/types/breadcrumbs';
import { type Product } from '@/types/products';
import { type ProductPageProps } from '@/types/products';

import { usePage } from '@inertiajs/vue3';
import { type SharedData } from '@/types';
import { defineProps } from 'vue';

import { Head } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import Button from '@/components/ui/button/Button.vue';

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Ediatr producto',
    href: '/products/edir',
  },
];
</script>
<template>

  <head title="Editar producto" />
  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="flex flex-col w-full p-4 mx-auto text-xs">
      <form @click="submit" enctype="multipart/form-data" method="POST" class="grid grid-cols-2 gap-4">
        <div>
          <label for="name">Nombre</label>
          <input type="text" name="name" id="name" class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div class="col">
          <label for="description">Descripción</label>
          <input name="description" id="description" class="w-full p-2 border border-gray-300 rounded-md"></input>
        </div>
        <div>
          <label for="price">Precio</label>
          <input type="number" name="price" id="price" class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div>
          <label for="stock">Stock</label>
          <input type="number" name="stock" id="stock" class="w-full p-2 border border-gray-300 rounded-md" />
        </div>
        <div>
          <input type="file" name="imagen" id="imagen" class="w-full p-2 mt-4 border border-gray-300 rounded-md" />
        </div>
        <div>
          <Button class="w-full mt-4">Guardar</Button>
        </div>
      </form>
    </div>
  </AppLayout>
</template>
