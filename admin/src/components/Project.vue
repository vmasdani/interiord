<script setup lang="ts"></script>

<template>
    <div>
        <div><h4>Projects</h4></div>
    </div>
    <div
        class="overflow-auto border border-dark"
        style="height: 75vh; resize: vertical"
    >
        <table class="table table-sm" style="border-collapse: separate">
            <tr>
                <th
                    class="bg-dark text-light"
                    v-for="h in ['#', 'Name']"
                    style="position: sticky; top: 0"
                >
                    {{ h }}
                </th>
            </tr>
        </table>
    </div>
</template>
