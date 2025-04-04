<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthLayout from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
}>();

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <AuthLayout title="Recuperar contraseña" description="Ingrese su correo electrónico para recibir un enlace para restablecer su contraseña">
        <Head title="Recuperar contraseña" />

        <div v-if="status" class="mb-4 text-sm font-medium text-center text-green-600">
            {{ status }}
        </div>

        <div class="space-y-6">
            <form @submit.prevent="submit">
                <div class="grid gap-2">
                    <Label for="email">Correo electrónico</Label>
                    <Input id="email" type="email" name="email" autocomplete="off" v-model="form.email" autofocus placeholder="Ingrese su correo registrado" />
                    <InputError :message="form.errors.email" />
                </div>

                <div class="flex items-center justify-start my-6">
                    <Button class="w-full" :disabled="form.processing">
                        <LoaderCircle v-if="form.processing" class="w-4 h-4 animate-spin" />
                        Restablecer contraseña
                    </Button>
                </div>
            </form>

            <div class="space-x-1 text-sm text-center text-muted-foreground">
                <span>Oh, regresar a</span>
                <TextLink :href="route('login')">Inicio de sesion</TextLink>
            </div>
        </div>
    </AuthLayout>
</template>
