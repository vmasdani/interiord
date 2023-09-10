<script setup lang="ts">
import { Ref, ref } from "vue";
import { useRoute, useRouter } from "vue-router";
import { fetchProduct } from "../fetchers";

const product = ref({}) as Ref<any>;
const router = useRouter();

const photo = ref({ photo: null as string | null });
const fr = new FileReader();

const handleSave = async () => {
    try {
        const resp = await fetch(`${window.location.origin}/api/products`, {
            method: "post",
            headers: { "content-type": "application/json" },
            body: JSON.stringify(product.value),
        });

        if (resp.status !== 200) {
            throw await resp.text();
        }

        if (photo.value.photo) {
            await fetch(
                `${window.location.origin}/api/products/${product?.value.id}/photo`,
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

        router.push("/products");
    } catch (e) {
        console.error(e);
    }
};
const route = useRoute();
const fetchProductData = async () => {
    if (!isNaN(parseInt((route.params as any)?.id))) {
        const d = await fetchProduct({
            id: parseInt((route.params as any)?.id),
        });

        if (d) {
            // alert(JSON.stringify(d));
            product.value = d;
        }
    }
};
const handleInit = async () => {
    fetchProductData();
};

const windowx = window;

handleInit();
</script>

<template>
    <!-- {{ JSON.stringify(product, null, 2) }} -->
    <div class="d-flex">
        <div><h4>Product Detail</h4></div>
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
        <small><strong>Product Name</strong></small>
    </div>
    <div>
        <input
            :value="product?.name"
            @input="e=>{
                product.name = (e.target as HTMLInputElement).value
            }"
            placeholder="Product Name..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Product Type </strong></small>
    </div>
    <div class="d-flex">
        <div v-for="h in ['Marmer Granit', 'Besi', 'Aksesoris']">
            <button
                :class="`btn btn-sm ${
                    product.type === h ? `btn-primary` : `btn-outline-primary`
                }`"
                @click="
                    () => {
                        product.type = h;
                    }
                "
            >
                {{ h }}
            </button>
        </div>

        <input
            :value="product?.type"
            placeholder="Product Type..."
            @input="e=>{
                product.type = (e.target as HTMLInputElement).value
            }"
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Price/m2</strong></small>
    </div>
    <div>
        <input
            :value="product?.price_per_m2"
            @input="e=>{
                product.price_per_m2 = (e.target as HTMLInputElement).value
            }"
            placeholder="Price/m2..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>T1</strong></small>
    </div>
    <div>
        <input
            :value="product?.t1"
            @input="e=>{
                product.t1 = (e.target as HTMLInputElement).value
            }"
            placeholder="T1..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>T2/3</strong></small>
    </div>
    <div>
        <input
            :value="product?.t23"
            @input="e=>{
                product.t23 = (e.target as HTMLInputElement).value
            }"
            placeholder="T2/3..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>1 set</strong></small>
    </div>
    <div>
        <input
            :value="product?.one_set"
            @input="e=>{
                product.one_set = (e.target as HTMLInputElement).value
            }"
            placeholder="1 set..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Top</strong></small>
    </div>
    <div>
        <input
            :value="product?.top"
            @input="e=>{
                product.top = (e.target as HTMLInputElement).value
            }"
            placeholder="Top..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Meja</strong></small>
    </div>
    <div>
        <input
            :value="product?.meja"
            @input="e=>{
                product.meja = (e.target as HTMLInputElement).value
            }"
            placeholder="Meja..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Fin</strong></small>
    </div>
    <div>
        <input
            :value="product?.fin"
            @input="e=>{
                product.fin = (e.target as HTMLInputElement).value
            }"
            placeholder="Fin..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Price</strong></small>
    </div>
    <div>
        <input
            :value="product?.price"
            @input="e=>{
                product.price = (e.target as HTMLInputElement).value
            }"
            placeholder="Price..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Photo</strong></small>
    </div>
    <div v-if="product?.id">
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
        :src="`${windowx.location.origin}/api/products/${(route.params as any)?.id}/photo`"
    />
</template>
