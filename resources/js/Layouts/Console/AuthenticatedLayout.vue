<script setup lang="ts">
import { Icon } from '@iconify/vue';
import UserNav from '@/Components/Console/UserNav.vue';
import { Button } from '@/Components/ui/button';
import { useColorMode } from '@vueuse/core';
import Navbar from '@/Components/Console/Navbar.vue';
import NotificationNav from '@/Components/Console/NotificationNav.vue';

const mode = useColorMode();
</script>

<template>
    <div class="min-h-screen bg-background">
        <!-- Page Navigation -->
        <nav class="border-b h-16 flex items-center justify-between px-6">
            <div class="flex items-center gap-x-4">
                <Navbar />
            </div>
            <div class="flex items-center gap-x-2">
                <NotificationNav />
                <Button
                    variant="ghost"
                    size="icon"
                    @click="mode = mode == 'light' ? 'dark' : 'light'"
                >
                    <Icon
                        :icon="mode == 'dark' ? 'ic:outline-light-mode' : 'tdesign:mode-dark'"
                        class="size-5"
                    />
                </Button>
                <UserNav />
            </div>
        </nav>

        <!-- Page Heading -->
        <header class="w-full p-6" v-if="$slots.header">
            <slot name="header" />
        </header>

        <!-- Page Content -->
        <main class="w-full px-6">
            <slot />
        </main>
    </div>
</template>
