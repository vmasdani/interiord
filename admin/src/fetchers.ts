export const fetchAdminSetting = async () => {
    try {
        const resp = await fetch(`${window.location.origin}/api/adminsetting`);

        if (resp.status !== 200) {
            throw await resp.text();
        }
        return await resp.json();
    } catch (e) {
        return null;
    }
};

export const fetchProjects = async () => {
    try {
        const resp = await fetch(`${window.location.origin}/api/projects`);

        if (resp.status !== 200) {
            throw await resp.text();
        }
        return await resp.json();
    } catch (e) {
        return [];
    }
};
export const fetchProject = async (params?: { id?: any }) => {
    try {
        const resp = await fetch(
            `${window.location.origin}/api/projects/${params?.id}`
        );

        if (resp.status !== 200) {
            throw await resp.text();
        }
        return await resp.json();
    } catch (e) {
        return null;
    }
};

export const fetchProducts = async () => {
    try {
        const resp = await fetch(`${window.location.origin}/api/products`);

        if (resp.status !== 200) {
            throw await resp.text();
        }
        return await resp.json();
    } catch (e) {
        return [];
    }
};
export const fetchProduct = async (params?: { id?: any }) => {
    try {
        const resp = await fetch(
            `${window.location.origin}/api/products/${params?.id}`
        );

        if (resp.status !== 200) {
            throw await resp.text();
        }
        return await resp.json();
    } catch (e) {
        return null;
    }
};
