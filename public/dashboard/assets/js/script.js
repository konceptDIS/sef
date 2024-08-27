
$(document).ready(function(){
    $(".message-alert").delay(7000).fadeOut("slow");
});

function imgPreview(pid, fid) {
    var preview = document.querySelector(pid);
    var fileInput = document.querySelector(fid);

    if (fileInput.files && fileInput.files[0]) {
        var file = fileInput.files[0];
        var reader = new FileReader();

        reader.addEventListener("load", function() {
            preview.src = reader.result;
        }, false);

        reader.readAsDataURL(file);
    }
}

