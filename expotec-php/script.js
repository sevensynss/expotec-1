var menuItem = document.querySelectorAll('.side-item')

function selectLink(){
    menuItem.forEach((item)=>
        item.classList.remove('ativo')
    )
    this.classList.add('ativo')
}

menuItem.forEach((item)=>
    item.addEventListener('click', selectLink)
)

var btnExp = document.querySelector('.expandir-btn')
var sidebar = document.querySelector('.menu-lateral')

btnExp.addEventListener('click', function(){
    sidebar.classList.toggle('expandir')
})
