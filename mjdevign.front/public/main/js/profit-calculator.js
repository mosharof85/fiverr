let clacSection =  document.querySelector('.sec-calc');
let sliders = clacSection.querySelectorAll('.slider');

window.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.slider').forEach(item=>{
        let input = item.querySelector('input');
        let value = (input.value-input.min)/(input.max-input.min)*100;
        input.style.background = 'linear-gradient(to right, #E80566 0%, #E80566 ' + value + '%, #fff ' + value + '%, white 100%)';
    })
})

document.querySelectorAll('.slider').forEach(item=>{
    let input = item.querySelector('input');
    input.addEventListener('input',()=>{
        let value = (input.value-input.min)/(input.max-input.min)*100;
        input.style.background = 'linear-gradient(to right, #E80566 0%, #E80566 ' + value + '%, #fff ' + value + '%, white 100%)';
        input.previousElementSibling.querySelector('.current').innerText = input.value;
    })
})
