<script setup lang="ts">
import { Ref, ref } from "vue";
import { fetchProjects } from "../fetchers";

const projects = ref([]) as Ref<any[]>;

const handleFetchProjects = async () => {
    const d = await fetchProjects();

    if (d) {
        projects.value = d;
    }
};

const handleInit = async () => {
    handleFetchProjects();
};

handleInit();
</script>

<template>
    <div class="d-flex">
        <div><h4>Projects</h4></div>
        <div>
            <a href="#/projects/new"
                ><button class="btn btn-sm btn-primary">Add</button></a
            >
        </div>
    </div>
    <div
        class="overflow-auto border border-dark"
        style="height: 75vh; resize: vertical"
    >
        <table class="table table-sm" style="border-collapse: separate">
            <tr>
                <th
                    class="bg-dark text-light"
                    v-for="h in [
                        '#',
                        'Name',
                        'Location',
                        'Material',
                        'Area',
                        'Is hot?',
                    ]"
                    style="position: sticky; top: 0"
                >
                    {{ h }}
                </th>
            </tr>
            <tr v-for="(p, i) in projects">
                <td class="border border-dark p-0 m-0">{{ i + 1 }}</td>
                <td class="border border-dark p-0 m-0">{{ p?.name }}</td>
                <td class="border border-dark p-0 m-0">{{ p?.location }}</td>
                <td class="border border-dark p-0 m-0">{{ p?.material }}</td>
                <td class="border border-dark p-0 m-0">{{ p?.area }}</td>
                <td class="border border-dark p-0 m-0">
                    <input :checked="p?.is_hot" type="checkbox" />
                </td>
            </tr>
        </table>
    </div>
</template>
