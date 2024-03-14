<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/Console/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="User" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-2xl font-bold tracking-tight">User</h2>
        </template>

        <div>This is User Page!</div>
    </AuthenticatedLayout>
</template>
