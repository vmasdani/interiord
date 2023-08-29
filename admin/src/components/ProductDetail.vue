<script setup lang="ts">
import { Ref, ref } from "vue";
import { useRouter } from "vue-router";

const product = ref({}) as Ref<any>;
const router = useRouter();

const handleSave = async () => {
    try {
        const resp = await fetch(`${import.meta.env.VITE_BASE_URL}/api/products`, {
            method: "post",
            headers: { "content-type": "application/json" },
            body: JSON.stringify(product.value),
        });

        if (resp.status !== 200) {
            throw await resp.text();
        }

        router.push("/products");
    } catch (e) {
        console.error(e);
    }
};
</script>

<template>
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
    <div>
        <input
            placeholder="Product Type..."
            class="form-control form-control-sm"
        />
    </div>

    <div>
        <small><strong>Price/m2</strong></small>
    </div>
    <div>
        <input placeholder="Price/m2..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>T1</strong></small>
    </div>
    <div>
        <input placeholder="T1..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>T2/3</strong></small>
    </div>
    <div>
        <input placeholder="T2/3..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>1 set</strong></small>
    </div>
    <div>
        <input placeholder="1 set..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>Top</strong></small>
    </div>
    <div>
        <input placeholder="Top..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>Meja</strong></small>
    </div>
    <div>
        <input placeholder="Meja..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>Fin</strong></small>
    </div>
    <div>
        <input placeholder="Fin..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>Price</strong></small>
    </div>
    <div>
        <input placeholder="Price..." class="form-control form-control-sm" />
    </div>

    <div>
        <small><strong>Photo</strong></small>
    </div>
    <div>
        <input type="file" />
    </div>
</template>
