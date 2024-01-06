document
    .getElementById("featuredImage")
    .addEventListener("change", function () {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            document.querySelector("#featuredImageDisplay").src = reader.result;
            featuredImageDisplay.classList.remove("hidden");
        });
        reader.readAsDataURL(this.files[0]);
    });
