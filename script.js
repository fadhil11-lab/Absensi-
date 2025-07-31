document.getElementById("absensiForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("absensi.php", {
    method: "POST",
    body: formData
  })
  .then((res) => res.text())
  .then((data) => {
    document.getElementById("message").innerText = data;
  });
});