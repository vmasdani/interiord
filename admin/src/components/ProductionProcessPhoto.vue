<script setup lang="ts">
import { Ref, ref } from "vue";
import { fetchProductionProcessPhotos } from "../fetchers";

const productionProcessPhotos = ref({}) as Ref<any[]>;
// const router = useRouter();

// const photo = ref({ photo: null as string | null });
const fr = new FileReader();

const handleSave = async () => {
    try {
        const resp = await fetch(`${window.location.origin}/api/productionprocessphotos-save-bulk`, {
            method: "post",
            headers: { "content-type": "application/json" },
            body: JSON.stringify(productionProcessPhotos.value),
        });
        if (resp.status !== 200) {
            throw await resp.text();
        }
      
        // window.location.reload()
    } catch (e) {
        console.error(e);
    }
};

// const route = useRoute();
const fetchProjectData = async () => {
    const d = await fetchProductionProcessPhotos();

    if (d) {
        // alert(JSON.stringify(d));
        productionProcessPhotos.value = d;
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
        <div>
            <h4>Production Process Photos</h4>
        </div>
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
        <small><strong>Multiple Photos</strong></small>
    </div>

    <div>
        <button
            class="btn btn-sm btn-primary"
            @click="
                () => {
                    productionProcessPhotos.push({});
                }
            "
        >
            Add
        </button>
    </div>

    <div class="d-flex flex-wrap">
        <div v-for="p in productionProcessPhotos ?? []">
            <div class="d-flex border border-dark m-3" style="width: 25vw">
                <img
                    style="width: 25vw"
                    :src="`${windowx.location.origin}/api/prod_process_photos_photo/${p?.id}`"
                />
                <img v-if="p?.photo" style="width: 25vw" :src="p.photo ?? ''" />
                {{ p?.id }} 
                <!-- {{ `${windowx.location.origin}/api/prod_process_photos_photo/${p?.id}` }} -->
            </div>
            <!-- <div v-if="p?.photo">
                <img :src="p.photo ?? ''" />
            </div> -->
            <div>
                <input
                    type="file"
                    @input="e => {
                        if ((e.target as HTMLInputElement).files?.[0]) {

                            fr.readAsDataURL((e.target as HTMLInputElement).files?.[0] as File)

                            fr.onload = e => {
                                p.photo=  (e.target?.result as string) 

                            }

                            fr.onerror = e => {
                                console.log(e)
                            }
                        }
                    }"
                />
            </div>
            <div>
                <button class="btn btn-sm btn-danger" @click="() => {}">
                    Delete
                </button>
            </div>
        </div>
    </div>
</template>
