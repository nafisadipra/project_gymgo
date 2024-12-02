let previewContainer =document.querySelector('.product-preview');
let previewbox =previewContainer.querySelectorAll('.preview');

document.querySelectorAll('.product .list').forEach(list =>{list.onclick =() =>{
    previewContainer.style.display = 'flex';
    let name= list.getAttribute('data-name');
    previewbox.forEach(preview =>{
        let target = preview.getAttribute('data-target');
        if(name = target){
            preview.classList.add('active');
        }

    });
};
})