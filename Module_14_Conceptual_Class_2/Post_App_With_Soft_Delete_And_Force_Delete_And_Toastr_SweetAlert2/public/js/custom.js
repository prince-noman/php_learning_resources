// document
//     .getElementById("featuredImage")
//     .addEventListener("change", function () {
//         const reader = new FileReader();
//         console.log(reader);
//         reader.addEventListener("load", () => {
//             document.querySelector("#featuredImageDisplay").src = reader.result;
//             featuredImageDisplay.classList.remove("hidden");
//         });
//         reader.readAsDataURL(this.files[0]);
//     });

document
    .querySelector(".confirm-delete")
    .addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("deletePost").submit();
                Swal.fire({
                    title: "Deleted!",
                    text: "Your Post has been deleted.",
                    icon: "success",
                });
            }
        });
    });
