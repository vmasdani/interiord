export const fetchAdminSetup = async () => {
    try {
        const resp = await fetch(
            `${import.meta.env.VITE_BASE_URL}/api/adminsetup`
        );

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
        const resp = await fetch(
            `${import.meta.env.VITE_BASE_URL}/api/projects`
        );

        if (resp.status !== 200) {
            throw await resp.text();
        }
        return await resp.json();
    } catch (e) {
        return [];
    }
};
export const fetchProducts = async () => {
    try {
        const resp = await fetch(
            `${import.meta.env.VITE_BASE_URL}/api/products`
        );

        if (resp.status !== 200) {
            throw await resp.text();
        }
        return await resp.json();
    } catch (e) {
        return [];
    }
};
