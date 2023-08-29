<script setup lang="ts">
import { Ref, ref } from "vue";
import { useRouter } from "vue-router";

const project = ref({}) as Ref<any>;
const router = useRouter();

const handleSave = async () => {
    try {
        const resp = await fetch(
            `${import.meta.env.VITE_BASE_URL}/api/projects`,
            {
                method: "post",
                headers: { "content-type": "application/json" },
                body: JSON.stringify(project.value),
            }
        );

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
        <small><strong>Photo</strong></small>
    </div>
    <div>
        <input type="file" />
    </div>
</template>
