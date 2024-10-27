function btnSubmit() {
    const name = document.getElementById('name').value;
    if (name) {
        alert("Selamat datang " + name);
        window.localStorage.setItem('name', name);
    } else {
        alert("Silahkan masukan nama");
    }
}