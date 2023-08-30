
const wrapper = document.querySelector('.wrapper'); /* css wrapper class */
const regLink = document.querySelector('.reg-link'); /* css reg-link class */
const loginLink = document.querySelector('.login-link'); /* css login-link class */

regLink.onclick = () => {
    wrapper.classList.add('active');
}

loginLink.onclick = () => {
    wrapper.classList.remove('active');
} 