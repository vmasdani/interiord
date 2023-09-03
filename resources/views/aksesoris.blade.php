<!DOCTYPE html>
<html>

<head>
    @include('bootstrapheaders')
    @include('nav')

</head>

<body>
    <div style="background-color:darkblue">
        <div class="container">
            <h4 class="text-light">Aksesoris</h4>


            <div class="d-flex flex-wrap">
                @for ($i = 0; $i < count($data['products']); $i++)
                    <div class="m-4">
                        <div style=" background-color: grey; color: white;width: 17vw; height: 20vh;">
                            <strong>Image here</strong>
                        </div>
                        <div class="d-flex flex-column align-items-center justify-content-center bg-light">
                            <div>
                                <strong>{{ $data['products'][$i]?->name }}</strong>
                            </div>
                            <div>
                                <strong><a href="">Customize your needs</a></strong>
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
