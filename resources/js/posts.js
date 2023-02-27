
// show and close a delete modal for delete post
const deletePostModal  = document.getElementById("deletePostModal")
const btn_openModal = document.querySelectorAll(`[name="btn_openModal"]`)
const btn_closeModal = document.querySelectorAll(`[name="btn_closeModal"]`)
const no_btn = document.querySelectorAll(`[name="no_btn"]`);
// open modal
btn_openModal.forEach((btn)=> {
    btn.addEventListener("click" , () => {
        if(deletePostModal.classList.contains("-translate-y-[500px]")) {
            deletePostModal.classList.remove("-translate-y-[500px]");
        }
        deletePostModal.classList.add("-translate-y-[0px]")
    })
})

// close modal
btn_closeModal.forEach((btn)=> {
    btn.addEventListener("click" , () => {
        if(deletePostModal.classList.contains("-translate-y-[0px]")) {
            deletePostModal.classList.remove("-translate-y-[0px]");
        }
        deletePostModal.classList.add("-translate-y-[500px]");
    })
})

// close modal 
no_btn.forEach((btn)=> {
    btn.addEventListener("click" , () => {
        if(deletePostModal.classList.contains("-translate-y-[0px]")) {
            deletePostModal.classList.remove("-translate-y-[0px]");
        }
        deletePostModal.classList.add("-translate-y-[500px]");
    })
})