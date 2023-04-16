const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})

const url = "https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/d/diabetes";
const link = document.querySelector('#links');

function openNewTab(url){
    const win = window.open(url, '_blank')
    win.focus();
}

links.addEventListener('click', () => {
    openNewTab(url)
})