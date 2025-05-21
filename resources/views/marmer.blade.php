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
                <h4 class="text-light">Marmer</h4>
            </div>

            <div class="flex-grow-1 d-flex justify-content-center">
                <h4 class="text-light">Product</h4>
            </div>

            <div class="d-flex flex-grow-1">
                <div>
                    <h4 class="text-light">Search: </h4>
                </div>

                <div><input class="form-control form-control-sm" id="qsearch" placeholder="Search..." /></div>
                <!-- <div>
                    <select id="sortselect" oninput="{ 
                        window.location=`/marmer?sort_by=${this.value}`
                     }">
                        <option value="recommended"> Recommended</option>
                        <option value="bestseller">Best Seller</option>
                    </select>

                </div> -->

            </div>
        </div>

        <div style="border: 1px solid gold;"></div>

        <div class="container">

            <div class="d-flex flex-wrap">
                @for ($i = 0; $i < count($data['products']); $i++) <div class="m-4 itemlist">
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

    /* Mobile screens (less than 768px) */
    @media only screen and (max-width: 767px) {
        .item-photo {
            width: 30vw !important;
            /* Example: Make it full width on mobile */
            /* Or you can set a specific width, e.g., width: 80vw; */
        }
    }
</style>


<script>
    var urlParams = new URLSearchParams(window.location.search);
    let queryString = urlParams.get('sort_by');

    document.getElementById('qsearch').addEventListener('input', e => {
        console.log(document.getElementsByClassName('itemlist'), e?.target?.value)

        document.querySelectorAll('.itemlist').forEach(i => {
            const textc = i.children?.[1]?.children?.[0]?.textContent.trim().toLowerCase()

            if (textc.includes(e.target?.value ?? '')) {
                i.style.display = 'block'
            } else {
                i.style.display = 'none'
            }
        })

    })

    // document.getElementById("sortselect").querySelector("option[value='" + queryString + "']").selected = true;
</script>


@include('font')