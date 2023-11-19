<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div style="background-color:#22394a; min-height: 100vh">
        <div class="d-flex p-2">

            <div class="flex-grow-1">
                <h4 class="text-light">Marmer & Granit</h4>
            </div>

            <div class="flex-grow-1 d-flex justify-content-center">
                <h4 class="text-light">Product</h4>
            </div>

            <div class="d-flex flex-grow-1">
                <div>
                    <h4 class="text-light">Sort by: </h4>
                </div>
                <div>
                    <select id="sortselect" oninput="{ 
                        window.location=`/marmergranit?sort_by=${this.value}`
                     }">
                        <option value="recommended"> Recommended</option>
                        <option value="bestseller">Best Seller</option>
                    </select>

                </div>

            </div>
        </div>

        <div style="border: 1px solid gold;"></div>

        <div class="container">

            <div class="d-flex flex-wrap">
                @for ($i = 0; $i < count($data['products']); $i++) <div class="m-4">
                    <div class="item-photo" style="background-color: grey; color: white; height: 20vh; ">
                        <img src="/api/products/{{ $data['products'][$i]?->id }}/photo" style="width: 100%; object-fit: cover; height:20vh" />

                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light">
                        <div class="bg-light px-2">
                            <strong>{{ $data['products'][$i]?->name }}</strong>
                        </div>
                        <div class="bg-light px-2">
                            <strong>{{ $data['products'][$i]?->price_per_m2 }}/m2</strong>
                        </div>


                    </div>

            </div>
            @endfor
        </div>

    </div>



    </div>

    @include('bootstrapjs')
</body>

</html>


<style>
    @media only screen and (min-width: 768px) {
        .item-photo {
            width: 17vw !important;
        }
    }
</style>


<script>
    var urlParams = new URLSearchParams(window.location.search);
    let queryString = urlParams.get('sort_by');

    document.getElementById("sortselect").querySelector("option[value='" + queryString + "']").selected = true;
</script>


@include('font')