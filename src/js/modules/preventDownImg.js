function preventDownImg() {
    // Prevent downloadIMG

    let allImages = document.querySelectorAll("img");
    allImages.forEach((value) => {
        value.oncontextmenu = (e) => {
            e.preventDefault();
        }
    })
}

// module.exports = preventDownImg;

export default preventDownImg;