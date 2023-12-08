function showSuccessPopup() {
    var popup = document.getElementById('success-popup');
    popup.style.display = 'block';

    setTimeout(function () {
        popup.style.display = 'none';
    }, 2000);

    return true;
}
