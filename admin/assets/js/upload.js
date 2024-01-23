// function updateImage() {
//     var form = document.getElementById('updateForm');
//     var formData = new FormData(form);

//     // Sử dụng XMLHttpRequest để gửi dữ liệu lên server không cần tải lại trang
//     var xhr = new XMLHttpRequest();
//     xhr.open('POST', 'upload-img.php', true);

//     xhr.onreadystatechange = function () {
//         if (xhr.readyState == 4 && xhr.status == 200) {
//             // Xử lý phản hồi từ server nếu cần
//             console.log(xhr.responseText);
//             location.reload();
//         }
//     };

//     xhr.send(formData);
// }

function updateImage(url, id) {
  var form = document.getElementById("updateForm");
  var formData = new FormData(form);

  url = url + "?id=" + id;

  fetch(url, {
    method: "POST",
    body: formData,
  })
    .then(function (response) {
      if (response.ok) {
        return response.json();
      } else {
        throw new Error("Error: " + response.status);
      }
    })
    .then(function (data) {
      var message = data.message;
      swal("Success!", message, "success");
    })
    .catch(function (error) {
      console.error(error);
    });
}
function openModal(id) {
  $("#" + id + "").modal("show");
}

// function updateProduct(){
//   const data = {
//     productName: document.getElementById("editProductName").value,
//     price: document.getElementById("editPrice").value,
//     description: document.getElementById("editDescription").value,
//   }

//   const get_id = "<?php echo $id; ?>";
//   fetch("product-page.php?page=add&productID=" + get_id, {
//     method: "POST",
//     headers: {
//       "Content-Type": "application/json",
//     },
//     body: JSON.stringify(data),
//   })  
//   .then((response) => response.json())
//   .then((data) => {
//     console.log("Success:", data);
//   })  
//   .catch((error) => {
//     console.error("Error:", error);
//   });

//   document.getElementById("productForm").addEventListener("submit", function(even){
//     even.preventDefault();
//     updateProduct();
//   });

// }
