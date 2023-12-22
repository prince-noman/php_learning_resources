document
    .getElementById("featuredImage")
    .addEventListener("change", function () {
        const reader = new FileReader();
        console.log(reader);
        reader.addEventListener("load", () => {
            document.querySelector("#featuredImageDisplay").src = reader.result;
        });
        reader.readAsDataURL(this.files[0]);
    });
