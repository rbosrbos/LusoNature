const pics = document.getElementById('pictures');
const label = document.getElementById('list_label');
const list = document.getElementById('file_list');
if (pics) {
    pics.onclick = outside
}

function outside() {
    document.body.onfocus = inside
}

function inside() {
    document.body.onfocus = null
    setTimeout(() => {
        let files = pics.files;
        if (files.length > 10) {
            pics.value = '';
            alert('Maximum 10 pictures allowed');
        }
        if (files.length) {
            label.classList.remove('hidden');
            list.innerHTML = '';
            for (let i = 0; i < files.length; i++) {
                let node = document.createElement('li');
                let textnode = document.createTextNode(files[i].name);
                node.appendChild(textnode);
                list.appendChild(node);
            }
        } else {
            label.classList.add('hidden');
            list.innerHTML = '';
        }
    }, 100);
}
document.getElementById('formSubmit').onclick = function (e) {
    e.preventDefault();
    const images = document.getElementById('place_images');
    if (images) {
        const children = images.children;
        let sendImages = [];
        for (let i = 0; i < children.length; i++) {
            sendImages.push(children[i].id)
        }
        var input = document.createElement("input");
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'images');
        input.setAttribute('value', JSON.stringify(sendImages));
        this.parentElement.appendChild(input);
    }
    this.parentElement.submit();
}
