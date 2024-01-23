<!-- JS Implementing Plugins -->
<script src="assets\js\vendor.min.js"></script>



<!-- JS Front -->
<script src="assets\js\theme.min.js"></script>

<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function() {
    // ONLY DEV
    // =======================================================

    if (window.localStorage.getItem('hs-builder-popover') === null) {
      $('#builderPopover').popover('show')
        .on('shown.bs.popover', function() {
          $('.popover').last().addClass('popover-dark')
        });

      $(document).on('click', '#closeBuilderPopover', function() {
        window.localStorage.setItem('hs-builder-popover', true);
        $('#builderPopover').popover('dispose');
      });
    } else {
      $('#builderPopover').on('show.bs.popover', function() {
        return false
      });
    }

    // END ONLY DEV
    // =======================================================


    // BUILDER TOGGLE INVOKER
    // =======================================================
    $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
      $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
    });


    // INITIALIZATION OF MEGA MENU
    // =======================================================
    var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
      desktop: {
        position: 'left'
      }
    }).init();



    // INITIALIZATION OF NAVBAR VERTICAL NAVIGATION
    // =======================================================
    var sidebar = $('.js-navbar-vertical-aside').hsSideNav();


    // INITIALIZATION OF TOOLTIP IN NAVBAR VERTICAL MENU
    // =======================================================
    $('.js-nav-tooltip-link').tooltip({
      boundary: 'window'
    })

    $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
      if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
        return false;
      }
    });


    // INITIALIZATION OF UNFOLD
    // =======================================================
    $('.js-hs-unfold-invoker').each(function() {
      var unfold = new HSUnfold($(this)).init();
    });


    // INITIALIZATION OF FORM SEARCH
    // =======================================================
    $('.js-form-search').each(function() {
      new HSFormSearch($(this)).init()
    });


    // INITIALIZATION OF SHOW PASSWORD
    // =======================================================
    $('.js-toggle-password').each(function() {
      new HSTogglePassword(this).init()
    });


    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });


    // INITIALIZATION OF TABS
    // =======================================================
    $('.js-tabs-to-dropdown').each(function() {
      var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
    });


    // INITIALIZATION OF STEP FORM
    // =======================================================
    $('.js-step-form').each(function() {
      var stepForm = new HSStepForm($(this), {
        finish: function() {
          $("#addUserStepFormProgress").hide();
          $("#addUserStepFormContent").hide();
          $("#successMessageContent").show();
        }
      }).init();
    });


    // INITIALIZATION OF MASKED INPUT
    // =======================================================
    $('.js-masked-input').each(function() {
      var mask = $.HSCore.components.HSMask.init($(this));
    });


    // INITIALIZATION OF SELECT2
    // =======================================================
    $('.js-select2-custom').each(function() {
      var select2 = $.HSCore.components.HSSelect2.init($(this));
    });


    // INITIALIZATION OF COUNTERS
    // =======================================================
    $('.js-counter').each(function() {
      var counter = new HSCounter($(this)).init();
    });


    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copy',
          className: 'd-none'
        },
        {
          extend: 'excel',
          className: 'd-none'
        },
        {
          extend: 'csv',
          className: 'd-none'
        },
        {
          extend: 'pdf',
          className: 'd-none'
        },
        {
          extend: 'print',
          className: 'd-none'
        },
      ],
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: '<div class="text-center p-4">' +
          '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
          '<p class="mb-0">No data to show</p>' +
          '</div>'
      }
    });

    $('#export-copy').click(function() {
      datatable.button('.buttons-copy').trigger()
    });

    $('#export-excel').click(function() {
      datatable.button('.buttons-excel').trigger()
    });

    $('#export-csv').click(function() {
      datatable.button('.buttons-csv').trigger()
    });

    $('#export-pdf').click(function() {
      datatable.button('.buttons-pdf').trigger()
    });

    $('#export-print').click(function() {
      datatable.button('.buttons-print').trigger()
    });

    $('.js-datatable-filter').on('change', function() {
      var $this = $(this),
        elVal = $this.val(),
        targetColumnIndex = $this.data('target-column-index');

      datatable.column(targetColumnIndex).search(elVal).draw();
    });

    $('#datatableSearch').on('mouseup', function(e) {
      var $input = $(this),
        oldValue = $input.val();

      if (oldValue == "") return;

      setTimeout(function() {
        var newValue = $input.val();

        if (newValue == "") {
          // Gotcha
          datatable.search('').draw();
        }
      }, 1);
    });


    // INITIALIZATION OF QUICK VIEW POPOVER
    // =======================================================
    $('#editUserPopover').popover('show');

    $(document).on('click', '#closeEditUserPopover', function() {
      $('#editUserPopover').popover('dispose');
    });

    $('#editUserModal').on('show.bs.modal', function() {
      $('#editUserPopover').popover('dispose');
    });


    // DARK POPOVER
    // =======================================================
    $('[data-toggle="popover-dark"]').on('shown.bs.popover', function() {
      $('.popover').last().addClass('popover-dark')
    })
  });
</script>

<!-- IE Support -->
<script>
  document.getElementById('viewProductBtn').addEventListener('click', function() {
    // Lấy giá trị `data-product-id` từ nút
    var productId = this.getAttribute('data-product-id');

    // Chuyển hướng đến trang sản phẩm với tham số id
    window.location.href = 'edituser.php'
  });
</script>

<!-- checkall -->
<script>
  $(document).ready(function() {
    $("#deleteButton").on("click", function() {
      var selectedCategories = $("input[name='selectedCategories[]']:checked").map(function() {
        return $(this).closest("thead").find("a#deleteButton").attr("href");
      }).get();

      if (selectedCategories.length > 0) {
        var categoryID = selectedCategories[0].match(/\?delid=(\d+)/)[1];
        // Gửi yêu cầu xóa tới trang xử lý PHP
        window.location.href = "category-page.php?delid=" + encodeURIComponent(categoryIDs.join(","));
      } else {
        alert("Vui lòng chọn ít nhất một mục để xóa.");
      }
    });
  });
</script>

<!-- check -->
<script>
  // Sử dụng jQuery cho đơn giản
  $(document).ready(function() {
    // Xử lý sự kiện khi checkbox "Chọn tất cả" thay đổi trạng thái
    $("#datatableCheckAll").change(function() {
      // Lấy giá trị trạng thái của checkbox "Chọn tất cả"
      var isChecked = $(this).prop("checked");

      // Thiết lập trạng thái của tất cả các checkbox khác dựa trên checkbox "Chọn tất cả"
      $("input[name='selectedCategories[]']").prop("checked", isChecked);
    });
  });
</script>
<!-- scroll link -->
<script>
  function navigateAndScroll() {
    // Chuyển hướng người dùng đến trang 'list'
    window.location.href = '#';

    // Cuộn tự động xuống vị trí cụ thể (ví dụ: 500px từ đầu trang)
    window.scrollTo(0, 500);
  }
</script>

<script src="./assets/js/upload.js"></script>
<script src="https://kit.fontawesome.com/03dcdfffe5.js" crossorigin="anonymous"></script>
<!-- IE Support -->
<script>
  if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
</script>
</body>

</html>