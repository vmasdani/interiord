<script setup lang="ts">
import { ctx } from "../main";

const localStoragex = localStorage;
</script>

<template>
    <div class="vw-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="p-4 rounded rounded-lg border border-dark shadow shadow-md">
            <div><h4>AdminLogin</h4></div>
            <div>
                <small><strong>Username</strong></small>
            </div>
            <div>
                <input
                    placeholder="Username..."
                    class="form-control form-control-sm"
                    @input="
                        (e) => {
                            console.log(e);
                        }
                    "
                />
            </div>
            <div>
                <small><strong>Password</strong></small>
            </div>
            <div>
                <input
                    type="password"
                    placeholder="Password..."
                    class="form-control form-control-sm"
                    @input="
                        (e) => {
                            console.log(e);
                        }
                    "
                />
            </div>
            <div>
                <button
                    class="btn btn-sm btn-primary"
                    @click="
                        () => {
                            ctx.apiKey = 'a';
                            localStoragex.setItem('apiKey', 'a');
                        }
                    "
                >
                    Login
                </button>
            </div>
        </div>
    </div>
</template>
