const image_input = document.querySelector("image_input");
var uploaded_image = "";
if(image_input != null){
image_input.addEventListener("change",function(){
    const reader = new FileReader();
    reader.addEventListener("loade", () => {
        uploaded_image = reader.result;
        document.querySelector("display-image").style.backgroundImage = 'url($(  uploaded_image))';
    })
    reader.readAsDataURL(this.files[0]);
});};