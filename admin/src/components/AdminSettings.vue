<script setup lang="ts">
import { Ref, ref } from "vue";
import { fetchAdminSetting } from "../fetchers";
import { ctx } from "../main";

const adminSetting = ref({}) as Ref<any>;

const fetchAdminSettingData = async () => {
    const d = await fetchAdminSetting();

    if (d) {
        adminSetting.value = d;
    }
};
const handleSave = async () => {
    try {
        const resp = await fetch(`${window.location.origin}/api/adminsetting`, {
            method: "post",
            headers: {
                authorization: ctx.value.apiKey ?? "",
                "content-type": "application/json",
            },
            body: JSON.stringify(adminSetting.value),
        });
        if (resp.status !== 200) {
            throw await resp.text();
        }

        window.location.reload();
    } catch (e) {
        console.error(e);
    }
};

const handleInit = async () => {
    fetchAdminSettingData();
};

handleInit();
</script>

<template>
    <div class="container">
        <div class="d-flex">
            <div><h4>Admin Settings</h4></div>
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
        <div><hr class="border border-dark" /></div>
        <div>
            <small><strong>WhatsApp Number</strong></small>
        </div>
        <div>
            <input
                :value="adminSetting?.whatsapp_number"
                @input="e=>{
                    adminSetting.whatsapp_number = (e.target as HTMLInputElement).value
                }"
                placeholder="WA Number..."
                class="form-control form-control-sm"
            />
        </div>
        <div>
            <small><strong>Email</strong></small>
        </div>
        <div>
            <input
                :value="adminSetting?.email"
                @input="e=>{
                    adminSetting.email = (e.target as HTMLInputElement).value
                }"
                placeholder="Email..."
                class="form-control form-control-sm"
            />
        </div>
        <div>
            <small><strong>Tokopedia Link</strong></small>
        </div>
        <div>
            <input
                :value="adminSetting?.tokopedia_link"
                @input="e=>{
                    adminSetting.tokopedia_link = (e.target as HTMLInputElement).value
                }"
                placeholder="Tokopedia link..."
                class="form-control form-control-sm"
            />
        </div>
        <div>
            <small><strong>Address</strong></small>
        </div>
        <div>
            <textarea
                :value="adminSetting?.address"
                @input="e=>{
                    adminSetting.address = (e.target as HTMLInputElement).value
                }"
                placeholder="Address..."
                class="form-control form-control-sm"
            />
        </div>
        <div>
            <small><strong>Instagram Link</strong></small>
        </div>
        <div>
            <input
                :value="adminSetting?.instagram_link"
                @input="e=>{
                    adminSetting.instagram_link = (e.target as HTMLInputElement).value
                }"
                placeholder="Instagram link..."
                class="form-control form-control-sm"
            />
        </div>
    </div>
</template>
