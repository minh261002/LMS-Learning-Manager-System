var token = jQuery('meta[name="csrf-token"]').attr('content'),
    urlHome = jQuery('meta[name="url-home"]').attr('content'),
    columns;

function searchColumsDataTable(datatable, column_search = [], column_date = [], column_select = [], column_select2 = []) {
    datatable.api().columns(column_search).every(function () {

        var column = this,
            input = document.createElement("input"),
            findColumnSelect, findColumnSelect2
        input.setAttribute('class', 'form-control'),
            flagColSelect2Ajax = false;

        if (column_date.length > 0 && column_date.indexOf(column.selector.cols) !== -1) {

            input.setAttribute('type', 'date');

        } else if (findColumnSelect = column_select.find(obj => obj.column === column.selector.cols)) {

            input = document.createElement("select");
            createSelectColumnUniqueDatatableAll(input, findColumnSelect.data);

        } else if (findColumnSelect2 = column_select2.find(obj => obj.column === column.selector.cols)) {

            var resultColumnSelect2 = $.grep(column_select2, function (element) {
                return element.column === column.selector.cols;
            });

            if (resultColumnSelect2.length > 0) {
                input = document.createElement("select");
                if (findColumnSelect2.ajax === true && findColumnSelect2.url) {
                    flagColSelect2Ajax = true;
                    input.setAttribute('class', 'form-select select2-bs5-ajax-many');
                    input.setAttribute('multiple', 'true');
                    input.setAttribute('data-url', findColumnSelect2.url);
                } else {
                    createSelect2ColumnDatatable(input, findColumnSelect2.data);
                }
            }

        }

        input.setAttribute('placeholder', 'Nhập từ khoá');

        $(input).appendTo($(column.footer()).empty())
            .on('change', function () {
                column.search($(this).val(), false, false, true).draw();
            });
    });
}

function addWrapTableScroll(idTable) {
    $(idTable).wrap('<div class="wrap-table-scroll"></div>');
}

function createSelect2ColumnDatatable(input, data) {
    input.setAttribute('class', 'form-select select2-bs5');
    input.setAttribute('multiple', 'true');

    if (typeof data === 'object') {
        Object.keys(data).map((index) => {
            var option = document.createElement("OPTION");
            $.each(data[index], function (key, value) {
                option.value = key;
                option.text = value;
            });
            input.append(option);
        });
    } else {
        data.forEach(function (value, index) {
            var option = document.createElement("OPTION");
            option.value = option.text = value;
            input.append(option);
        });
    }
}

function addSelect2(elm = '.select2') {
    if ($(elm).length) {
        $(elm).select2({
            placeholder: 'Vui lòng chọn',
            language: "vi",
            theme: 'bootstrap-5',
            allowClear: true
        });
    }
}

function select2LoadDataMany(target = '.select2-bs5-ajax-many') {
    var elm = $(target);
    if (elm.length > 0) {
        elm.each(function () {
            select2LoadData('', this);
        });
    }
}

$(document).on('change', 'input.toggle-vis', function (e) {
    e.preventDefault();

    // Get the column API object
    var column = columns.column($(this).attr('data-column'));
    // console.log(column)
    // Toggle the visibility
    column.visible(!column.visible());
    addSelect2();
    select2LoadDataMany();
});

function select2LoadData(url, target = '.select2-bs5-ajax') {
    $(target).select2({
        placeholder: 'Vui lòng chọn',
        language: "vi",
        theme: 'bootstrap-5',
        allowClear: true,
        ajax: {
            delay: 250,  // wait 250 milliseconds before triggering the request
            url: url,
            dataType: 'json',
            processResults: function (data, params) {
                return data;
            }
        }
    });
}

function createSelectColumnUniqueDatatable(column, input) {
    var optionAll = document.createElement("OPTION");
    optionAll.text = '---Tất cả---';
    optionAll.value = '';
    input.setAttribute('class', 'form-select');
    input.append(optionAll);

    column.data().unique().sort().each(function (d, j) {
        var option = document.createElement("OPTION");
        option.value = option.text = d;
        input.append(option);
    });
}

function generateSelectOptions(selectElement, optionsArray) {
    // Xóa tất cả các option hiện có trong select
    selectElement.innerHTML = '';
    var optionAll = document.createElement("OPTION");
    optionAll.text = '--- Tất cả ---';
    optionAll.value = '';
    selectElement.appendChild(optionAll);

    // Tạo và thêm option cho select dựa trên mảng optionsArray
    optionsArray.forEach(function (optionValue) {
        var option = document.createElement('option');
        option.value = option.textContent = optionValue;
        selectElement.appendChild(option);
    });
}

function moveSearchColumnsDatatable(idTable) {
    $(idTable + ' thead').append($(idTable + ' tfoot tr'));
}

function createSelectColumnUniqueDatatableAll(input, data) {
    var optionAll = document.createElement("OPTION");
    optionAll.text = '---Tất cả---';
    optionAll.value = '';
    input.setAttribute('class', 'form-select');
    input.append(optionAll);
    if (typeof data === 'object') {
        Object.keys(data).map((key) => {
            var option = document.createElement("OPTION");
            option.value = key;
            option.text = data[key];
            input.append(option);
        });
    } else {
        data.forEach(function (value, index) {
            var option = document.createElement("OPTION");
            option.value = option.text = value;
            input.append(option);
        });
    }
}

function toggleColumnsDatatable(columns) {
    var headerColumns = columns.header().map(d => d.textContent).toArray(),
        htmlToggleColumns = '', checked;
    $.each(headerColumns, function (index, value) {
        checked = '';
        if (columns.column(index).visible() === true) {
            checked = 'checked';
        }
        htmlToggleColumns += `
            <label class="dropdown-item"><input class="toggle-vis form-check-input m-0 me-2" ${checked} type="checkbox" data-column="${index}">${value}</label>
        `;
        $(".drop-toggle-columns").html(htmlToggleColumns);
    });
}

function handleAjaxError(errors) {
    if (errors.status == 416 || errors.status == 422) {
        $.map(errors.responseJSON.errors, function (value) {
            value.forEach(element => {
                msgError(element);
            })
        })
    } else {
        msgError('Vui lòng tải lại trang');
    }

}

function handleReloadPage() {
    location.reload();
}
