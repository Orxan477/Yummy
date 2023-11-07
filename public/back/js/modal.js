$(function (e) {
    $(document).on("click", ".delete-btn", function (e) {
        e.preventDefault();

        let url = $(this).attr("href");
        Swal.fire({
            title: 'Əminsiniz?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonText:'Xeyr',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Bəli'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(url).then(data => {
                    console.log(data);
                    if (data.ok) {
                        Swal.fire(
                            'Silindi!',
                            '',
                            'success')
                    }
                    else {
                        alert("warning");
                    }
                    setTimeout(function () { window.location.reload(true); }, 500); 
                })

            }
        })
    })
})