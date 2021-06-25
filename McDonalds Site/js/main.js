const open1 = document.getElementById('open');
const open2 = document.getElementById('open2');
const open3 = document.getElementById('open3');
const modalcontainer1 = document.getElementById('modalcontainer1');
const modalcontainer2 = document.getElementById('modalcontainer2');
const modalcontainer3 = document.getElementById('modalcontainer3');
const close1 = document.getElementById('close1');
const close2 = document.getElementById('close2');
const close3 = document.getElementById('close3');

open1.addEventListener('click', () => {
    modalcontainer1.classList.add('show');
})

close1.addEventListener('click', () => {
    modalcontainer1.classList.remove('show');
})

open2.addEventListener('click', () => {
    modalcontainer2.classList.add('show');
})

close2.addEventListener('click', () => {
    modalcontainer2.classList.remove('show');
})

open3.addEventListener('click', () => {
    modalcontainer3.classList.add('show');
})

close3.addEventListener('click', () => {
    modalcontainer3.classList.remove('show');
})