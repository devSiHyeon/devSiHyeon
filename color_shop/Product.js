$(function () {
        $('#Product').DataTable({
            
            ajax: {
                        type: "POST",
                        url: "./Product_ajax.php",
                        dataType: "json",
                        data : "",
                        dataSrc: '',
            },
            columns: [      // data : input의 name값, 다른 기능 추가 가능
                { data: "idx", className: "center" },
                { data: "product_code" },
                { data: "product_name" },
                { data: "sale_price" },
                // { data: "quantity" },
                //{ data: "idx", className: "right"}, // 수량
                { data: "idx", className: "right"}, // 수정
            ],
            "pageLength": 10,
        });
});