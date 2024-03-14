<script setup lang="ts">
import { Icon } from '@iconify/vue';
import { Button } from '@/Components/ui/button';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/Components/ui/dropdown-menu';
import { Link } from '@inertiajs/vue3';
import { ScrollArea } from '@/Components/ui/scroll-area';

const item = {
    name: 'John Doe',
    date: '2 minutes ago',
    subject: 'Purchased',
    text: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio, optio nemo. Fugiat, nam fuga amet, quibusdam velit id debitis vero quia ipsa architecto sint aliquid voluptate necessitatibus error consequatur alias!',
};
</script>

<template>
    <DropdownMenu>
        <DropdownMenuTrigger as-child>
            <Button variant="ghost" size="icon">
                <Icon icon="solar:notification-unread-lines-outline" class="size-5" />
            </Button>
        </DropdownMenuTrigger>
        <DropdownMenuContent class="w-80 md:w-96" align="end">
            <DropdownMenuLabel>Notifications</DropdownMenuLabel>
            <DropdownMenuSeparator />
            <ScrollArea class="h-96 flex">
                <div class="flex-1 flex flex-col gap-2">
                    <button
                        v-for="n in 10"
                        :key="n"
                        class="flex flex-col items-start gap-2 rounded-lg border p-3 text-left text-sm transition-all hover:bg-accent"
                    >
                        <div class="flex w-full flex-col gap-1">
                            <div class="flex items-center">
                                <div class="flex items-center gap-2">
                                    <div class="font-semibold">
                                        {{ item.name }}
                                    </div>
                                </div>
                                <div class="ml-auto text-xs text-muted-foreground">
                                    {{ item.date }}
                                </div>
                            </div>

                            <div class="text-xs font-medium">
                                {{ item.subject }}
                            </div>
                        </div>
                        <div class="line-clamp-2 text-xs text-muted-foreground">
                            {{ item.text.substring(0, 300) }}
                        </div>
                    </button>
                </div>
            </ScrollArea>
            <DropdownMenuSeparator />
            <div
                class="flex justify-center items-center py-1.5 text-xs text-muted-foreground hover:text-foreground"
            >
                <Link href="#">Notification History ></Link>
            </div>
        </DropdownMenuContent>
    </DropdownMenu>
</template>
