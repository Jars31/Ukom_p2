$(function () {
  /* Add Data Kategori dengan Admin */
  $("#form_pesan").on('submit', function (e) {
    e.preventDefault();
    var nama = $("#nama").val();
    var email = $("#email").val();
    var hp = $("#hp").val();
    var tamu = $("#tamu").val();
    var masuk = document.getElementById("masuk");
    var checkin = masuk.value;
    var keluar = document.getElementById("keluar");
    var checkout = keluar.value;
    var idkamar = $("#idkamar").val();
    var jkamar = $("#jkamar").val();
    //alert(description);
    if ((nama == "") || (email == "") || (hp == "") || (tamu == "") || (idkamar == "") || (jkamar == "") || (masuk = "") || (keluar = "")) {
      alert("Terjadi kesalahan. Ada data yang kosong!");
      return;
    }

    $.ajax({
      url: "proses/pesan.php",
      type: "POST",
      data: {
        nama: nama,
        email: email,
        hp: hp,
        tamu: tamu,
        checkin: checkin,
        checkout: checkout,
        idkamar: idkamar,
        jkamar: jkamar
      },
      success: function (data) {
        console.log(data);
        if (data == "OK") {
          alert("Pesan TERKIRIM!");
          document.getElementById("form_pesan").reset();
          window.location.href = "bukti_pesan.php?id=" + idkamar + "&nama=" + tamu + "&tm=" + checkin + "&tk="
            + checkout + "&jk=" + jkamar + "&email=" + email;
        }
        if (data == "ERROR") {
          alert("Pesan TIDAK terkirim!")
        }
      }

    });
  });

});

// $(function () {
//   /* Add Data Kategori dengan Admin */
//   $("#konfirmasi").on('click', function () {
//     var nama = $("#nama").val();
//     var email = $("#email").val();
//     var hp = $("#hp").val();
//     var tamu = $("#tamu").val();
//     var masuk = document.getElementById("masuk").value;
//     var keluar = document.getElementById("keluar").value;
//     var idkamar = $("#idkamar").val();
//     var jkamar = $("#jkamar").val();
//     //alert(description);
//     if ((nama === "") || (email === "") || (hp === "") || (tamu === "") || (idkamar === "") || (jkamar === "") || (masuk === "") || (keluar === "")) {
//       alert("Terjadi kesalahan. Ada data yang kosong!");
//       return;
//     }

//     $.ajax({
//       url: "proses/pesan.php",
//       type: "POST",
//       data: {
//         nama: nama,
//         email: email,
//         hp: hp,
//         tamu: tamu,
//         checkin: masuk,
//         checkout: keluar,
//         idkamar: idkamar,
//         jkamar: jkamar
//       },
//       success: function (data) {

//         if (data === "OK") {
//           alert("Pesan TERKIRIM!");
//           document.getElementById("form_pesan").reset();
//           window.location.href = "bukti_pesan.php?id=" + idkamar + "&nama=" + tamu + "&tm=" + masuk + "&tk="
//             + keluar + "&jk=" + jkamar + "&email=" + email;
//         } else if (data === "ERROR") {
//           alert("Pesan TIDAK terkirim!");
//         }
//       }

//     });
//   });
// });

// $(document).ready(function () {
//   $("#form_pesan").submit(function (e) {
//     e.preventDefault();
//     var formData = $(this).serialize();
//     $.ajax({
//       type: "POST",
//       url: "proses/pesan.php",
//       data: formData,
//       success: function (data) {
//         console.log(data);
//         alert("Data inserted successfully");
//         if (data === "OK") {
//           alert("Pesan TERKIRIM!");
//           document.getElementById("form_pesan").reset();
//           window.location.href = "bukti_pesan.php?id=" + idkamar + "&nama=" + tamu + "&tm=" + masuk + "&tk="
//             + keluar + "&jk=" + jkamar + "&email=" + email;
//         } else if (data === "ERROR") {
//           alert("Pesan TIDAK terkirim!");
//         }
//       }
//     });
//   });
// });
