<script setup lang="ts">
import { Ref, ref } from "vue";
import { fetchProducts } from "../fetchers";

const products = ref([]) as Ref<any[]>;

const handleFetchProducts = async () => {
    const d = await fetchProducts();

    if (d) {
        products.value = d;
    }
};

const handleInit = async () => {
    handleFetchProducts();
};

handleInit();
</script>

<template>
    <div class="d-flex">
        <div><h4>Products</h4></div>
        <div>
            <a href="#/products/new"
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
                        'Type',
                        'Price/m2',
                        'T1',
                        'T2/3',
                        '1 Set',
                        'Top',
                        'Meja',
                        'Fin',
                        'Price',
                    ]"
                    style="position: sticky; top: 0"
                >
                    {{ h }}
                </th>
            </tr>
            <tr v-for="(p, i) in products">
                <td class="border border-dark p-0 m-0">{{ i + 1 }}</td>
                <td class="border border-dark p-0 m-0">{{ p?.name }}</td>
            </tr>
        </table>
    </div>
</template>
