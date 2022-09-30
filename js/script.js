const upload_image_button = document.querySelector('.upload-image-button');
const upload_image_name = document.querySelector('.upload-text')
const image_input = document.querySelector('input[id=upload-image]')
let click_redirection = () => {
    image_input.click();
}
let change_handler = () => {
    if (image_input.value) {

        // let fileName = image_input.value.match(/[^\/\\:*?"<>|]+(.png|.gif|.jpg)$/
        let range_counter = 0;
        let path_index = image_input.value.length;
        while (image_input.value[path_index] !== '\\') {
            range_counter--;
            path_index--;
        }
        let fileName = image_input.value.slice(range_counter + 1);

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
