const open = document.getElementById('openpopup');
const modalcontainer = document.getElementById('modalcontainer');
const close = document.getElementById('close');

const open2 = document.getElementById('openpopup2');
const modalcontainer2 = document.getElementById('modalcontainer2');
const close2 = document.getElementById('close2');


open.addEventListener('click', () => {
    modalcontainer.classList.add('show');
})

close.addEventListener('click', () => {
    modalcontainer.classList.remove('show');
})

open2.addEventListener('click', () => {
    modalcontainer2.classList.add('show');
})

close2.addEventListener('click', () => {
    modalcontainer2.classList.remove('show');
})