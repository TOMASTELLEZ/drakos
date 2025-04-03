document.getElementById('settings-btn').addEventListener('click', function () {
    var menu = document.getElementById('settings-menu');
    menu.style.display = menu.style.display === 'none' || menu.style.display === '' ? 'block' : 'none';
});

document.getElementById('file-input').addEventListener('change', function (event) {
    var file = event.target.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('profile-pic').style.backgroundImage = `url(${e.target.result})`;
        };
        reader.readAsDataURL(file);
    }
});