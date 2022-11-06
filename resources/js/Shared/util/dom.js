/**
 * @param  {HTMLElement} element
 * @param {string} prefix
 * @param {string} replace
 * @returns {HTMLElement}
 */
export const removeClassByPrefix = (element, prefix, replace = '') => {
    const regex = new RegExp('\\b' + prefix + '[^ ]*[ ]?\\b', 'g');
    element.className = element.className.replace(regex, replace);
    return element;
}

/**
 * @param {HTMLElement} element
 * @param {string} loadingText
 */
export const createButtonLoader = (element, loadingText = 'chargement...') => {
    element.classList.add('disabled')
    element.setAttribute('disabled', 'disabled')
    element.setAttribute('aria-disabled', 'true')
    element.setAttribute('tabindex', '-1')

    let icon = element.querySelector('.icon')
    if (icon) {
        removeClassByPrefix(icon, 'ni-', 'ni-loader')
            .setAttribute('aria-label', 'loader')
    } else {
        element.innerHTML = `
            <em class="icon ni ni-loader" role="img" aria-label="loader"></em>
            <span>${loadingText}</span>
        `
    }
}

/**
 * @param {HTMLButtonElement|HTMLAnchorElement} element
 * @param {string} content
 */
export const removeButtonLoader = (element, content) => {
    element.classList.remove('disabled')
    element.removeAttribute('disabled')
    element.setAttribute('aria-disabled', 'false');
    element.setAttribute('tabindex', '0')
    element.innerHTML = content
}
