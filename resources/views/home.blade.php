@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row list-product">

        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        $(function () {
            $.ajax({
                type: "Get",
                url: 'https://minh-test-api.herokuapp.com/api/products/list',
                beforeSend: function () {
                    loadProduct(Array(8).fill(undefined));
                },
                complete: function () {
                    setTimeout(function () {
                        $('.card  div').removeClass('loading');
                    }, 1000);
                },
                success: function (response) {
                    loadProduct(response.data);
                }
            });
        });

        function loadProduct(data) {
            $('.list-product').html('');
            $.each(data, function (i, item) {
                // console.log(item.id);
                $('.list-product').append(productTemplate(item));
            });
        };

        function productTemplate(product) {
            if (product != undefined){
                html = '<div class="col-6 col-md-4 col-lg-3 mt-4 ">';
                html += '<div class="card ">';
                html += '  <div class="card-header p-0"><img class="w-100" height="150" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg">';
                html += '  </div>';
                html += '  <div class="card-body">';
                html += ' <div class="card-title ">' + product.name;

                html += '  </div>';
                html += '<div class="card-text">';
                html += '  </div>';
                html += '  </div>';
                html += ' </div>';
                html += ' </div>';
            }else {
                html = '<div class="col-6 col-md-4 col-lg-3 mt-4 ">';
                html += '<div class="card ">';
                html += '  <div class="card-header p-0"><img class="w-100" height="150" src="../images/loading.gif" alt="product">';
                html += '  </div>';
                html += '  <div class="card-body">';
                html += ' <div class="card-title loading w-50">';

                html += '  </div>';
                html += '<div class="card-text loading">';
                html += '  </div>';
                html += '  </div>';
                html += ' </div>';
                html += ' </div>';
            }
            return html;
        }
    </script>
@endpush
