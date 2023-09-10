<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div style="background-color:darkblue">
        <div class="container">
            <h4 class="text-light">Marmer & Granit</h4>


            <div class="d-flex flex-wrap">
                @for ($i = 0; $i < count($data['products']); $i++)
                    <div class="m-4">
                        <div class="item-photo" style=" background-color: grey; color: white; height: 20vh;">
                            <img style="max-width: 100%" src="/api/products/{{ $data['products'][$i]?->id }}/photo" />

                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center bg-light">
                            <div  class="bg-light px-2">
                                <strong>{{ $data['products'][$i]?->name }}</strong>
                            </div>
                            <div  class="bg-light px-2">
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
