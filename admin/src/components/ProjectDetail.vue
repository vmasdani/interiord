<script setup lang="ts">
import { Ref, ref } from "vue";
import { useRoute, useRouter } from "vue-router";
import { fetchProject } from "../fetchers";

const project = ref({}) as Ref<any>;
const router = useRouter();

const photo = ref({ photo: null as string | null });
const fr = new FileReader();

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

        if (photo.value.photo) {
            await fetch(
                `${window.location.origin}/api/projects/${project?.value.id}/photo`,
                {
                    method: "post",
                    headers: { "content-type": "application/json" },
                    body: JSON.stringify({
                        ...photo.value,
                        photo: photo.value.photo.split("base64,")[1],
                    }),
                }
            );
        }

        router.push("/projects");
    } catch (e) {
        console.error(e);
    }
};

const route = useRoute();
const fetchProjectData = async () => {
    if (!isNaN(parseInt((route.params as any)?.id))) {
        const d = await fetchProject({
            id: parseInt((route.params as any)?.id),
        });

        if (d) {
            // alert(JSON.stringify(d));
            project.value = d;
        }
    }
};
const handleInit = async () => {
    fetchProjectData();
};

const windowx = window;

handleInit();
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
            :value="project?.name"
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
            :value="project?.location"
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
            :value="project?.material"
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
            :value="project?.area"
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
            @click="
                () => {
                    project.is_hot = !project.is_hot;
                }
            "
        />
    </div>

    <div>
        <small><strong>New Photo</strong></small>
    </div>
    <div v-if="project?.id">
        <input
            type="file"
            @input="e=>{
            if((e.target as HTMLInputElement).files?.[0]){

                fr.readAsDataURL((e.target as HTMLInputElement).files?.[0] as File)

                fr.onload=e=>{
                    photo.photo=e.target?.result as string
                }

                fr.onerror=e=>{
                    console.log(e)
                }
            }
        }"
        />
    </div>

    <img :src="photo.photo ?? ''" />

    <img
        :src="`${windowx.location.origin}/api/projects/${(route.params as any)?.id}/photo`"
    />

    <div>
        <small><strong>Multiple Photos</strong></small>
    </div>

    <div v-if="project?.id">
        <input
            type="file"
            @input="e=>{
            if((e.target as HTMLInputElement).files?.[0]){

                fr.readAsDataURL((e.target as HTMLInputElement).files?.[0] as File)

                fr.onload=e=>{
                    project?.project_photos?.push({photo: (e.target?.result as string)})
                    
                }

                fr.onerror=e=>{
                    console.log(e)
                }
            }
        }"
        />
    </div>
    <div class="d-flex flex-wrap">
        <div v-for="p in project?.project_photos ?? []">
            <div class="d-flex border border-dark m-3" style="width: 25vw">
                <img
                    style="width: 25vw"
                    :src="`${windowx.location.origin}/api/project_photos/${(p)?.id}/photo`"
                />
                <img style="width: 25vw" :src="p.photo ?? ''" />
            </div>
            <div>
                <button class="btn btn-sm btn-danger" @click="() => {

                }">
                    Delete
                </button>
            </div>
        </div>
    </div>
</template>
