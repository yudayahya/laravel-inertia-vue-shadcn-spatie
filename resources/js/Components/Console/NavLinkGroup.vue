<script setup lang="ts">
import { Separator } from '@/Components/ui/separator';

const props = defineProps<{
    label: string;
}>();
</script>

<template>
    <Separator />
    <div class="flex flex-col gap-y-1.5">
        <div class="px-2 py-1.5 text-xs font-bold text-muted-foreground uppercase">
            {{ props.label }}
        </div>
        <slot />
    </div>
</template>
