<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Home" />

    <main class="flex min-h-screen items-center justify-center bg-slate-950 px-6 py-12 text-white">
        <section class="w-full max-w-xl rounded-2xl border border-white/10 bg-white/5 p-8 shadow-2xl shadow-black/20">
            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-cyan-300">Research Pulse</p>
            <h1 class="mt-4 text-3xl font-semibold tracking-tight">Vue + Inertia + Ziggy are wired</h1>
            <p class="mt-3 text-sm text-slate-300">
                This page is rendered with Inertia and Vue, and uses Ziggy for client-side named route generation.
            </p>

            <Link
                :href="route('home')"
                class="mt-6 inline-flex rounded-lg bg-cyan-400 px-4 py-2 text-sm font-semibold text-slate-950 transition hover:bg-cyan-300"
            >
                Navigate with route('home')
            </Link>
        </section>
    </main>
</template>
