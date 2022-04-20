const links = document.getElementsByClassName('link');

links.addEventListener('mouseover', () =>{
    if(links[0].classlist.contains('fs-5')){
        links[0].classlist.remove('fs-5');
        links[0].classlist.add('fs-4');
    }
    else if(links[0].classlist.contains('fs-4')){
        links[0].classlist.remove('fs-4');
        links[0].classlist.add('fs-3');
    }
    else if(links[0].classlist.contains('fs-3')){
        links[0].classlist.remove('fs-3');
        links[0].classlist.add('fs-2');
    }
    else if(links[0].classlist.contains('fs-2')){
        links[0].classlist.remove('fs-2');
        links[0].classlist.add('fs-1');
    }
});