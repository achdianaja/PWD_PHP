function btnSubmit() {
    const name = document.getElementById('name').value;
    if (name) {
        alert("Selamat datang " + name);
        window.localStorage.setItem('name', name);
    } else {
        alert("Silahkan masukan nama");
    }
}

const storedName = window.localStorage.getItem('name');

if (!storedName) {
    document.getElementById('getName').innerText = "Nama tidak ditemukan!";
} else {
    document.getElementById('getName').innerText = storedName;

}

function logout() {
    window.localStorage.removeItem('name');
    alert("Berhasil logout");
    window.location.href = "/index.php";
    console.log("Data berhasil dihapus dari localStorage");
}
