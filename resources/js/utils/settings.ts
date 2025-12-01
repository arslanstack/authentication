export function getSystemSettings() {
    const root = document.querySelector('body');
    if (!root) return {};
    try {
        return JSON.parse(root.getAttribute('data-settings') || '{}');
    } catch {
        return {};
    }
}
