let navLinks = Array.from(document.querySelectorAll('.nav a'));
let options = Array.from(document.querySelectorAll('.option'));
navLinks.forEach(link=>{
    link.addEventListener('click', (e)=>{
        e.preventDefault();
        let index = navLinks.indexOf(link);
        let currenIndex = options.indexOf(document.querySelector('.option.default'))

        console.log(index);
        console.log(currenIndex);

        if(index != currenIndex){


            $( options[currenIndex] ).fadeOut( "", function() {
                options[currenIndex].classList.remove('default');
                navLinks[currenIndex].querySelector('span').style.fontWeight = '400';
            });

            $( options[index] ).fadeIn( "", function() {
                options[index].classList.add('default');
                navLinks[index].querySelector('span').style.fontWeight = '700';
            });
        }
    })
})