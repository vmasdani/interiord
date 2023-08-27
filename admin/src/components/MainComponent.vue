<script setup lang="ts">
import { ctx } from "../main";
import LoginPage from "./LoginPage.vue";
import Navbar from "./Navbar.vue";
</script>
<template>
    <div v-if="ctx.apiKey">
        <Navbar />
        <div class="m-3">
            <RouterView />
        </div>
    </div>
    <div v-else>
        <LoginPage />
    </div>
</template>
