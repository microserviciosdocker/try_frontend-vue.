<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

const form = useForm({
    username: '',
    name: '',
    lastname: '',
    phone: '',
    chat_id: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <AuthBase title="Crear una cuenta" description="Ingrese los datos para crear una cuenta.">
        <Head title="Register" />

        <form @submit.prevent="submit" class="flex flex-col gap-6">
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <Label for="username">Usuario</Label>
                    <Input id="username" type="text" required autofocus :tabindex="1" autocomplete="username" v-model="form.username" placeholder="Nombre de usuario" />
                    <InputError :message="form.errors.username" />
                </div>

                <div class="grid gap-2">
                    <Label for="name">Nombre</Label>
                    <Input id="name" type="text" required :tabindex="1" autocomplete="name" v-model="form.name" placeholder="Nombre" />
                    <InputError :message="form.errors.name" />
                </div>

                <div class="grid gap-2">
                    <Label for="lastname">Apellido</Label>
                    <Input id="lastname" type="text" required :tabindex="1" autocomplete="lastname" v-model="form.lastname" placeholder="Apellido" />
                    <InputError :message="form.errors.lastname" />
                </div>

                <div class="grid gap-2">
                    <Label for="phone">Telefono</Label>
                    <Input id="phone" type="text" :tabindex="1" autocomplete="phone" v-model="form.phone" placeholder="Telefono" />
                    <InputError :message="form.errors.phone" />
                </div>

                <div class="grid gap-2">
                    <Label for="chat_id">ID Telegram</Label>
                    <Input id="chat_id" type="text" :tabindex="1" autocomplete="chat_id" v-model="form.chat_id" placeholder="ID de telegram" />
                    <InputError :message="form.errors.chat_id" />
                </div>

                <div class="grid gap-2">
                    <Label for="email">Correo electronico </Label>
                    <Input id="email" type="email" required :tabindex="2" autocomplete="email" v-model="form.email" placeholder="Correo electronico" />
                    <InputError :message="form.errors.email" />
                </div>

                <div class="grid gap-2">
                    <Label for="password">Contraseña</Label>
                    <Input
                        id="password"
                        type="password"
                        required
                        :tabindex="3"
                        autocomplete="new-password"
                        v-model="form.password"
                        placeholder="Contraseña"
                    />
                    <InputError :message="form.errors.password" />
                </div>

                <div class="grid gap-2">
                    <Label for="password_confirmation">Confirmar Contraseña</Label>
                    <Input
                        id="password_confirmation"
                        type="password"
                        required
                        :tabindex="4"
                        autocomplete="new-password"
                        v-model="form.password_confirmation"
                        placeholder="Confirmar Contraseña"
                    />
                    <InputError :message="form.errors.password_confirmation" />
                </div>

                <Button type="submit" class="w-full mt-2" tabindex="5" :disabled="form.processing">
                    <LoaderCircle v-if="form.processing" class="w-4 h-4 animate-spin" />
                    Crear nueva cuenta
                </Button>
            </div>

            <div class="text-sm text-center text-muted-foreground">
                Ya tienes una cuenta?
                <TextLink :href="route('login')" class="ml-2 underline underline-offset-4" :tabindex="6">Ingresar al sistema</TextLink>
            </div>
        </form>
    </AuthBase>
</template>
