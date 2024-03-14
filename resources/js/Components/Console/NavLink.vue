<script setup lang="ts">
import { SheetClose } from '@/Components/ui/sheet';
import { Icon } from '@iconify/vue';
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps<{
    href: string;
    label: string;
    icon?: string;
    active?: boolean;
}>();

const classes = computed(() =>
    props.active ? 'text-primary' : 'text-muted-foreground hover:text-primary',
);
</script>

<template>
    <SheetClose as-child>
        <Link
            :href="href"
            class="text-sm font-medium transition-colors flex gap-x-2 px-2 py-1.5 rounded-md bg-background hover:bg-accent"
            :class="classes"
        >
            <Icon v-if="icon" :icon="icon" class="size-5" />
            {{ label }}
        </Link>
    </SheetClose>
</template>
