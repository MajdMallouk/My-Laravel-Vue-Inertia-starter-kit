<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    appName: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Home" />

    <main class="min-h-screen bg-slate-950 text-white">
        <div class="mx-auto flex min-h-screen max-w-5xl flex-col justify-center gap-10 px-6 py-20">
            <div class="space-y-4">
                <p class="text-sm font-medium uppercase tracking-[0.35em] text-sky-300">Laravel + Inertia + Vue</p>
                <h1 class="text-4xl font-semibold tracking-tight sm:text-6xl">{{ appName }}</h1>
                <p class="max-w-2xl text-lg text-slate-300">
                    Vue is mounted through Inertia, and Ziggy is available for route-aware links directly inside your
                    components.
                </p>
            </div>

            <div class="flex flex-wrap gap-4">
                <Link
                    :href="route('home')"
                    class="inline-flex items-center justify-center rounded-full bg-sky-400 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-sky-300"
                >
                    Reload this page
                </Link>

                <a
                    href="https://laravel.com/docs/13.x/starter-kits"
                    target="_blank"
                    rel="noreferrer"
                    class="inline-flex items-center justify-center rounded-full border border-white/15 px-5 py-3 text-sm font-semibold text-white transition hover:border-white/30 hover:bg-white/5"
                >
                    Laravel docs
                </a>
            </div>

            <div class="grid gap-4 rounded-3xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-sky-950/30 sm:grid-cols-2">
                <div class="space-y-2">
                    <p class="text-sm font-medium text-sky-300">Current route</p>
                    <p class="text-2xl font-semibold">{{ route().current() }}</p>
                </div>

                <div class="space-y-2">
                    <p class="text-sm font-medium text-sky-300">Ziggy helper</p>
                    <p class="break-all font-mono text-sm text-slate-300">{{ route('home') }}</p>
                </div>
            </div>
        </div>
    </main>
</template>
