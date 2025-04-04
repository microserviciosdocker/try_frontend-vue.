<script lang="ts" setup>
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem, type SharedData } from '@/types';
import { Head, usePage, Link, router } from '@inertiajs/vue3';
// import PlaceholderPattern from '@/components/PlaceholderPattern.vue';
import Button from '@/components/ui/button/Button.vue';
import Input from '@/components/ui/input/Input.vue';
import { Upload, ScanEye, FilePenLine, Pencil, Trash } from 'lucide-vue-next';
import { Text } from 'vue';
import { computed } from 'vue';
import TextLink from '@/components/TextLink.vue';
interface ProductPageProps extends SharedData {
  employees: Product[];
}
const props = defineProps<ProductPageProps>();
const { products } = usePage().props as ProductPageProps;
const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'Lista productos',
    href: '/products',
  },
];
</script>
<template>

  <Head title="Lista productos" />
  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="w-full">
      <div class="flex items-center justify-between m-2">
        <Input placeholder="Buscar producto" class="mr-2" />
        <TextLink
          :href="route('products.create')"
          class="flex items-center px-4 py-2 text-xs font-medium text-white bg-blue-500 border border-transparent rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
          ><Upload size="15" class="mr-1"/> Nuevo</TextLink>
      </div>
      <section class="mx-2 bg-blueGray-50">
        <div class="block w-full ">
          <div class="my-2 rounded-xl">
            <table class="w-full text-sm border-collapse table-auto">
              <thead>
                <tr>
                  <!-- <th class="p-1 border-b border-gray-400"><input type="checkbox"></th> -->
                  <th class="p-3 text-left border-b border-gray-500">Nombre</th>
                  <th class="p-1 text-center border-b border-gray-500">Descripcion</th>
                  <th class="text-left border-b border-gray-500">Precio</th>
                  <th class="text-center border-b border-gray-500">Stock</th>
                  <th class="text-center border-b border-gray-500">Imagen</th>
                  <th class="text-center border-b border-gray-500">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="product in products" :key="products">
                  <td class="p-3">{{ product.name }}</td>
                  <td>{{ product.description }}</td>
                  <td>$ {{ product.price }}</td>
                  <td class="text-center">{{ product.stock }}</td>
                  <td class="flex items-center justify-center">
                    <img src="images/openbox.png" alt="Producto" class="object-cover w-10 h-10" />
                  </td>
                  <td class="text-center">
                    <Button as-child size="sm" class="text-white bg-blue-500 hover:bg-blue-700">
                      <Link :href="`/products/${product.id}/edit`">
                      <Pencil />
                      </Link>
                    </Button>
                    <Button size="sm" class="ml-1 text-white bg-rose-500 hover:bg-rose-700"
                      @click="route('products.destroy', product.id)">
                      <Trash />
                    </Button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>
    </div>
  </AppLayout>
</template>
