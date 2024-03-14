<script setup lang="ts">
import { Avatar, AvatarFallback, AvatarImage } from '@/Components/ui/avatar';
import { Button } from '@/Components/ui/button';
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuGroup,
    DropdownMenuItem,
    DropdownMenuLabel,
    DropdownMenuSeparator,
    DropdownMenuTrigger,
} from '@/Components/ui/dropdown-menu';
</script>

<template>
    <DropdownMenu>
        <DropdownMenuTrigger as-child>
            <Button variant="ghost" class="relative size-10 rounded-full">
                <Avatar class="size-10">
                    <!-- <AvatarImage src="/avatars/01.png" alt="@shadcn" /> -->
                    <AvatarFallback>SA</AvatarFallback>
                </Avatar>
            </Button>
        </DropdownMenuTrigger>
        <DropdownMenuContent class="w-56" align="end">
            <DropdownMenuLabel class="font-normal flex">
                <div class="flex flex-col space-y-1">
                    <p class="text-sm font-medium leading-none">{{ $page.props.auth.user.name }}</p>
                    <p class="text-xs leading-none text-muted-foreground">
                        {{ $page.props.auth.user.email }}
                    </p>
                </div>
            </DropdownMenuLabel>
            <DropdownMenuSeparator />
            <DropdownMenuGroup>
                <DropdownMenuItem>Profile</DropdownMenuItem>
                <DropdownMenuItem>Settings</DropdownMenuItem>
            </DropdownMenuGroup>
            <DropdownMenuSeparator />
            <DropdownMenuItem as="a" :href="route('logout')">Log Out</DropdownMenuItem>
        </DropdownMenuContent>
    </DropdownMenu>
</template>
