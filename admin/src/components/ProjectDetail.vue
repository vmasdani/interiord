<script setup lang="ts">
import { Ref, ref } from "vue";
import { useRouter } from "vue-router";

const project = ref({}) as Ref<any>;
const router = useRouter();

const handleSave = async () => {
    try {
        const resp = await fetch(`${window.location.origin}/api/projects`, {
            method: "post",
            headers: { "content-type": "application/json" },
            body: JSON.stringify(project.value),
        });

        if (resp.status !== 200) {
            throw await resp.text();
        }

        router.push("/projects");
    } catch (e) {
        console.error(e);
    }
};
</script>

<template>
    <div class="d-flex">
        <div><h4>Project Detail</h4></div>
        <div>
            <button
                class="btn btn-sm btn-primary"
                @click="
                    () => {
                        handleSave();
                    }
                "
            >
                Save
            </button>
        </div>
    </div>
    <div>
        <small><strong>Project Name</strong></small>
    </div>
    <div>
        <input
            placeholder="Project Name..."
            class="form-control form-control-sm"
            @input="e=>{
                project.name = (e.target as HTMLInputElement).value
            }"
        />
    </div>

    <div>
        <small><strong>Location</strong></small>
    </div>
    <div>
        <input
            placeholder="Location..."
            class="form-control form-control-sm"
            @input="e=>{
                project.location = (e.target as HTMLInputElement).value
            }"
        />
    </div>

    <div>
        <small><strong>Material</strong></small>
    </div>
    <div>
        <input
            placeholder="Material..."
            class="form-control form-control-sm"
            @input="e=>{
                project.material = (e.target as HTMLInputElement).value
            }"
        />
    </div>

    <div>
        <small><strong>Area</strong></small>
    </div>
    <div>
        <input
            placeholder="Area..."
            class="form-control form-control-sm"
            @input="e=>{
                project.area = (e.target as HTMLInputElement).value
            }"
        /> 
    </div>

    <div>
        <small><strong>Is Hot?</strong></small>
    </div>
    <div>
        <input
            type="checkbox"
            :checked="project.is_hot"
            @click="()=>{
                project.is_hot = !project.is_hot
            }"
        />
    </div>

    <div>
        <small><strong>Photo</strong></small>
    </div>
    <div>
        <input type="file" />
    </div>
</template>
