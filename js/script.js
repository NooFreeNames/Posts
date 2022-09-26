const upload_image_button = document.querySelector('.upload-image-button');
const upload_image_name = document.querySelector('.upload-text')
const image_input = document.querySelector('input[id=upload-image]')
let click_redirection = () => {
    image_input.click();
}
let change_handler = () => {
    if (image_input.value) {

        let fileName = image_input.value.match(/[\/\\]([\w\d\s\.\-(\)]+)$/)[1];

        if (fileName.length > 22) {
            fileName = fileName.slice(0, 20) + '...';
        }

        upload_image_name.textContent = fileName;

    } else {
        upload_image_name.textContent = "Файл не выбран";
    }
}
upload_image_button.addEventListener('click', click_redirection);
image_input.addEventListener('change', change_handler);
