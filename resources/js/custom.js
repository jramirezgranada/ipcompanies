$(document).ready(function () {
    $(".company-detail").on("click", function () {
        let companyId = $(this).attr('data-id');

        $.ajax({
            url: '/admin/companies/' + companyId,
            context: document.body
        }).done(function (data) {
            clearFields();

            $(".company-name").text(data.name);
            $(".company-email").text(data.email);
            $(".company-website").append((data.website) ? "<a href='" + data.website + "' target='_blank'>" + data.website + "</a>" : "There is not a website for this company");
            $(".company-logo").append((data.logo) ? "<img src='" + data.logo + "'>" : 'There is not logo for this company');
            $(".edit-company").attr("href", "/admin/companies/" + data.id + "/edit")
        });
    });

    $(".employee-detail").on("click", function () {
        let employeeId = $(this).attr('data-id');

        $.ajax({
            url: '/admin/employees/' + employeeId,
            context: document.body
        }).done(function (data) {
            clearEmployeeFields();

            $(".employee-first-name").text(data.first_name);
            $(".employee-last-name").text(data.last_name);
            $(".employee-email").text(data.email);
            $(".employee-phone").text(data.phone);
            $(".employee-company").text(data.company.name);
            $(".edit-employee").attr("href", "/admin/employees/" + data.id + "/edit")
        });
    });

    $('.delete-record').on("click", function () {
        if (confirm("Are You Sure to delete this")) {
            $(this).parent('.destroy-form').submit();
        }
    });

    function clearFields() {
        $('.company-name').text('');
        $('.company-email').text('');
        $('.company-website').html('');
        $('.company-logo').html('');
    }

    function clearEmployeeFields() {
        $(".employee-first-name").text('');
        $(".employee-last-name").text('');
        $(".employee-email").text('');
        $(".employee-phone").text('');
        $(".employee-company").text('');
    }
})